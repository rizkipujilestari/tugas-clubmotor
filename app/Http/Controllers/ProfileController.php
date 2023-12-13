<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display Home Page.
     * 
     */
    public function index()
    {
        return view('home');
    }
    
    /**
     * Display Profile Page.
     * 
     */
    public function profile()
    {
        return view('profile');
    }
    
    /**
     * Display Visi dan Misi Page.
     * 
     */
    public function visiMisi()
    {
        return view('visimisi');
    }

    /**
     * Display About Us Page.
     * 
     */
    public function aboutUs()
    {
        return view('about_us');
    }
    
    /**
     * Display Contact Us Page.
     * 
     */
    public function contactUs()
    {
        return view('contact_us');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
