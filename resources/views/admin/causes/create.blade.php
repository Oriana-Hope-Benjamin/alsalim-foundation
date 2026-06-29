@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Create New Cause</h4>
            <p class="text-muted small">Fill in the details below to launch a new fundraising campaign.</p>
        </div>
        <a href="{{ route('admin.causes.index') }}" class="btn btn-light shadow-sm border">
            <i class="fas fa-arrow-left me-2"></i> Back to Causes
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body p-4 p-md-5">
            
            <form action="{{ route('admin.causes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="title" class="form-label fw-bold text-secondary">Cause Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" placeholder="e.g., Clean Water Initiative" required>
                    
                    @error('title')
                        <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="goal_amount" class="form-label fw-bold text-secondary">Funding Goal ($) <span class="text-danger">*</span></label>
                        <input type="number" step="0.01" class="form-control @error('goal_amount') is-invalid @enderror" id="goal_amount" name="goal_amount" value="{{ old('goal_amount') }}" placeholder="50000" required>
                        @error('goal_amount')
                            <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-4">
                        <label for="amount_raised" class="form-label fw-bold text-secondary">Already Raised ($)</label>
                        <input type="number" step="0.01" class="form-control @error('amount_raised') is-invalid @enderror" id="amount_raised" name="amount_raised" value="{{ old('amount_raised', 0) }}">
                        @error('amount_raised')
                            <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Leave as 0 if this is a brand new cause.</div>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="image" class="form-label fw-bold text-secondary">Cover Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                    @error('image')
                        <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                    @enderror
                    <div class="form-text">Recommended size: 800x600px. Max size: 2MB.</div>
                </div>

                <div class="mb-4">
                    <label for="description" class="form-label fw-bold text-secondary">Full Description <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="6" placeholder="Explain why this cause is important and how the funds will be used..." required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                    @enderror
                </div>

                <hr class="my-4 text-light border-secondary">

                <div class="d-flex justify-content-end gap-3">
                    <a href="{{ route('admin.causes.index') }}" class="btn btn-light px-4 border">Cancel</a>
                    <button type="submit" class="btn btn-warning text-dark fw-bold px-4 shadow-sm">
                        <i class="fas fa-save me-2"></i> Save & Launch Cause
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection