@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Services</h2>
            <p class="text-muted">Manage your available service offerings.</p>
        </div>
        <a href="{{ route('admin.services.create') }}" class="btn btn-warning fw-bold px-4 py-2 rounded-3 shadow-sm">
            <i class="fas fa-plus me-2"></i> Add New Service
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
                            <th class="py-3 fw-semibold border-bottom-0">Contact (WhatsApp)</th>
                            <th class="py-3 fw-semibold border-bottom-0 text-center">Date Added</th>
                            <th class="pe-4 py-3 fw-semibold border-bottom-0 text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="border-top-0">
                        @forelse($services as $service)
                            <tr>
                                <td class="ps-4 py-3">
                                    @if($service->image)
                                        <img src="{{ asset('storage/' . $service->image) }}" class="rounded shadow-sm" width="60" height="60" style="object-fit: cover;" alt="{{ $service->title }}">
                                    @else
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center text-muted" style="width: 60px; height: 60px;">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    @endif
                                </td>

                                <td>
                                    <h6 class="mb-1 fw-bold text-dark">{{ $service->title }}</h6>
                                    <small class="text-muted d-block text-truncate" style="max-width: 250px;">
                                        {{ Str::limit($service->description, 50) }}
                                    </small>
                                </td>

                                <td>
                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $service->whatsapp_number) }}" target="_blank" class="text-decoration-none fw-bold text-success">
                                        <i class="fab fa-whatsapp me-1"></i> {{ $service->whatsapp_number }}
                                    </a>
                                </td>

                                <td class="text-center text-muted small">
                                    {{ $service->created_at->format('M d, Y') }}
                                </td>

                                <td class="pe-4 py-3 text-end">
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-light text-primary shadow-sm" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        
                                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this service?');">
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
                                        <i class="fas fa-box-open fa-3x"></i>
                                    </div>
                                    <h6 class="fw-bold">No services found</h6>
                                    <p class="small mb-0">Get started by adding your first service offering.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection