<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
class MarriageFormController extends Controller
{
    public function create()
    {
        return view('husband_detail.create');
        return view('wife_detail.create');
        return view('witness_detail.create');
        return view ('lawer_detail.create');
    }

    // Store the data
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'nofhusband' => 'required|string|max:255',
            'nohusbandfather' => 'required|string|max:255',
            'nohusbandmother' => 'required|string|max:255',
            'hdob' => 'required|date',
            'hsbmarriage' => 'required|string|max:255',
            'haddress' => 'required|string',
            'hzipcode' => 'required|string|max:6',
            'hstate' => 'required|string|max:255',
        ]);

        // Create a new HusbandDetail record in the database
        HusbandDetail::create([
            'nofhusband' => $request->nofhusband,
            'nohusbandfather' => $request->nohusbandfather,
            'nohusbandmother' => $request->nohusbandmother,
            'hdob' => $request->hdob,
            'hsbmarriage' => $request->hsbmarriage,
            'haddress' => $request->haddress,
            'hzipcode' => $request->hzipcode,
            'hstate' => $request->hstate,
        ]);

        // Redirect with a success message
        return redirect()->route('husband_detail.create')->with('success', 'Husband details saved successfully!');
    }
   

    // Store the data
    public function store(Request $request){
    
        // Validate the incoming request
        $request->validate([
            'nofwife' => 'required|string|max:255',
            'wifefathername' => 'required|string|max:255',
            'wifemothername' => 'required|string|max:255',
            'wdob' => 'required|date',
            'wifemaritalstatus' => 'required|string|max:255',
            'wifeaddress' => 'required|string',
            'wzipcode' => 'required|string|max:6',
            'wifestate' => 'required|string|max:255',
        ]);

        // Create a new WifeDetail record in the database
        WifeDetail::create([
            'nofwife' => $request->nofwife,
            'wifefathername' => $request->wifefathername,
            'wifemothername' => $request->wifemothername,
            'wdob' => $request->wdob,
            'wifemaritalstatus' => $request->wifemaritalstatus,
            'wifeaddress' => $request->wifeaddress,
            'wzipcode' => $request->wzipcode,
            'wifestate' => $request->wifestate,
        ]);

        // Redirect with a success message
        return redirect()->route('wife_detail.create')->with('success', 'Wife details saved successfully!');
    }
    
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'witnessname' => 'required|string|max:255',
            'witnessaddress' => 'required|string',
            'hwitnessnames' => 'required|string|max:255',
            'hwitnessfathername' => 'required|string|max:255',
            'hwitnessmothername' => 'required|string|max:255',
            'husbandwitnessaddresss' => 'required|string',
            'wifewitnessname' => 'required|string|max:255',
            'wifewitnessfathername' => 'required|string|max:255',
            'wifewitnessmothername' => 'required|string|max:255',
            'wifewitnessaddress' => 'required|string',
        ]);

        // Create a new WitnessDetail record in the database
        WitnessDetail::create([
            'witnessname' => $request->witnessname,
            'witnessaddress' => $request->witnessaddress,
            'hwitnessnames' => $request->hwitnessnames,
            'hwitnessfathername' => $request->hwitnessfathername,
            'hwitnessmothername' => $request->hwitnessmothername,
            'husbandwitnessaddresss' => $request->husbandwitnessaddresss,
            'wifewitnessname' => $request->wifewitnessname,
            'wifewitnessfathername' => $request->wifewitnessfathername,
            'wifewitnessmothername' => $request->wifewitnessmothername,
            'wifewitnessaddress' => $request->wifewitnessaddress,
        ]);

        // Redirect with a success message
        return redirect()->route('witness_detail.create')->with('success', 'Witness details saved successfully!');
    }
    public function store(Request $request)
    {
        $request->validate([
            'lawername' => 'required|string|max:255',
            'laweraddress' => 'required|string',

            'hlawername' => 'required|string|max:255',
            'hlawerfathername' => 'required|string|max:255',
            'hlawermothername' => 'required|string|max:255',
            'hlaweraddress' => 'required|string',

            'wifelawername' => 'required|string|max:255',
            'wifelawerfathername' => 'required|string|max:255',
            'wifelawermothername' => 'required|string|max:255',
            'wifelaweraddress' => 'requird|stirng',
        ]);

        // Create a new LawerDetail record in the database
        LawerDetail::create([
            'lawername' => $request->lawername,
            'laweraddress' => $request->laweraddress,

            'hlawername' => $request->hlawername,
            'hlawerfathername' => $request->hlawerfathername,
            'hlawermothername' => $request->hlawermothername,
            'hlaweraddress' => $request->hlaweraddress,
            
            'wifelawername' => $request->wifelawername,
            'wifelawerfathername' => $request->wifelawerfathername,
            'wifelawermothername' => $request->wifelawermothername,
            'wifelaweraddress' => $request->wifelaweraddress,

        ]);

        // Redirect with a success message
        return redirect()->route('lawer_detail.create')->with('success', 'Lawer details saved successfully!');
    }
}