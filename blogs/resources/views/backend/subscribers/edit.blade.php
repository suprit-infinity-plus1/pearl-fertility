@extends('layouts.admin-master')
@section('title', 'Administrative Dashboard')
@section('content')

    <section class="section">
        <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
            <ul class="breadcrumb text-white-all mb-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-white text-decoration-none"><i
                            class="fas fa-home"></i>
                        Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('subscriber') }}"
                        class="text-decoration-none"><i class="fas fa-list"></i> All Subscribers</a></li>
            </ul>
        </div>

        <div class="card" ng-app="products">
            <div class="card-header bg-dark text-white-all">
                <h4>Update Subscriber</h4>
            </div>
            <div class="card-body">

                <form method="POST" action="{{ route('subscriber.update', $subscriber->id) }}" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf

                    <div class="row">
                        <!-- Subscriber Email -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ old('email', $subscriber->email) }}" disabled>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Subscriber Status -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status <span class="text-danger">*</span></label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="1" {{ old('status', $subscriber  ->status) == 1 ? 'selected' : '' }}>
                                        Avtive</option>
                                    <option value="0" {{ old('status', $subscriber  ->status) == 0 ? 'selected' : '' }}>Inactive
                                    </option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-send"></i> Update Subscriber
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>

@endsection
