<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patient.index');
    }

    /**
     * Display a Data
     *
     * @return \Illuminate\Http\Response
     */

    public function data()
    {
        $patient = Patient::orderBy('patient_id', 'desc')->get();

        return datatables()
        ->of($patient)
        ->addIndexColumn()
        ->addColumn('aksi', function ($patient) {
            return '
            <div class="btn-group">
                <button onclick="showDetail(`'. route('patient.show', $patient->patient_id) .'`)" class="btn btn-xs btn-info"><i class="fa fa-eye"></i></button>
                <button onclick="editForm(`'. route('patient.update', $patient->patient_id) .'`)" class="btn btn-xs btn-info"><i class="fa fa-cog"></i></button>
                <button onclick="deleteData(`'. route('patient.destroy', $patient->patient_id  ) .'`)" class="btn btn-xs btn-danger   "><i class="fa fa-trash"></i></button>
                <button onclick="qrcode(`'. route('patient.qrcode', $patient->patient_id) .'`)" class="btn btn-xs btn-info"><i class="fa fa-qrcode"></i></button>
            </div>
            ';
        })
        ->rawColumns(['aksi'])
        ->make(true);

    }

    public function qrcode()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $patient = Patient::find($id);

        return response()->json($patient);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient();
        $patient->patient_name = $request->patient_name;
        $patient->email = $request->email;
        $patient->nik = $request->nik;
        
        $patient->save();

        return response()->json('Data Berhasil Disimpan', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);

        return response()->json($patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::find($id)->update($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();

        return response(null, 204);
    }
}
