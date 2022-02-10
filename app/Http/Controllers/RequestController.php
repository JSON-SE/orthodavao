<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Patient;
use App\Models\CtRequest;
use App\Models\MriRequest;
use App\Models\XrayRequest;
use App\Models\Consultation;
use Illuminate\Http\Request;
use App\Models\PhilippineCity;
use App\Models\ReferralRequest;
use App\Models\PhilippineRegion;
use Yajra\DataTables\DataTables;
use App\Models\LaboratoryRequest;
use App\Models\UltrasoundRequest;
use App\Models\PhilippineBarangay;
use App\Models\PhilippineProvince;
use Yajra\DataTables\Html\Builder;
use App\Models\PrescriptionRequest;

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
        $selectedRequestQuery = UltrasoundRequest::whereIn('id', $selectedRequest)->get();
        $ultrasoundRequest = $selectedRequestQuery->toArray();
        return PDF::loadView('print.ultrasound', compact('ultrasoundRequest', 'consultation', 'region_description', 'province_description', 'city_municipality_description', 'barangay_description'))->setOption('page-width', '140')->setOption('page-height', '216')->setOption('margin-top', '0')->setOption('margin-right', '0')->setOption('margin-bottom', '0')->setOption('margin-left', '0')->setOption('footer-right', 'footer')->setOrientation('portrait')->inline('ultrasound.pdf');
    }

    // Laboratory Request
    // create a public function called laboratoryIndex
    public function laboratoryIndex($id)
    {
        $consultation = Consultation::with('patient')->where('id', $id)->first();
        return view('request.laboratory', compact('consultation'));
    }

    // create a public function called requestLaboratoryDataTable
    public function requestLaboratoryDataTable(Request $request)
    {
        if ($request->ajax()) {
            $laboratoryRequest = LaboratoryRequest::all();
            return DataTables::of($laboratoryRequest)->toJson();
        }
    }

    // create a public function called generateLaboratory
    public function generateLaboratory(Request $request, $id)
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
        $selectedRequestQuery = LaboratoryRequest::whereIn('id', $selectedRequest)->get();
        $laboratoryRequest = $selectedRequestQuery->toArray();
        return PDF::loadView('print.laboratory', compact('laboratoryRequest', 'consultation', 'region_description', 'province_description', 'city_municipality_description', 'barangay_description'))->setOption('page-width', '140')->setOption('page-height', '216')->setOption('margin-top', '0')->setOption('margin-right', '0')->setOption('margin-bottom', '0')->setOption('margin-left', '0')->setOption('footer-right', 'footer')->setOrientation('portrait')->inline('laboratory.pdf');
    }

    // MRI Scan
    // create a public function called mriIndex
    public function mriIndex($id)
    {
        $consultation = Consultation::with('patient')->where('id', $id)->first();
        return view('request.mri', compact('consultation'));
    }

    // create a public function called requestMriDataTable
    public function requestMriDataTable(Request $request)
    {
        if ($request->ajax()) {
            $mriRequest = MriRequest::all();
            return DataTables::of($mriRequest)->toJson();
        }
    }

    // create a public function called generateMRI
    public function generateMRI(Request $request, $id)
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
        $creatinine = $request->creatinine;
        // create a query to get all the selected request
        $selectedRequestQuery = MriRequest::whereIn('id', $selectedRequest)->get();
        $mriRequest = $selectedRequestQuery->toArray();
        return PDF::loadView('print.mri', compact('mriRequest', 'creatinine', 'consultation', 'region_description', 'province_description', 'city_municipality_description', 'barangay_description'))->setOption('page-width', '140')->setOption('page-height', '216')->setOption('margin-top', '0')->setOption('margin-right', '0')->setOption('margin-bottom', '0')->setOption('margin-left', '0')->setOption('footer-right', 'footer')->setOrientation('portrait')->inline('mri.pdf');
    }

    // CT Scan
    // create a public function called ctIndex
    public function ctIndex($id)
    {
        $consultation = Consultation::with('patient')->where('id', $id)->first();
        return view('request.ct', compact('consultation'));
    }

    // create a public function called requestCtDataTable
    public function requestCtDataTable(Request $request)
    {
        if ($request->ajax()) {
            $ctRequest = CtRequest::all();
            return DataTables::of($ctRequest)->toJson();
        }
    }

    // create a public function called generateCT
    public function generateCT(Request $request, $id)
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
        $creatinine = $request->creatinine;
        // create a query to get all the selected request
        $selectedRequestQuery = CtRequest::whereIn('id', $selectedRequest)->get();
        $ctRequest = $selectedRequestQuery->toArray();
        return PDF::loadView('print.ct', compact('ctRequest', 'creatinine', 'consultation', 'region_description', 'province_description', 'city_municipality_description', 'barangay_description'))->setOption('page-width', '140')->setOption('page-height', '216')->setOption('margin-top', '0')->setOption('margin-right', '0')->setOption('margin-bottom', '0')->setOption('margin-left', '0')->setOption('footer-right', 'footer')->setOrientation('portrait')->inline('ct.pdf');
    }

    // Prescription
    // create a public function called prescriptionIndex
    public function prescriptionIndex($id)
    {
        $consultation = Consultation::with('patient')->where('id', $id)->first();
        return view('request.prescription', compact('consultation'));
    }

    // create a public function called requestPrescriptionDataTable
    public function requestPrescriptionDataTable(Request $request)
    {
        if ($request->ajax()) {
            $prescriptionRequest = PrescriptionRequest::all();
            return DataTables::of($prescriptionRequest)
            ->addColumn('type', function ($prescriptionRequest) {
                $name = $prescriptionRequest->prescriptionType->name;
                return $name;
            })
            ->rawColumns(['type'])
            ->make(true);
        }
    }

    // create a public function called generatePrescription
    public function generatePrescription(Request $request, $id)
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
        $selectedRequestQuery = PrescriptionRequest::whereIn('id', $selectedRequest)->get();
        $prescriptionRequest = $selectedRequestQuery->toArray();
        return PDF::loadView('print.prescription', compact('prescriptionRequest', 'consultation', 'region_description', 'province_description', 'city_municipality_description', 'barangay_description'))->setOption('page-width', '140')->setOption('page-height', '216')->setOption('margin-top', '0')->setOption('margin-right', '0')->setOption('margin-bottom', '0')->setOption('margin-left', '0')->setOption('footer-right', 'footer')->setOrientation('portrait')->inline('prescription.pdf');
    }

    // Referral
    // create a public function called referralIndex
    public function referralIndex($id)
    {
        $consultation = Consultation::with('patient')->where('id', $id)->first();
        return view('request.referral', compact('consultation'));
    }

    // create a public function called generateReferral
    public function generateReferral(Request $request, $id)
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

        $referralRequest = [
            'name' => $request->name,
            'subjective' => $consultation->subjective,
            'objective' => $consultation->objective,
            'assessment' => $consultation->assessment,
            'plan' => $consultation->plan,
            'note' => $request->note,
        ];

        return PDF::loadView('print.referral', compact('referralRequest', 'consultation', 'region_description', 'province_description', 'city_municipality_description', 'barangay_description'))->setOption('page-width', '140')->setOption('page-height', '216')->setOption('margin-top', '0')->setOption('margin-right', '0')->setOption('margin-bottom', '0')->setOption('margin-left', '0')->setOption('footer-right', 'footer')->setOrientation('portrait')->inline('referral.pdf');
    }

    // Admission
    // create a public function called admissionIndex
    public function admissionIndex($id)
    {
        $consultation = Consultation::with('patient')->where('id', $id)->first();
        return view('request.admission', compact('consultation'));
    }

    // create a public function called generateAdmission
    public function generateAdmission(Request $request, $id)
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

        $admissionRequest = [
            'input_1' => $request->input_1,
            'input_2' => $request->input_2,
            'work_up' => $request->work_up,
            'IVF' => $request->IVF,
            'meds' => $request->meds,
            'other_concern' => $request->other_concern,
            'subjective' => $consultation->subjective,
            'objective' => $consultation->objective,
            'assessment' => $consultation->assessment,
            'plan' => $consultation->plan,
            'note' => $request->note,
        ];

        return PDF::loadView('print.admission', compact('admissionRequest', 'consultation', 'region_description', 'province_description', 'city_municipality_description', 'barangay_description'))->setOption('page-width', '140')->setOption('page-height', '216')->setOption('margin-top', '0')->setOption('margin-right', '0')->setOption('margin-bottom', '0')->setOption('margin-left', '0')->setOption('footer-right', 'footer')->setOrientation('portrait')->inline('admission.pdf');
    }

    // Medical Certificate Routes
    // create a public function called medicalCertificateIndex
    public function medicalCertificateIndex($id)
    {
        $consultation = Consultation::with('patient')->where('id', $id)->first();
        return view('request.medical_certificate', compact('consultation'));
    }

    // create a public function called generateMedicalCertificate
    public function generateMedicalCertificate(Request $request, $id)
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

        $medicalCertificateRequest = [
            'date' => $request->date,
            'assessment' => $request->assessment,
            'procedure' => $request->procedure,
            'recommendation' => $request->recommendation,
        ];

        return PDF::loadView('print.medical_certificate', compact('medicalCertificateRequest', 'consultation', 'region_description', 'province_description', 'city_municipality_description', 'barangay_description'))->setPaper('a4')->setOrientation('portrait')->inline('medical.pdf');
    }
}
