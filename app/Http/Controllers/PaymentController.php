<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payment.index');
    }

    /**
     * Display a Data
     *
     * @return \Illuminate\Http\Response
     */

    public function data()
    {
        $payment = Payment::orderBy('payment_id', 'desc')->get();

        return datatables()
        ->of($payment)
        ->addIndexColumn()
        ->addColumn('aksi', function ($payment) {
            return '
            <div class="btn-group">
                <button onclick="editForm(`'. route('payment.update', $payment->payment_id) .'`)" class="btn btn-xs btn-info"><i class="fa fa-cog"></i></button>
                <button onclick="deleteData(`'. route('payment.destroy', $payment->payment_id  ) .'`)" class="btn btn-xs btn-danger   "><i class="fa fa-trash"></i></button>
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
        $payment = new Payment();
        $payment->payment_name = $request->payment_name;
        $payment->payment_logo = $request->payment_logo;
        $payment->payment_status = $request->payment_status;
        
        $payment->save();

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
        $payment = Payment::find($id);

        return response()->json($payment);
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
        $payment = Payment::find($id)->update($request->all());

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
        $payment = Payment::find($id);
        $payment->delete();

        return response(null, 204);
    }
}
