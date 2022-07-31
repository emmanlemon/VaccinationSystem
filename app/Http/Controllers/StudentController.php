<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use Session;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('loginId'))
        {
            $id = Registration::where('id', '=' ,Session::get('loginId'))->first();

            return view('Student.Dashboard',[
                'id' => $id,
            ]);
        }
        else{
            return redirect('/auth')->with('fail' ,'This is For Student Section');
        }
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
        $Vaccination = Vaccination::create([
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = Registration::where('id', '=' ,Session::get('loginId'))->first();

        return view('Student.Profile',[
            'id' => $id,
        ]);
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
