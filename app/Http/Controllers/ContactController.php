public function submit(Request $request)
{
// Validate the form data
$request->validate([
'name' => 'required|string|max:255',
'email' => 'required|email|max:255',
'remarks' => 'required|string|max:1000',
]);

try {
// Send the email
Mail::to('your-email@example.com')->send(new ContactMail($request->all()));

// Redirect with a success message
return redirect()->route('contact')->with('success', 'Thank you for contacting us! We will get back to you soon.');
} catch (\Exception $e) {
// Redirect with an error message if email sending fails
return redirect()->route('contact')->with('error', 'An error occurred while sending the email. Please try again later.');
}
}
