<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExcelImport;

class excelCntrlr extends Controller
{
    public function index()
    {
    	return view('bulk_form');
    }

    function importData(Request $request)
    {
    	$this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
     ]);	

        if (Excel::import(new ExcelImport, $request->select_file)) 
        {   
          return back()->with('success', 'Excel Data Imported successfully.');
        }
        else
        {
            return back()->with('fail', 'Excel Data format missing.');
        }
       
     
    }    
}
