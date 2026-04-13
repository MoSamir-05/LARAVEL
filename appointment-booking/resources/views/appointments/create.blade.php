@extends('layouts.app')
@section('title', 'Book Appointment')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card p-4">
            <h5 class="mb-4"><i class="bi bi-calendar-plus me-2 text-primary"></i>Book New Appointment</h5>

            <form action="{{ route('appointments.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title') }}" placeholder="e.g. Routine Checkup">
                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Doctor Name <span class="text-danger">*</span></label>
                    <input type="text" name="doctor_name" class="form-control @error('doctor_name') is-invalid @enderror"
                           value="{{ old('doctor_name') }}" placeholder="e.g. Dr. Sharma">
                    @error('doctor_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Location / Clinic</label>
                    <input type="text" name="location" class="form-control @error('location') is-invalid @enderror"
                           value="{{ old('location') }}" placeholder="e.g. City Hospital, Ahmedabad">
                    @error('location') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Date <span class="text-danger">*</span></label>
                        <input type="date" name="appointment_date"
                               class="form-control @error('appointment_date') is-invalid @enderror"
                               value="{{ old('appointment_date') }}"
                               min="{{ date('Y-m-d') }}">
                        @error('appointment_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Time <span class="text-danger">*</span></label>
                        <input type="time" name="appointment_time"
                               class="form-control @error('appointment_time') is-invalid @enderror"
                               value="{{ old('appointment_time') }}">
                        @error('appointment_time') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Notes (optional)</label>
                    <textarea name="notes" class="form-control @error('notes') is-invalid @enderror"
                              rows="3" placeholder="Any special notes...">{{ old('notes') }}</textarea>
                    @error('notes') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-check-lg me-1"></i>Book Appointment
                    </button>
                    <a href="{{ route('appointments.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection