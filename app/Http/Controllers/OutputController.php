<?php

namespace App\Http\Controllers;

use App\Models\Output;
use Illuminate\Http\Request;

class OutputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('output.index');
    }

    /**
     * Display a Data
     *
     * @return \Illuminate\Http\Response
     */

    public function data()
    {
        $output = Output::orderBy('output_id', 'desc')->get();

        return datatables()
        ->of($output)
        ->addIndexColumn()
        ->addColumn('aksi', function ($output) {
            return '
            <div class="btn-group">
                <button onclick="editForm(`'. route('output.update', $output->output_id) .'`)" class="btn btn-xs btn-info"><i class="fa fa-cog"></i></button>
                <button onclick="deleteData(`'. route('output.destroy', $output->output_id  ) .'`)" class="btn btn-xs btn-danger   "><i class="fa fa-trash"></i></button>
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
        $output = new output();
        $output->output_name = $request->output_name;
        $output->output_status = $request->output_status;
        
        $output->save();

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
        $output = Output::find($id);

        return response()->json($output);
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
        $output = Output::find($id)->update($request->all());

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
        $output = Output::find($id);
        $output->delete();

        return response(null, 204);
    }
}
