@extends('layouts.app')

@section('title', 'File Upload')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        @if(session('success'))
            <div class="alert alert-success text-center rounded-3 shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="card shadow border-0 rounded-4 bg-white">
            <div class="card-header text-center bg-black text-white rounded-top-4">
                <h4 class="mb-0">Upload Your File</h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label for="file" class="form-label fw-semibold">Choose File</label>
                        <input type="file" name="file" id="file" class="form-control border-dark" required>
                        @error('file')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark w-100 py-2 rounded-3 fw-semibold">Upload</button>
                </form>
            </div>
            <div class="card-footer text-center bg-light text-muted rounded-bottom-4">
                <small>Developed by Mehedi Ahmed</small>
            </div>
        </div>
    </div>
</div>
@endsection
