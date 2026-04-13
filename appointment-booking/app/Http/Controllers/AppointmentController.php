<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Auth::user()
            ->appointments()
            ->orderBy('appointment_date', 'asc')
            ->paginate(10);

        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        return view('appointments.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'            => 'required|string|max:255',
            'doctor_name'      => 'required|string|max:255',
            'location'         => 'nullable|string|max:255',
            'appointment_date' => 'required|date|after_or_equal:today',
            'appointment_time' => 'required',
            'notes'            => 'nullable|string|max:1000',
        ]);

        $data['user_id'] = Auth::id();
        $data['status']  = 'pending';

        Appointment::create($data);

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment booked successfully!');
    }

    public function show(Appointment $appointment)
    {
        $this->authorizeAppointment($appointment);
        return view('appointments.show', compact('appointment'));
    }

    public function edit(Appointment $appointment)
    {
        $this->authorizeAppointment($appointment);
        return view('appointments.edit', compact('appointment'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $this->authorizeAppointment($appointment);

        $data = $request->validate([
            'title'            => 'required|string|max:255',
            'doctor_name'      => 'required|string|max:255',
            'location'         => 'nullable|string|max:255',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'status'           => 'required|in:pending,confirmed,cancelled',
            'notes'            => 'nullable|string|max:1000',
        ]);

        $appointment->update($data);

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment updated successfully!');
    }

    public function destroy(Appointment $appointment)
    {
        $this->authorizeAppointment($appointment);
        $appointment->delete();

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment deleted successfully!');
    }

    private function authorizeAppointment(Appointment $appointment)
    {
        if ($appointment->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
    }
}