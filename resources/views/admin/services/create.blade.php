@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Create New Service</h4>
            <p class="text-muted small">Fill in the details below to add a new service offering.</p>
        </div>
        <a href="{{ route('admin.services.index') }}" class="btn btn-light shadow-sm border">
            <i class="fas fa-arrow-left me-2"></i> Back to Services
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body p-4 p-md-5">
            
            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="title" class="form-label fw-bold text-secondary">Service Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" placeholder="e.g., Web Development" required>
                    
                    @error('title')
                        <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="whatsapp_number" class="form-label fw-bold text-secondary">WhatsApp Number <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('whatsapp_number') is-invalid @enderror" id="whatsapp_number" name="whatsapp_number" value="{{ old('whatsapp_number') }}" placeholder="e.g., +256700000000" required>
                    
                    @error('whatsapp_number')
                        <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                    @enderror
                    <div class="form-text">Include the country code (e.g., +256, +1, +44).</div>
                </div>

                <div class="mb-4">
                    <label for="image" class="form-label fw-bold text-secondary">Service Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                    @error('image')
                        <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                    @enderror
                    <div class="form-text">Recommended size: 800x600px. Max size: 2MB.</div>
                </div>

                <div class="mb-4">
                    <label for="description" class="form-label fw-bold text-secondary">Full Description <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="6" placeholder="Explain what this service entails..." required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                    @enderror
                </div>

                <hr class="my-4 text-light border-secondary">

                <div class="d-flex justify-content-end gap-3">
                    <a href="{{ route('admin.services.index') }}" class="btn btn-light px-4 border">Cancel</a>
                    <button type="submit" class="btn btn-warning text-dark fw-bold px-4 shadow-sm">
                        <i class="fas fa-save me-2"></i> Save Service
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection