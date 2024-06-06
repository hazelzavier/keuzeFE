namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
public function submit(Request $request)
{
// Validate the form data
$request->validate([
'name' => 'required|string|max:255',
'email' => 'required|email|max:255',
'remarks' => 'required|string|max:1000',
]);

// Send the email
Mail::to('your-email@example.com')->send(new ContactMail($request->all()));

// Redirect with a success message
return redirect()->route('contact')->with('success', 'Thank you for contacting us! We will get back to you soon.');
}
}
