<!-- resources/views/feedbackform.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Feedback Form</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('feedback.send') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name <span class="text-danger">(Required)</span></label>
                            <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name" value="{{ old('full_name') }}" required autofocus>
                            @error('full_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">(Required)</span></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="comments" class="form-label">Comments <span class="text-danger">(Required)</span></label>
                            <textarea class="form-control @error('comments') is-invalid @enderror" id="comments" name="comments" rows="4" required>{{ old('comments') }}</textarea>
                            @error('comments')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <p>Let us know what you think of our website:</p>

                        <button type="submit" class="btn btn-primary">Submit Feedback</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
