<?php

namespace App\Http\Controllers;

use App\Models\MembershipApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MembershipApplicationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'full_name' => 'required|string',
            'birthplace' => 'required|string',
            'birthdate' => 'required|date',
            'address' => 'required|string',
            'gender' => 'required|in:male,female',
            'phone' => 'required|string',
            'email' => 'required|email',
            'work_address' => 'required|string',
            'work_type' => 'required|string',
            'work_phone' => 'required|string',
            'education' => 'required|string',
            'degree_file' => 'nullable|file|mimes:jpeg,png,jpg,pdf',
            'certificate_file' => 'nullable|file|mimes:jpeg,png,jpg,pdf',
            'previous_work' => 'required|string',
            'references' => 'nullable|string',
            'professional_behavior_notes' => 'nullable|string',
        ]);

        // Handle file uploads
        if ($request->hasFile('degree_file')) {
            $degreeFilePath = $request->file('degree_file')->store('degrees');
            $validated['degree_file'] = $degreeFilePath;
        }

        if ($request->hasFile('certificate_file')) {
            $certificateFilePath = $request->file('certificate_file')->store('certificates');
            $validated['certificate_file'] = $certificateFilePath;
        }

        // Create the membership application
        MembershipApplication::create($validated);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
