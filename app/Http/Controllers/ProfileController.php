<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
    
    public function sendWa(Request $request)
    {
        $insert = DB::table('contact_message')->insert([
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        if($insert === true) {
            return redirect('/contact-us')->with('success', 'Successfully insert data!'); ;
        } else {
            return redirect('/contact-us')->withErrors(['msg' => 'Failed to insert data!']);
        }
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
