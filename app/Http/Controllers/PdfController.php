<?php
   
namespace App\Http\Controllers;
 
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Models\User;

class PdfController extends Controller
{
  public function showUsers(){
    $user = User::all();
    return view('pdf.index', compact('user'));
  }

  // Generate PDF
  public function createPDF() {
    // retreive all records from db
    $data = User::all();

    // share data to view
    view()->share('user',$data);
    $pdf = PDF::loadView('pdf.pdf_view', $data);

    // download PDF file with download method
    return $pdf->download('pdf_file.pdf');
  }
}