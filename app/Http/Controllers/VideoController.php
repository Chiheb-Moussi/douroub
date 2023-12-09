<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video ; 
class VideoController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video=Video::latest()->get();
        return $video;
  
    }
    public function getvideobyid($id)
    {
        $video=Video::where('cours_id_key',$id)->get();
        return $video;
  
    }
}
