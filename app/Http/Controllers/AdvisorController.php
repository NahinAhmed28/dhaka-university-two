<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class AdvisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = [
            'advisors' => Advisor::get()->toQuery()->paginate(5),
        ];
        return view('admin.advisors.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.advisors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'message' => 'required',
        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = 'advisor' . time() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('assets/uploads/advisor')) {
                mkdir('assets/uploads/advisor', 0777, true);
            }
            $image->move('assets/uploads/advisor', $imageFileName);
            Image::make('assets/uploads/advisor/'.$imageFileName)->resize(600,600)->save('assets/uploads/advisor/'.$imageFileName);
        } else {
            $imageFileName = 'default_logo.png';
        }

//        dd($request->all());
        $advisor = Advisor::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'message' => $request->message,
            'image' => $imageFileName,
        ]);


        $data = [
            'advisors' => Advisor::get()->toQuery()->paginate(5),
        ];
        Alert::success('Advisor info Added', 'Advisor Info Added Successfully');
        return view('admin.advisors.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function show(Advisor $advisor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $advisor = Advisor::find($id);
        return view('admin.advisors.edit', compact('advisor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Advisor $advisor)
    {
        $advisorImageFileName = $advisor->image;
        if ($request->hasFile('image')){
            $advisorImage = $request->file('image');
            $advisorImageFileName = 'advisor'.time() . '.' . $advisorImage->getClientOriginalExtension();


            if (!file_exists('assets/uploads/advisor')){
                mkdir('assets/uploads/advisor', 0777, true);
            }

            //delete old image if exist


            if (file_exists('assets/uploads/advisor/'.$advisor->image) and $advisor->image != 'default.png'){
                unlink('assets/uploads/advisor/'.$advisor->image);
            }
            $advisorImage->move('assets/uploads/advisor', $advisorImageFileName);
            Image::make('assets/uploads/advisor/'.$advisorImageFileName)->resize(600,600)->save('assets/uploads/advisor/'.$advisorImageFileName);
        }

        $advisor->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'message' => $request->message,
            'image' => $advisorImageFileName,

        ]);
        Alert::success('Advisor info Updated', 'Advisor Info Updated Successfully');
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Advisor::destroy($id);
        return redirect()->back();
    }
}
