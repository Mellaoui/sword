<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Partenaire;
use App\Models\PourquoinousChoisir;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presentations = Presentation::all();
        $partenaires = Partenaire::all();
        $reasons = PourquoinousChoisir::all();
        $services = Service::all();
        $posts = Blog::all();

        // $services_images = Service::first()->getFirstMedia('service-images')->getUrl();//
        // dd($services_images);

        // dd($reasons);
        return view('home',[
            "posts" => $posts,
            'presentations' => $presentations,
            'services' => $services,
            'partenaires' => $partenaires,
            'reasons' => $reasons
            ]);
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
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Presentation $presentation , $id)
    {
        $presentation = Presentation::find($id);
        return view('presentation')->with('presentation', $presentation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Presentation $presentation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presentation $presentation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presentation $home)
    {
        //
    }
}
