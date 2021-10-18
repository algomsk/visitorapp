<?php

namespace App\Http\Controllers;

use App\Models\VisitorModel;
use Illuminate\Http\Request;


use App\Exports\VisitorsExport;
use Maatwebsite\Excel\Facades\Excel;

class VisitorController extends Controller
{
    //
    public function AddVisitor(Request $request){

        $validateForm = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'dob' => 'required|date'
        ]);

        $visitor = new VisitorModel();
        $visitor->first_name = $request->firstName;
        $visitor->last_name = $request->lastName;
        $visitor->email = $request->email;
        $visitor->dob = $request->dob;
        $visitor->save();

        return back()->with('visitor_saved', 'Visitor has been added successfully !');

    }

    public function ListVisitor(){

        $allvisitors = VisitorModel::paginate(5);
        return view('home', compact('allvisitors'));
    }


    public function export()
    {
        return Excel::download(new VisitorsExport, 'Visitors.csv');
    }
}
