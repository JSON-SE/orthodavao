<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DataTableController extends Controller
{
    public function dashboardPatientTable(Request $request)
    {
        if ($request->ajax()) {
            $patient = Patient::all();
            return DataTables::of($patient)
            ->addColumn('name', function ($patient) {
                $suffix = isset($patient->suffix) ? ', '.$patient->suffix : ' ';
                $name = $patient->firstname.' '.$patient->middlename.' '.$patient->lastname.$suffix;
                return $name;
            })
            ->addColumn('action', function ($patient) {
                $button = '<a href="/find/patient/'.$patient->id.'" class="btn btn-xs btn-outline-default"><i class="mdi mdi-eye"><i></a>';
                return $button;
            })
            ->rawColumns(['name', 'action'])
            ->make(true);
        }
    }
}
