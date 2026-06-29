@extends('admin.layouts.app')

@section('content')
    <div class="mb-4">
        <h4 class="fw-bold mb-1">Dashboard Overview</h4>
        <p class="text-muted small">Welcome back. Here is the latest activity across the foundation.</p>
    </div>

    <div class="row">
        <div class="col-12 col-lg-8 mb-4">
            <div class="card border-0 p-3 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h6 class="fw-bold mb-0"><i class="fas fa-hand-holding-heart text-primary me-2"></i> Manage Causes</h6>
                        <a href="{{ route('admin.causes.create') }}" class="btn btn-warning btn-sm fw-bold px-3 rounded-pill text-dark">
                            <i class="fas fa-plus me-1"></i> Add New Cause
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-borderless align-middle min-w-max">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title & Details</th>
                                    <th class="w-25">Funding Progress</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($causes->take(5) as $cause)
                                    <tr class="border-bottom">
                                        <td>
                                            @if($cause->image)
                                                <img src="{{ asset('storage/' . $cause->image) }}" class="rounded" width="50" height="50" style="object-fit: cover;">
                                            @else
                                                <div class="bg-secondary rounded" style="width: 50px; height: 50px;"></div>
                                            @endif
                                        </td>
                                        <td>
                                            <h6 class="mb-0 fw-bold fs-6">{{ $cause->title }}</h6>
                                            <small class="text-muted">Target: ${{ number_format($cause->goal_amount) }}</small>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between small mb-1">
                                                <span class="fw-bold">${{ number_format($cause->amount_raised) }} Raised</span>
                                            </div>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-warning" style="width: {{ $cause->progress_percentage }}%;"></div>
                                            </div>
                                        </td>
                                        <td>
                                            @if($cause->amount_raised >= $cause->goal_amount)
                                                <span class="badge bg-secondary rounded-pill px-3 py-2">Completed</span>
                                            @else
                                                <span class="badge badge-active rounded-pill px-3 py-2">Active</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="4" class="text-center text-muted py-4">No causes found.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 mb-4">
            <div class="card border-0 p-3 h-100">
                <div class="card-body">
                    <h6 class="fw-bold mb-4"><i class="far fa-file-alt text-primary me-2"></i> Quick Action</h6>
                    
                    <div class="d-grid gap-3">
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-outline-primary text-start p-3 rounded-3 shadow-sm border-0 bg-light">
                            <i class="fas fa-pen-nib mb-2 fs-4 d-block"></i>
                            <strong class="d-block">Write New Blog</strong>
                            <small class="text-muted">Publish an update or article</small>
                        </a>
                        <a href="{{ route('admin.causes.create') }}" class="btn btn-outline-warning text-start p-3 rounded-3 shadow-sm border-0 bg-light">
                            <i class="fas fa-hand-holding-heart mb-2 fs-4 d-block"></i>
                            <strong class="d-block">Start New Cause</strong>
                            <small class="text-muted">Set up a new fundraising goal</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection