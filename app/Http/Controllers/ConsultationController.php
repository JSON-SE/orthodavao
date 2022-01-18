<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\ImagePatient;
use Illuminate\Http\Request;
use App\Models\ConsultationImagePatient;

class ConsultationController extends Controller
{
    public function store(Request $request)
    {
        $consultation = new Consultation();
        $consultation->patient_id = $request->patient_id;
        $consultation->subjective = $request->subjective;
        $consultation->objective = $request->objective;
        $consultation->assessment = $request->assessment;
        $consultation->plan = $request->plan;
        $consultation->save();

        $images = array();
        $files=$request->file('images');

        if ($files != null) {
            foreach ($files as $file) {
                $name=$file->getClientOriginalName();
                $file->move('image', $name);
                $images[]=$name;

                $storeImage = new ImagePatient();
                $storeImage->name = $name;
                $storeImage->save();

                $storeConsultationImagePatient = new ConsultationImagePatient();
                $storeConsultationImagePatient->consultation_id = $consultation->id;
                $storeConsultationImagePatient->image_patient_id = $storeImage->id;
                $storeConsultationImagePatient->patient_id = $request->patient_id;
                $storeConsultationImagePatient->save();
            }
        } else {
            $storeConsultationImagePatient = new ConsultationImagePatient();
            $storeConsultationImagePatient->consultation_id = $consultation->id;
            $storeConsultationImagePatient->patient_id = $request->patient_id;
            $storeConsultationImagePatient->save();
        }

        session()->put('message', 'Added successfuly to our records.');
        return back()->withInput();
    }
}
