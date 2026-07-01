@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Events</h2>
        <p class="text-muted">Manage upcoming charity events and gatherings.</p>
    </div>
    <a href="{{ route('admin.events.create') }}" class="btn btn-warning fw-bold px-4 py-2 rounded-3 shadow-sm text-dark">
        <i class="fas fa-plus me-2"></i> Add New Event
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
                        <th class="ps-4 py-3 fw-semibold border-bottom-0">Cover</th>
                        <th class="py-3 fw-semibold border-bottom-0">Event Title & Details</th>
                        <th class="py-3 fw-semibold border-bottom-0">Schedule</th>
                        <th class="py-3 fw-semibold border-bottom-0">Location</th>
                        <th class="pe-4 py-3 fw-semibold border-bottom-0 text-end">Actions</th>
                    </tr>
                </thead>
                <tbody class="border-top-0">
                    @forelse($events as $event)
                    <tr>
                        <td class="ps-4 py-3">
                            @if($event->image)
                            <img src="{{ asset('storage/' . $event->image) }}" class="rounded shadow-sm" width="60" height="60" style="object-fit: cover;" alt="{{ $event->title }}">
                            @else
                            <div class="bg-light rounded d-flex align-items-center justify-content-center text-muted shadow-sm" style="width: 60px; height: 60px;">
                                <i class="fas fa-calendar-day fs-4"></i>
                            </div>
                            @endif
                        </td>

                        <td>
                            <h6 class="mb-1 fw-bold text-dark">{{ $event->title }}</h6>
                            <small class="text-muted d-block text-truncate" style="max-width: 250px;">
                                {{ Str::limit($event->description, 50) }}
                            </small>
                        </td>

                        <td>
                            <span class="d-block fw-bold text-dark mb-1">
                                <i class="far fa-calendar-alt text-primary me-1"></i>
                                {{ $event->event_date->format('M d, Y') }}
                            </span>
                            <span class="small text-muted">
                                <i class="far fa-clock text-secondary me-1"></i>
                                {{ $event->start_time->format('h:i A') }}
                                @if($event->end_time)
                                - {{ $event->end_time->format('h:i A') }}
                                @endif
                            </span>
                        </td>

                        <td>
                            <span class="badge bg-light text-dark border px-3 py-2 fw-normal">
                                <i class="fas fa-map-marker-alt text-danger me-1"></i> {{ Str::limit($event->location, 30) }}
                            </span>
                        </td>

                        <td class="pe-4 py-3 text-end">
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('admin.events.edit', $event) }}" class="btn btn-sm btn-light text-primary shadow-sm border" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('admin.events.destroy', $event) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-light text-danger shadow-sm border" title="Delete">
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
                                <i class="far fa-calendar-times fa-3x"></i>
                            </div>
                            <h6 class="fw-bold">No events scheduled</h6>
                            <p class="small text-muted mb-0">Get started by planning your first event.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection