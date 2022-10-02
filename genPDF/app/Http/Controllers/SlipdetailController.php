<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slipdetail;
use Barryvdh\DomPDF\Facade\Pdf;

class SlipdetailController extends Controller
{
    //
    public function store(Request $request){

        $user = new Slipdetail([
          'Department' => $request->get('Department'),
          'Item_Name' => $request->get('Item_Name'),
          'Category' => $request->get('Category'),
          'Process' => $request->get('Process'),
          'QC' => $request->get('QC'),
          'Packing_date' => $request->get('Packing_date'),
          'Expired_Date' => $request->get('Expired_Date'),
          'Item_Name2' => $request->get('Item_Name2'),
          'Packing_date2' => $request->get('Packing_date2'),
          'full_name' => $request->get('full_name'),
          'Expired_Date2' => $request->get('Expired_Date2')
        ]);

        //$user->save();
        $pdf = Pdf::loadView('pdf', compact('user'));
        return $pdf->download('invoice.pdf');
        return redirect('/index');
      }
      public function index(){
  
        $users = Slipdetail::all();
  
        return view('index', compact('users'));
      }

      public function downloadPDF($id){
        $user = Slipdetail::find($id);
        $pdf = Pdf::loadView('pdf', compact('user'));
        return $pdf->download('invoice.pdf');
  
      }
}
