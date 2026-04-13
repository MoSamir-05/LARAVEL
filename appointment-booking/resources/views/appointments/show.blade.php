@extends('layouts.app')
@section('title', 'Appointment Details')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card p-4">
            <div class="d-flex justify-content-between align-items-start mb-4">
                <h5 class="mb-0"><i class="bi bi-calendar-event me-2 text-primary"></i>Appointment Details</h5>
                <span class="status-badge badge-{{ $appointment->status }}">
                    {{ ucfirst($appointment->status) }}
                </span>
            </div>

            <dl class="row mb-0">
                <dt class="col-sm-4 text-muted">Title</dt>
                <dd class="col-sm-8">{{ $appointment->title }}</dd>

                <dt class="col-sm-4 text-muted">Doctor</dt>
                <dd class="col-sm-8">{{ $appointment->doctor_name }}</dd>

                <dt class="col-sm-4 text-muted">Location</dt>
                <dd class="col-sm-8">{{ $appointment->location ?? '—' }}</dd>

                <dt class="col-sm-4 text-muted">Date</dt>
                <dd class="col-sm-8">{{ $appointment->appointment_date->format('d F Y') }}</dd>

                <dt class="col-sm-4 text-muted">Time</dt>
                <dd class="col-sm-8">{{ \Carbon\Carbon::parse($appointment->appointment_time)->format('h:i A') }}</dd>

                <dt class="col-sm-4 text-muted">Notes</dt>
                <dd class="col-sm-8">{{ $appointment->notes ?? '—' }}</dd>

                <dt class="col-sm-4 text-muted">Booked On</dt>
                <dd class="col-sm-8">{{ $appointment->created_at->format('d M Y, h:i A') }}</dd>
            </dl>

            <hr>

            <div class="d-flex gap-2">
                <a href="{{ route('appointments.edit', $appointment) }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-pencil me-1"></i>Edit
                </a>
                <form action="{{ route('appointments.destroy', $appointment) }}" method="POST"
                      onsubmit="return confirm('Delete this appointment?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-outline-danger btn-sm">
                        <i class="bi bi-trash me-1"></i>Delete
                    </button>
                </form>
                <a href="{{ route('appointments.index') }}" class="btn btn-outline-secondary btn-sm ms-auto">
                    <i class="bi bi-arrow-left me-1"></i>Back
                </a>
            </div>
        </div>
    </div>
</div>
@endsection