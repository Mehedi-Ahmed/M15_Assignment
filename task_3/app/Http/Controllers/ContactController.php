<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Import the Session facade

class ContactController extends Controller
{
    /**
     * Display the contact form.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('contact');
    }

    /**
     * Handle the contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitForm(Request $request)
    {
        // 1. Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // 2. Store submitted data in the session (excluding the CSRF token)
        // We'll put all the submitted data into a session variable
        $submittedData = $request->except('_token');
        Session::put('submitted_data', $submittedData);

        // 3. Flash a success message to the session
        Session::flash('success_message', 'Your contact request has been submitted successfully!');

        // 4. Redirect the user to the confirmation page
        return redirect()->route('contact.confirmation');
    }

    /**
     * Display the confirmation page.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function showConfirmation()
    {
        // Retrieve data and message from session
        $submittedData = Session::get('submitted_data');
        $successMessage = Session::get('success_message');

        // If there's no submitted data, redirect back to the form (e.g., if accessed directly)
        if (!$submittedData && !$successMessage) {
            return redirect()->route('contact.form');
        }

        // Pass data to the view
        return view('confirmation', compact('submittedData', 'successMessage'));
    }
}
