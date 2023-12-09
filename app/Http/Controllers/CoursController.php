<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours ; 

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cours=Cours::latest()->get();
        return $Cours;
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $attrib= new Cours;
        // $attrib->Video_id=$request->Video_id;
        $attrib->classe=$request->classe;
        $attrib->nom_prof=$request->nom_prof;
        $attrib->nom_coure=$request->nom_coure;
        $attrib->annee_scolaire=$request->annee_scolaire;
        $attrib->commentaire=$request->commentaire;
        $attrib->image=$request->image;
    
        $attrib->save();

        return $attrib;
    }


        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getbyid($id)
    {
        $Cours=Cours::where('id',$id)->get();
        return $Cours;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   

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
