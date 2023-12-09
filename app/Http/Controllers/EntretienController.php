<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entretien ; 

class EntretienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $entretien=Entretien::latest()->get();
        return $entretien;
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attrib= new Entretien;
        $attrib->user_id=$request->user_id;
        $attrib->date=$request->date;
        $attrib->heure=$request->heure;
     
        
    
        $attrib->save();

        return $attrib;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entretien=Entretien::where('user_id',$id)->pluck('date');
        return $entretien;
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
