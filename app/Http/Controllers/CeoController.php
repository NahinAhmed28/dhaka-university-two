<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Ceo;
use Illuminate\Http\Request;

class CeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = [
            'ceo' => Ceo::first(),
            ];

        return view('admin.ceos.edit', $data);
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
     * @param  \App\Models\Ceo  $ceo
     * @return \Illuminate\Http\Response
     */
    public function show(Ceo $ceo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ceo  $ceo
     * @return \Illuminate\Http\Response
     */
    public function edit(Ceo $ceo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ceo  $ceo
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(Request $request, Ceo $ceo)
    {
//        dd($request->all());

        $request->validate([
            'description' => 'required',
            'video' => 'required',
        ]);

         $ceo->update([
            'description' => $request->description,
            'video' => $request->video,
        ]);

        $data = [
            'ceo' => Ceo::first(),
        ];

        Alert::success('Ceo Info updated', 'information updated successfully');
        return view('admin.ceos.edit',$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ceo  $ceo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ceo $ceo)
    {
        //
    }


}
