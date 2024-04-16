<<<<<<< HEAD
=======
<!-- resources/views/feedbackform.blade.php -->
<!-- first version, had too many errors -->

>>>>>>> origin/main
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
                <div class="card-header"><h2>Feedback Form</h2></div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

=======
                <div class="card-header"><h1>Feedback Form</h1></div>

                <div class="card-body">
>>>>>>> origin/main
                    <form method="POST" action="{{ route('feedback.send') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name <span class="text-danger">(Required)</span></label>
<<<<<<< HEAD
                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name') }}" required autofocus>
=======
                            <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name" value="{{ old('full_name') }}" required autofocus>
                            @error('full_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
>>>>>>> origin/main
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">(Required)</span></label>
<<<<<<< HEAD
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
=======
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
>>>>>>> origin/main
                        </div>

                        <div class="mb-3">
                            <label for="comments" class="form-label">Comments <span class="text-danger">(Required)</span></label>
<<<<<<< HEAD
                            <textarea class="form-control" id="comments" name="comments" rows="4" required>{{ old('comments') }}</textarea>
=======
                            <textarea class="form-control @error('comments') is-invalid @enderror" id="comments" name="comments" rows="4" required>{{ old('comments') }}</textarea>
                            @error('comments')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
>>>>>>> origin/main
                        </div>

                        <p>Let us know what you think of our website:</p>

                        <button type="submit" class="btn btn-primary">Submit Feedback</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> origin/main
