@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Messages</h2>
        <p class="text-muted">Manage inquiries from your contact form.</p>
    </div>
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
                        <th class="ps-4 py-3 fw-semibold border-bottom-0" style="width: 5%;">Status</th>
                        <th class="py-3 fw-semibold border-bottom-0 w-25">Sender Details</th>
                        <th class="py-3 fw-semibold border-bottom-0 w-50">Subject & Message</th>
                        <th class="py-3 fw-semibold border-bottom-0">Date Received</th>
                        <th class="pe-4 py-3 fw-semibold border-bottom-0 text-end">Actions</th>
                    </tr>
                </thead>
                <tbody class="border-top-0">
                    @forelse($messages as $message)
                    <tr class="{{ $message->is_read ? 'bg-transparent' : 'bg-light' }}">
                        <td class="ps-4 py-3 text-center">
                            @if(!$message->is_read)
                            <span class="badge bg-danger rounded-circle p-2" title="Unread">
                                <span class="visually-hidden">Unread message</span>
                            </span>
                            @else
                            <i class="fas fa-envelope-open text-muted" title="Read"></i>
                            @endif
                        </td>

                        <td>
                            <h6 class="mb-1 fw-bold {{ $message->is_read ? 'text-dark' : 'text-primary' }}">{{ $message->name }}</h6>
                            <a href="mailto:{{ $message->email }}" class="small text-muted text-decoration-none">
                                {{ $message->email }}
                            </a>
                        </td>

                        <td>
                            <h6 class="mb-1 fw-bold text-dark">{{ $message->subject }}</h6>
                            <small class="text-muted d-block text-truncate" style="max-width: 350px;">
                                {{ Str::limit($message->message, 60) }}
                            </small>
                        </td>

                        <td class="text-muted small">
                            {{ $message->created_at->format('M d, Y h:i A') }}
                        </td>

                        <td class="pe-4 py-3 text-end">
                            <div class="d-flex justify-content-end gap-2">
                                <!-- Modal Trigger to Read Message -->
                                <button type="button" class="btn btn-sm btn-light text-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#messageModal{{ $message->id }}" title="Read Message">
                                    <i class="fas fa-eye"></i>
                                </button>

                                <form action="{{ route('admin.contacts.destroy', $message) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-light text-danger shadow-sm" title="Delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    <!-- Reading Modal -->
                    <div class="modal fade" id="messageModal{{ $message->id }}" tabindex="-1" aria-labelledby="messageModalLabel{{ $message->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0 shadow" style="border-radius: 15px;">
                                <div class="modal-header bg-light border-0">
                                    <h5 class="modal-title fw-bold" id="messageModalLabel{{ $message->id }}">
                                        {{ $message->subject }}
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <div class="d-flex justify-content-between mb-4 border-bottom pb-3">
                                        <div>
                                            <h6 class="fw-bold mb-0">{{ $message->name }}</h6>
                                            <a href="mailto:{{ $message->email }}" class="small text-primary text-decoration-none">{{ $message->email }}</a>
                                        </div>
                                        <div class="text-end text-muted small">
                                            {{ $message->created_at->format('M d, Y') }}<br>
                                            {{ $message->created_at->format('h:i A') }}
                                        </div>
                                    </div>
                                    <p class="text-dark" style="white-space: pre-line; line-height: 1.6;">{{ $message->message }}</p>
                                </div>
                                <div class="modal-footer border-0 bg-light d-flex justify-content-between">
                                    @if(!$message->is_read)
                                    <form action="{{ route('admin.contacts.markAsRead', $message) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-primary px-3 rounded-pill">Mark as Read</button>
                                    </form>
                                    @else
                                    <div></div> <!-- Empty div to keep the close button on the right -->
                                    @endif
                                    <button type="button" class="btn btn-secondary px-4 rounded-pill" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-5">
                            <div class="text-muted mb-3">
                                <i class="fas fa-inbox fa-3x"></i>
                            </div>
                            <h6 class="fw-bold">Inbox is empty</h6>
                            <p class="small mb-0">You have no messages yet.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection