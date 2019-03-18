<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lot;
use App\Vendor;
use Illuminate\Support\Facades\DB;
class LotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //kendaraan nama vendor status harga
        $lots = DB::table('lots')
                ->join('vendors','lots.vendor_id','=','vendors.id')
                ->select('lots.lot_name', 'vendors.vendor_name','lots.lot_appraisal','lots.lot_price')
                ->get();

        return view('lots.index',compact('lots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('lots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // $table->increments('id');
        //     $table->string('lot_name');
        //     $table->boolean('lot_appraisal');
        //     $table->bigInteger('lot_price');
        //     $table->integer('vendor_id');
        //     $table->timestamps();
        //
        $request->validate([
        'lot_name'=>'required',
        'lot_appraisal'=> 'required',
        'lot_price'=>'required',
        'vendor_id'=>'required'

      ]);
      $lot = new Lot([
        'lot_name' => $request->get('lot_name'),
        'lot_appraisal'=> $request->get('lot_appraisal'),
        'lot_price'=> $request->get('lot_price'),
        'vendor_id'=>$request->get('vendor_id')
        
      ]);
      $lot->save();
      return redirect('/lots')->with('success', 'Lot has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
