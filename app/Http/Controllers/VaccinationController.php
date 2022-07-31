<?php

namespace App\Http\Controllers;

use App\Http\Requests\VaccinationRequests;
use App\Models\Vaccination;
use App\Models\Registration;

use Illuminate\Http\Request;
use Session;

class VaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Student.VaccinationData');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Registration::where('id', '=' ,Session::get('loginId'))->first();
 
     
            $Vaccination = Vaccination::create([
                'registration_id' => $id->id,
                'vaccinated' => $request->vaccinated,
                'brand' => $request->brand,
                'firstDose' => $request->firstDose,
                'provider1' => $request->provider1,
                'secondDose' => $request->secondDose,
                'provider2' => $request->provider2,
                'booster' => $request->booster,
                'provider3' => $request->provider3,
                'boosterDate' => $request->boosterDate,
                'reason' => $request->reason,
            ]);

            dd('hello');
         
          
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
