<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentMail;
use App\Models\Appointment;
use Illuminate\Http\RedirectResponse;

class AppointmentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::get();
        return view('appointmentList', compact('appointments'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function appointment(Request $request)
    {
        $data = $request->validate([
            'gurdian_name' => 'required|string',
            'gurdian_email' => 'required|email',
            'student_name' => 'required|string',
            'student_age' => 'required|string',
            'message' => 'required|string|max:400'
        ]);
        Appointment::create($data);
        Mail::to('alaaelhadi@gmail.com')->send(new Appointmentmail($data));
        return redirect()->back()->with('success', 'Email sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('showAppointment', compact('appointment'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Appointment::where('id', $id)->delete();
        return redirect('admin/appointmentList');
    }

    public function trashed()
    {
        $appointments = Appointment::onlyTrashed()->get();
        return view('trashedAppointments', compact('appointments'));
    }

    public function restore(string $id): RedirectResponse
    {
        Appointment::where('id', $id)->restore();
        return redirect('admin/appointmentList');
    }

    public function finalDelete(string $id): RedirectResponse
    {
        Appointment::where('id', $id)->forceDelete();
        return redirect('admin/trashedAppointments');
    }
}
