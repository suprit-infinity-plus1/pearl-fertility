<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Tag;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index()
    {
        $latestBlog = Blog::orderBy('created_at', 'desc')->take(3)->get();

        // dd($latestBlog);
        return view('frontend.index', compact('latestBlog'));
    }

    public function blogs()
    {
        //  $blogs = Blog::orderBy('created_at', 'desc')->get();
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);

        //  dd($blogs);
        return view('frontend.blog', compact('blogs'));
    }

    public function blogDetail()
    {
        return view('frontend.blog-detail');
    }

    public function getBlog($slug)
    {
        try {
            $blog = Blog::where('slug', $slug)->firstOrFail();
            $recentBlogs = Blog::where('id', '!=', $blog->id)
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();

            // dd($blog);
            return view('frontend.blog-detail', compact('blog', 'recentBlogs'));
        } catch (ModelNotFoundException $ex) {
            return redirect('/')->with('error', 'Whoops, Blog Not Found!');
        } catch (\Exception $ex) {
            return redirect('/')->with('error', 'Whoops, Something Went Wrong from our End!');
        }
    }

    public function submitContact(Request $request)
    {
        $formType = $request->input('form_type');

        if ($formType === 'simple_contact') {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'message' => 'nullable|string',
            ]);
            $subject = 'New Simple Contact Form Submission';
        } elseif ($formType === 'appointment_form') {
            $validated = $request->validate([
                'name' => 'nullable|string|max:255',
                'phone' => 'nullable|string|max:20',
                'gender' => 'nullable|in:male,female,other',
                'age' => 'nullable|numeric|min:0|max:150',
                'appointment_date' => 'nullable|date',
                'appointment_time' => 'nullable|date_format:H:i',
                'message' => 'nullable|string',
            ]);
            $subject = 'New Appointment Form Submission';
        } else {
            // fallback validation if form_type missing or unknown
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'message' => 'nullable|string',
            ]);
            $subject = 'New Contact Form Submission';
        }

        $to = 'keval242@gmail.com';
        $cc = ['sanjaresolutions@gmail.com'];
        $bcc = ['contact@drkevalshukla.com'];

        // Log email data for debugging (optional)
        \Log::info('Sending Contact Email', [
            'to' => $to,
            'cc' => $cc,
            'bcc' => $bcc,
            'data' => $validated,
            'subject' => $subject,
        ]);

        // Check if at least one recipient is available
        if (empty($to) && empty($cc) && empty($bcc)) {
            \Log::error('Email not sent: No recipient (To, CC, or BCC) configured.');

            return redirect()->back()->withErrors(['error' => 'Email could not be sent. No recipient configured.']);
        }

        // Send the email
        Mail::to($to ?: [])
            ->cc($cc)
            ->bcc($bcc)
            ->send(new ContactMessage($validated, $subject));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    // ====================
    public function dashboard()
    {
        // $blogsCount = Blog::count();

        // // Only count properties with p_status = 1
        // $propertiesCount = Property::where('p_status', 1)->count();

        // // Only count interiors with status = 1
        // $interiorsCount = Interior::where('status', 1)->count();

        // dd("dashboard5");

        $data = [
            'blogsCount' => Blog::count(),
            'categoriesCount' => BlogCategory::count(),
            'tagsCount' => Tag::count(),
        ];

        return view('backend.dashboard', $data);

    }
    // ====================

}
