<?php

namespace App\Http\Controllers\admin;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsCMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();
        return view('admin.about',
        compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $input['image_about'] = time() . '.' . $request->image_about->getClientOriginalExtension();
        $request->image_about->move(public_path('image/about/'), $input['image_about']);
        $input['desc_about'] = $request->desc_about;
        About::create($input);
        return back()->with('Success', 'Successfully added data!');
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
    public function update(Request $request)
    {
        $about = About::find($request->id);

        if ($request->image_about != '') {
            $path = public_path() . '/image/about/';

            //code for remove old file
            if ($about->image_about != ''  && $about->image_about != null) {
                $file_old = $path . $about->image_about;
                unlink($file_old);
            }

            //upload new file
            $file = $request->image_about;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            // dd($filename);
            $input['image_about'] = $filename;
            $input['desc_about'] = $request->desc_about;
            $about->update($input);
        } else {
            $about->update($request->all());
        }


        return redirect('../about-cms')->with('Success', 'Successfully updated data!');
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
