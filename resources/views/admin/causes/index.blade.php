@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Causes</h2>
            <p class="text-muted">Manage active and completed fundraising causes.</p>
        </div>
        <a href="{{ route('admin.causes.create') }}" class="btn btn-warning fw-bold px-4 py-2 rounded-3 shadow-sm">
            <i class="fas fa-plus me-2"></i> Add New Cause
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light text-muted">
                        <tr>
                            <th class="ps-4 py-3 fw-semibold border-bottom-0">Image</th>
                            <th class="py-3 fw-semibold border-bottom-0">Title & Details</th>
                            <th class="py-3 fw-semibold border-bottom-0 w-25">Funding Progress</th>
                            <th class="py-3 fw-semibold border-bottom-0 text-center">Status</th>
                            <th class="pe-4 py-3 fw-semibold border-bottom-0 text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="border-top-0">
                        @forelse($causes as $cause)
                            <tr>
                                <td class="ps-4 py-3">
                                    @if($cause->image)
                                        <img src="{{ asset('storage/' . $cause->image) }}" class="rounded shadow-sm" width="60" height="60" style="object-fit: cover;" alt="{{ $cause->title }}">
                                    @else
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center text-muted" style="width: 60px; height: 60px;">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    @endif
                                </td>

                                <td>
                                    <h6 class="mb-1 fw-bold text-dark">{{ $cause->title }}</h6>
                                    <small class="text-muted d-block text-truncate" style="max-width: 250px;">
                                        {{ Str::limit($cause->description, 50) }}
                                    </small>
                                </td>

                                <td>
                                    <div class="d-flex justify-content-between align-items-center mb-1" style="font-size: 0.85rem;">
                                        <span class="fw-bold text-dark">${{ number_format($cause->amount_raised) }} Raised</span>
                                        <span class="text-muted">of ${{ number_format($cause->goal_amount) }}</span>
                                    </div>
                                    <div class="progress rounded-pill" style="height: 8px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $cause->progress_percentage }}%;" aria-valuenow="{{ $cause->progress_percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>

                                <td class="text-center">
                                    @if($cause->amount_raised >= $cause->goal_amount)
                                        <span class="badge bg-secondary rounded-pill px-3 py-2 fw-normal">Completed</span>
                                    @else
                                        <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-2 fw-normal">Active</span>
                                    @endif
                                </td>

                                <td class="pe-4 py-3 text-end">
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="{{ route('admin.causes.edit', $cause) }}" class="btn btn-sm btn-light text-primary shadow-sm" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        
                                        <form action="{{ route('admin.causes.destroy', $cause) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this cause?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-light text-danger shadow-sm" title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-5">
                                    <div class="text-muted mb-3">
                                        <i class="fas fa-folder-open fa-3x"></i>
                                    </div>
                                    <h6 class="fw-bold">No causes found</h6>
                                    <p class="small mb-0">Get started by creating your first fundraising cause.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection