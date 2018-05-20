<?php

namespace App\Http\Controllers;
use App\SuperTravel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
		$travel=SuperTravel::all();
        return view('frontend/index',compact('travel'));
    }

    public function subscribe_omra()
    {
        return view('frontend.omra.subscribe_omra');
    }

    public function omra()
    {
        return view('frontend.omra.index');
    }

    public function hotellerie()
    {
        return view('frontend.hotellerie');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supertravel=SuperTravel::find($id);
		return view('frontend\show',compact('supertravel'));
    }

}
