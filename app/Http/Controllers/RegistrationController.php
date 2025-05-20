<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exports\RegistrationsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class RegistrationController extends Controller
{
   
   
    /**
     * Display the registration form.
     */
    public function showForm()
    {
        return view('registration.form');
    }


        /**
     * Display registration closed page.
     */
    public function closed()
    {
        return view('registration.registraton_close');
    }
    
    /**
     * Store a new registration.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'phone' => 'required|string|min:10|max:15|regex:/^[0-9+\-\s()]+$/',
            'email' => 'required|email:rfc,dns|max:255|unique:registrations,email',
            'institution' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
        ], [
            'name.regex' => 'The name field should only contain letters and spaces.',
            'phone.regex' => 'Please enter a valid phone number.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email has already been registered.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Registration::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'institution' => $request->institution,
            'designation' => $request->designation,
        ]);

        return redirect()->route('registration.success');
    }

    /**
     * Display registration success page.
     */
    public function success()
    {
        return view('registration.success');
    }

    /**
     * Display all registrations.
     */
    public function index()
    {
        $registrations = Registration::latest()->paginate(15);
        return view('registration.index', compact('registrations'));
    }
    
    /**
     * Display all registrations for admin dashboard.
     */
   /**
 * Display all registrations for admin dashboard.
 */
public function adminIndex()
{
    $registrations = Registration::latest()->paginate(5);
    $totalAttendees = Registration::count(); // total number of registrations

    return view('admin.index', compact('registrations', 'totalAttendees'));
}

/**
 * Filter registrations by date range.
 */
public function filterByDateRange(Request $request)
{
    $validator = Validator::make($request->all(), [
        'start_date' => 'nullable|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $query = Registration::latest();
    
    if ($request->filled('start_date')) {
        $query->whereDate('created_at', '>=', $request->start_date);
    }
    
    if ($request->filled('end_date')) {
        $query->whereDate('created_at', '<=', $request->end_date);
    }
    
    $registrations = $query->paginate(15);
    
    return view('admin.registered-users', [
        'users' => $registrations,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date
    ]);
}
/**
 * Display registered users with optional filtering.
 */
public function registeredUsers(Request $request)
{
    $query = Registration::latest();
    $users = $query->paginate(15);
    
    return view('admin.registered-users', compact('users'));
}

/**
 * Search registrations by name, email, institution, or designation.
 */
public function searchRegistrations(Request $request)
{
    $term = $request->input('term');
    
    $query = Registration::latest();
    
    if ($term) {
        $query->where(function($q) use ($term) {
            $q->where('name', 'like', "%{$term}%")
              ->orWhere('email', 'like', "%{$term}%")
              ->orWhere('institution', 'like', "%{$term}%")
              ->orWhere('designation', 'like', "%{$term}%")
              ->orWhere('phone', 'like', "%{$term}%");
        });
    }
    
    $users = $query->paginate(15);
    
    return view('admin.registered-users', [
        'users' => $users,
        'searchTerm' => $term
    ]);
}

/**
 * Download registrations as PDF.
 */
public function downloadPDF(Request $request)
{
    // Get query parameters for filtering
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');
    $searchTerm = $request->input('term');
    
    $query = Registration::latest();
    
    // Apply date filters if provided
    if ($startDate) {
        $query->whereDate('created_at', '>=', $startDate);
    }
    
    if ($endDate) {
        $query->whereDate('created_at', '<=', $endDate);
    }
    
    // Apply search term if provided
    if ($searchTerm) {
        $query->where(function($q) use ($searchTerm) {
            $q->where('name', 'like', "%{$searchTerm}%")
              ->orWhere('email', 'like', "%{$searchTerm}%")
              ->orWhere('institution', 'like', "%{$searchTerm}%")
              ->orWhere('designation', 'like', "%{$searchTerm}%")
              ->orWhere('phone', 'like', "%{$searchTerm}%");
        });
    }
    
    $registrations = $query->get();
    
    // Generate PDF using Laravel's PDF package (requires dompdf)
    $pdf = \PDF::loadView('admin.pdf.registrations', [
        'registrations' => $registrations,
        'startDate' => $startDate,
        'endDate' => $endDate,
        'searchTerm' => $searchTerm
    ]);
    
    // Set filename based on filters
    $filename = 'registrations';
    if ($startDate && $endDate) {
        $filename .= "_from_{$startDate}_to_{$endDate}";
    } elseif ($searchTerm) {
        $filename .= "_search_{$searchTerm}";
    }
    $filename .= '.pdf';
    
    return $pdf->download($filename);
}
/**
 * Download registrations as Excel.
 */
/**
 * Download registrations as Excel.
 */
/**
 * Download registrations as Excel in descending order by ID.
 */
public function export(Request $request)
{
    // Fetch registrations in descending order by ID (from last to first)
    $registrations = Registration::orderBy('id', 'desc')->get();
    
    return Excel::download(new RegistrationsExport($registrations), 'registrations.xlsx');
}




}
