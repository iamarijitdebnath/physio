<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Simple Honeypot Check
        if (!empty($request->bot_check)) {
            return redirect()->back()->with('error', 'Invalid submission detected.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date|after_or_equal:today',
            'treatment_type' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:1000',
        ]);

        // Appointment::create($validated);

        // Format message for WhatsApp
        $whatsappNumber = '919332996663'; // Make sure this is the correct country code + number
        $text = "Hello, I would like to book an appointment.\n\n"
              . "*Name:* " . $validated['name'] . "\n"
              . "*Phone:* " . $validated['phone'] . "\n"
              . "*Preferred Date:* " . $validated['date'] . "\n";

        if (!empty($validated['treatment_type'])) {
            $text .= "*Condition/Treatment:* " . $validated['treatment_type'] . "\n";
        }

        if (!empty($validated['message'])) {
            $text .= "*Additional Details:* " . $validated['message'] . "\n";
        }

        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text=" . urlencode($text);

        return redirect()->away($whatsappUrl);
    }
}
