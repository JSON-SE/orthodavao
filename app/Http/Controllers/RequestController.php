<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Patient;
use App\Models\XrayRequest;
use App\Models\Consultation;
use Illuminate\Http\Request;
use App\Models\PhilippineCity;
use App\Models\PhilippineRegion;
use Yajra\DataTables\DataTables;
use App\Models\PhilippineBarangay;
use App\Models\PhilippineProvince;
use App\Models\UltrasoundRequest;
use Yajra\DataTables\Html\Builder;

class RequestController extends Controller
{
    // X-ray Request

    public function requestXrayDataTable(Request $request)
    {
        if ($request->ajax()) {
            $xrayRequest = XrayRequest::all();
            return DataTables::of($xrayRequest)->toJson();
        }
    }

    public function xrayIndex($id)
    {
        $consultation = Consultation::with('patient')->where('id', $id)->first();
        return view('request.xray', compact('consultation'));
    }

    public function generateXray(Request $request, $id)
    {
        $consultation = Consultation::with('patient')->where('id', $id)->first();
        // patient address query
        $queryRegion = PhilippineRegion::where('region_code', '=', $consultation->patient->region_code)->first();
        $region_description = $queryRegion->region_description;
        $queryProvince = PhilippineProvince::where('region_code', '=', $consultation->patient->region_code)->first();
        $province_description = $queryProvince->province_description;
        $queryCityMunicipality = PhilippineCity::where('city_municipality_code', '=', $consultation->patient->city_municipality_code)->first();
        $city_municipality_description = $queryCityMunicipality->city_municipality_description;
        $queryBarangay = PhilippineBarangay::where('barangay_code', '=', $consultation->patient->barangay_code)->first();
        $barangay_description = $queryBarangay->barangay_description;



        $selectedRequest = $request->selected_request;
        // create a query to get all the selected request
        $selectedRequestQuery = XrayRequest::whereIn('id', $selectedRequest)->get();
        $xrayRequest = $selectedRequestQuery->toArray();
        return PDF::loadView('print.xray', compact('xrayRequest', 'consultation', 'region_description', 'province_description', 'city_municipality_description', 'barangay_description'))->setOption('page-width', '140')->setOption('page-height', '216')->setOption('margin-top', '0')->setOption('margin-right', '0')->setOption('margin-bottom', '0')->setOption('margin-left', '0')->setOption('footer-right', 'footer')->setOrientation('portrait')->inline('xray.pdf');
    }

    // Ulrasound Request

    public function requestUltrasoundDataTable(Request $request)
    {
        if ($request->ajax()) {
            $ultrasoundRequest = UltrasoundRequest::all();
            return DataTables::of($ultrasoundRequest)->toJson();
        }
    }

    public function ultrasoundIndex($id)
    {
        $consultation = Consultation::with('patient')->where('id', $id)->first();
        return view('request.ultrasound', compact('consultation'));
    }

    public function generateUltrasound(Request $request, $id)
    {
        $consultation = Consultation::with('patient')->where('id', $id)->first();
        // patient address query
        $queryRegion = PhilippineRegion::where('region_code', '=', $consultation->patient->region_code)->first();
        $region_description = $queryRegion->region_description;
        $queryProvince = PhilippineProvince::where('region_code', '=', $consultation->patient->region_code)->first();
        $province_description = $queryProvince->province_description;
        $queryCityMunicipality = PhilippineCity::where('city_municipality_code', '=', $consultation->patient->city_municipality_code)->first();
        $city_municipality_description = $queryCityMunicipality->city_municipality_description;
        $queryBarangay = PhilippineBarangay::where('barangay_code', '=', $consultation->patient->barangay_code)->first();
        $barangay_description = $queryBarangay->barangay_description;



        $selectedRequest = $request->selected_request;
        // create a query to get all the selected request
        $selectedRequestQuery = XrayRequest::whereIn('id', $selectedRequest)->get();
        $ultrasoundRequest = $selectedRequestQuery->toArray();
        return PDF::loadView('print.ultrasound', compact('ultrasoundRequest', 'consultation', 'region_description', 'province_description', 'city_municipality_description', 'barangay_description'))->setOption('page-width', '140')->setOption('page-height', '216')->setOption('margin-top', '0')->setOption('margin-right', '0')->setOption('margin-bottom', '0')->setOption('margin-left', '0')->setOption('footer-right', 'footer')->setOrientation('portrait')->inline('ultrasound.pdf');
    }
}
