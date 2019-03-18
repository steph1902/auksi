<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use App\Lot;
use Illuminate\Support\Facades\DB;



class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = DB::table('vendors')                    
                    ->join('lots','vendors.id', '=', 'lots.vendor_id')
                    ->where('vendor_verification', '=', 1)
                    ->select('vendors.vendor_name', 'vendor_membership', 
                        DB::raw('COUNT(lots.lot_name)as JumlahLot'),
                        DB::raw('SUM(lots.lot_price) as TotalPembayaran'))
                    ->groupBy('vendors.id','vendors.vendor_name','vendor_membership')
                    ->get(); 



        $verifiedCount = DB::table('vendors')
                        ->where('vendors.vendor_verification', '=' ,1)
                        ->select(DB::raw('COUNT(vendors.id) as verifiedCount'))
                        ->first();


    
        //echo($vendorsNotVerified->vendor_name);



        
        return view('vendors.index', compact('vendors','verifiedCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        'vendor_name'=>'required',
        'vendor_membership'=> 'required',
        'vendor_verification' => 'required'        
      ]);
      $vendor = new Vendor([
        'vendor_name' => $request->get('vendor_name'),
        'vendor_membership'=> $request->get('vendor_membership'),
        'vendor_verification' => $request->get('vendor_verification')
        
      ]);
      $vendor->save();
      return redirect('/vendors')->with('success', 'Vendor has been added');
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
