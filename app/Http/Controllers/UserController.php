<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();
        return $user; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attrib= new User;
        $attrib->email=$request->email;
        $attrib->nom=$request->nom;
        // $attrib->prenom=$request->prenom;
        // $attrib->classe=$request->classe;
        // $attrib->image=$request->image;
        // $attrib->telephone=$request->telephone;
        // $attrib->adresse=$request->adresse;
        // $attrib->deplome=$request->deplome;
        // $attrib->validerEntretien=$request->validerEntretien;
         $attrib->password=$request->password ;
        //Hash::make(
        $attrib->save();

        return $attrib
        ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user=User::find($id);
      return $user;
    }
    public function login(Request $request)
    {
        $user=User::where('email',$request->email)->where('password',$request->password)->get();
        // ->where('role_name','e')

        
        return $user;
    
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
