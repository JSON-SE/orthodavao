<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Consultation;
use App\Models\ImagePatient;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\ConsultationImagePatient;

class ConsultationController extends Controller
{
    public function store(Request $request)
    {

        // create a laravel 8 validation rules for consultation
        $request->validate([
            'date' => 'required',
            'subjective' => 'required',
            'objective' => 'required',
            'assessment' => 'required',
            'plan' => 'required',
            'date.required' => 'The date field is required.',
            'subjective.required' => 'The subjective field is required.',
            'objective.required' => 'The objective field is required.',
            'assessment.required' => 'The assessment field is required.',
            'plan.required' => 'The plan field is required.',
        ]);

        $consultation = new Consultation();
        $consultation->date = $request->date;
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
                $image = Image::make($file);
                $name = $consultation->patient_id.'_'.$consultation->id.'_'.$file->getClientOriginalName();
                $image->save(public_path('image/' .$name), 60);

                $images[]=$name;

                $storeImage = new ImagePatient();
                $storeImage->patient_id = $consultation->patient_id;
                $storeImage->consultation_id = $consultation->id;
                $storeImage->name = $name;
                $storeImage->save();
            }
        }
        session()->put('message', 'Added successfuly to our database.');
        return back()->withInput();
    }

    public function update(Request $request, $id)
    {

        // create a laravel 8 validation rules for consultation
        $request->validate([
            'date' => 'required',
            'subjective' => 'required',
            'objective' => 'required',
            'assessment' => 'required',
            'plan' => 'required',
            'date.required' => 'The date field is required.',
            'subjective.required' => 'The subjective field is required.',
            'objective.required' => 'The objective field is required.',
            'assessment.required' => 'The assessment field is required.',
            'plan.required' => 'The plan field is required.',
        ]);

        $consultation = Consultation::find($id);
        $consultation->date = $request->date;
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
                $image = Image::make($file);
                $name = $consultation->patient_id.'_'.$consultation->id.'_'.$file->getClientOriginalName();
                $image->save(public_path('image/' .$name), 60);

                $images[]=$name;

                $storeImage = new ImagePatient();
                $storeImage->patient_id = $consultation->patient_id;
                $storeImage->consultation_id = $consultation->id;
                $storeImage->name = $name;
                $storeImage->save();
            }
        }
        session()->put('message', 'Updated successfuly to our database.');
        return back()->withInput();
    }

    public function destroy(Request $request, $id)
    {
        $image = ImagePatient::find($id);
        if ($request->file != '') {
            $path = public_path().'image/';
            // ERROR: Cannot delete file 'public/image/'.$image->name.'.jpg' (Permission denied)
            // Remove old file
            if ($image->name != ''  && $image->name != null) {
                $file_old = Image::make($path.$image->name);
                $file_old->destroy;
            }
        }
        $image->delete();
        session()->put('message', 'Image Deleted Successfuly.');
        return back();
    }

    // create a public function called destroyConsultation that will delete a consultation
    public function destroyConsultation($id)
    {
        $consultation = Consultation::find($id);
        $image = ImagePatient::where('consultation_id', $id)->get();
        // TODO: see if image will be removed
        if ($image != null) {
            foreach ($image as $image) {
                $path = public_path().'/image/';
                // ERROR: Cannot delete file 'public/image/'.$image->name.'.jpg' (Permission denied)
                // Remove old file
                if ($image->name != ''  && $image->name != null) {
                    $file_old = Image::make($path.$image->name);
                    $file_old->destroy();
                }
                $image->delete();
            }
        }
        $consultation->delete();
        session()->put('message', 'Consultation Deleted Successfuly.');
        return back();
    }
}
