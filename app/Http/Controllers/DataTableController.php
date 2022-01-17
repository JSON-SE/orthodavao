<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\PhilippineCity;
use Yajra\DataTables\DataTables;
use App\Models\PhilippineBarangay;
use App\Models\PhilippineProvince;

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
            ->addColumn('merge_address', function ($patient) {
                $queryProvince = PhilippineProvince::where('region_code', '=', $patient->region_code)->first();
                $queryCity = PhilippineCity::where('city_municipality_code', '=', $patient->city_municipality_code)->first();
                $queryBarangay = PhilippineBarangay::where('barangay_code', '=', $patient->barangay_code)->first();
                $province = $queryProvince->province_description;
                $city_municipality = $queryCity->city_municipality_description;
                $barangay = $queryBarangay->barangay_description;
                $merge_address = $barangay.', '.$city_municipality.' '.$province;
                return $merge_address;
            })
            ->addColumn('contact', function ($patient) {
                $contact = isset($patient->contact) ? $patient->contact : 'No Contact';
                return $contact;
            })
            ->addColumn('email', function ($patient) {
                $email = isset($patient->email) ? $patient->email : 'No Email';
                return $email;
            })
            ->addColumn('action', function ($patient) {
                $button = '<a href="/find/patient/'.$patient->id.'"class="btn btn-xs btn-outline-default">View</a> &emsp; <a href="/update/patient/'.$patient->id.'" class="btn btn-xs btn-outline-default">Update</a>';
                return $button;
            })
            ->rawColumns(['name', 'merge_address', 'contact', 'email', 'action'])
            ->make(true);
        }
    }
}
