<?php

namespace App\Http\Controllers;

use App\Models\Checkup;
use Illuminate\Http\Request;

class CheckupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkup.index');
    }

    /**
     * Display a Data
     *
     * @return \Illuminate\Http\Response
     */

    public function data()
    {
        $checkup = Checkup::orderBy('exam_id', 'desc')->get();

        return datatables()
        ->of($checkup)
        ->addIndexColumn()
        ->addColumn('aksi', function ($checkup) {
            return '
            <div class="btn-group">
                <button onclick="editForm(`'. route('checkup.update', $checkup->exam_id) .'`)" class="btn btn-xs btn-info"><i class="fa fa-cog"></i></button>
                <button onclick="deleteData(`'. route('checkup.destroy', $checkup->exam_id  ) .'`)" class="btn btn-xs btn-danger   "><i class="fa fa-trash"></i></button>
            </div>
            ';
        })
        ->rawColumns(['aksi'])
        ->make(true);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checkup = new Checkup();
        $checkup->exam_name = $request->exam_name;
        $checkup->label = $request->label;
        $checkup->price = $request->price;
        
        $checkup->save();

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
        $checkup = Checkup::find($id);

        return response()->json($checkup);
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
        $checkup = Checkup::find($id)->update($request->all());

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
        $checkup = Checkup::find($id);
        $checkup->delete();

        return response(null, 204);
    }
}
