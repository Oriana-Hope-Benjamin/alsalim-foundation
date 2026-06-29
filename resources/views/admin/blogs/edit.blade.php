@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Edit Blog</h4>
            <p class="text-muted small">Update the content and details of this article.</p>
        </div>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-light shadow-sm border">
            <i class="fas fa-arrow-left me-2"></i> Back to Blogs
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body p-4 p-md-5">
            
            <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-8 mb-4">
                        <label for="title" class="form-label fw-bold text-secondary">Blog Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $blog->title) }}" placeholder="Enter an engaging title..." required>
                        @error('title')
                            <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="uploaded_by" class="form-label fw-bold text-secondary">Author <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('uploaded_by') is-invalid @enderror" id="uploaded_by" name="uploaded_by" value="{{ old('uploaded_by', $blog->uploaded_by) }}" required>
                        @error('uploaded_by')
                            <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="image" class="form-label fw-bold text-secondary">Cover Image</label>
                    
                    @if($blog->image)
                        <div class="mb-3">
                            <span class="d-block text-muted small mb-1">Current Image:</span>
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Current Blog Image" class="img-thumbnail rounded" style="max-height: 120px;">
                        </div>
                    @endif

                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                    @error('image')
                        <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                    @enderror
                    <div class="form-text">Leave blank to keep the current image. Recommended size: 800x450px. Max: 2MB.</div>
                </div>

                <div class="mb-4">
                    <label for="description" class="form-label fw-bold text-secondary">Blog Content <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="10" placeholder="Write the main body of the blog post here..." required>{{ old('description', $blog->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                    @enderror
                </div>

                <hr class="my-4 text-light border-secondary">

                <div class="d-flex justify-content-end gap-3">
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-light px-4 border">Cancel</a>
                    <button type="submit" class="btn btn-warning text-dark fw-bold px-4 shadow-sm">
                        <i class="fas fa-sync-alt me-2"></i> Update Blog
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection