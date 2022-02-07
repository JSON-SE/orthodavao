<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\XrayRequest;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

class RequestController extends Controller
{
    public function requestXRay(Builder $builder, Request $request, $id)
    {
        $consultation = Consultation::with('patient')->where('id', $id)->first();
        if (request()->ajax()) {
            $xrayQuery = DataTables::of(XrayRequest::query())->toJson();
            return DataTables::of(
                XrayRequest::query()
            )->toJson();
        }
        $html = $builder->columns(
            [
                ['data' => 'id', 'name' => 'id', 'title' => 'Id'],
                ['data' => 'name', 'name' => 'name', 'title' => 'Name'],
            ],
        );
        return view('request.xray', compact('html', 'consultation'))->extends('layouts.app');
    }
}
