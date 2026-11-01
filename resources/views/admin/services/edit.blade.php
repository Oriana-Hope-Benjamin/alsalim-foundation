@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Edit Service</h4>
            <p class="text-muted small">Update the details for this service offering.</p>
        </div>
        <a href="{{ route('admin.services.index') }}" class="btn btn-light shadow-sm border">
            <i class="fas fa-arrow-left me-2"></i> Back to Services
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body p-4 p-md-5">
            
            <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="title" class="form-label fw-bold text-secondary">Service Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $service->title) }}" placeholder="e.g., Web Development" required>
                    
                    @error('title')
                        <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="whatsapp_number" class="form-label fw-bold text-secondary">WhatsApp Number <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('whatsapp_number') is-invalid @enderror" id="whatsapp_number" name="whatsapp_number" value="{{ old('whatsapp_number', $service->whatsapp_number) }}" placeholder="e.g., +256700000000" required>
                    
                    @error('whatsapp_number')
                        <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                    @enderror
                    <div class="form-text">Include the country code (e.g., +256, +1, +44).</div>
                </div>

                <div class="mb-4">
                    <label for="image" class="form-label fw-bold text-secondary">Service Image</label>
                    
                    @if($service->image)
                        <div class="mb-3">
                            <span class="d-block text-muted small mb-1">Current Image:</span>
                            <img src="{{ asset('storage/' . $service->image) }}" alt="Current Service Image" class="img-thumbnail rounded" style="max-height: 120px;">
                        </div>
                    @endif

                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                    @error('image')
                        <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                    @enderror
                    <div class="form-text">Leave blank to keep the current image. Recommended size: 800x600px. Max: 2MB.</div>
                </div>

                <div class="mb-4">
                    <label for="description" class="form-label fw-bold text-secondary">Full Description <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="6" placeholder="Explain what this service entails..." required>{{ old('description', $service->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                    @enderror
                </div>

                <hr class="my-4 text-light border-secondary">

                <div class="d-flex justify-content-end gap-3">
                    <a href="{{ route('admin.services.index') }}" class="btn btn-light px-4 border">Cancel</a>
                    <button type="submit" class="btn btn-warning text-dark fw-bold px-4 shadow-sm">
                        <i class="fas fa-sync-alt me-2"></i> Update Service
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection