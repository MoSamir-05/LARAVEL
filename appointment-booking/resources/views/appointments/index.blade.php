@extends('layouts.app')
@section('title', 'My Appointments')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0"><i class="bi bi-calendar3 me-2 text-primary"></i>My Appointments</h4>
    <a href="{{ route('appointments.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg me-1"></i>New Appointment
    </a>
</div>

@if($appointments->isEmpty())
    <div class="card text-center py-5">
        <div class="card-body">
            <i class="bi bi-calendar-x fs-1 text-muted"></i>
            <p class="mt-3 text-muted">No appointments yet. Book your first one!</p>
            <a href="{{ route('appointments.create') }}" class="btn btn-primary mt-1">Book Now</a>
        </div>
    </div>
@else
    <div class="card">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Doctor</th>
                        <th>Date & Time</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $appt)
                    <tr>
                        <td class="text-muted small">{{ $loop->iteration }}</td>
                        <td><strong>{{ $appt->title }}</strong></td>
                        <td>{{ $appt->doctor_name }}</td>
                        <td>
                            <span class="d-block">{{ $appt->appointment_date->format('d M Y') }}</span>
                            <span class="text-muted small">{{ \Carbon\Carbon::parse($appt->appointment_time)->format('h:i A') }}</span>
                        </td>
                        <td>{{ $appt->location ?? '—' }}</td>
                        <td>
                            <span class="status-badge badge-{{ $appt->status }}">
                                {{ ucfirst($appt->status) }}
                            </span>
                        </td>
                        <td class="text-end">
                            <a href="{{ route('appointments.show', $appt) }}" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('appointments.edit', $appt) }}" class="btn btn-sm btn-outline-primary ms-1">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('appointments.destroy', $appt) }}" method="POST" class="d-inline ms-1"
                                  onsubmit="return confirm('Delete this appointment?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-3">{{ $appointments->links() }}</div>
@endif
@endsection