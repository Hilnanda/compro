<?php

namespace App\Http\Controllers\admin;

use App\Copyright;
use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::first();
        $copyright = Copyright::first();
        return view(
            'admin.footer',
            compact('footer','copyright')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $footer = Footer::find($request->id);
        if (!$request->image_footer) {
            $input['image_footer'] = time() . '.' . $request->image_footer->getClientOriginalExtension();
            $request->image_footer->move(public_path('image/footer/'), $input['image_footer']);
            $input['title_footer'] = $request->title_footer;
            $input['desc_footer'] = $request->desc_footer;
            $footer->update($input);
        } else {
            if ($request->image_footer != '') {
                $path = public_path() . '/image/footer/';

                //code for remove old file
                if ($footer->image_footer != ''  && $footer->image_footer != null) {
                    $file_old = $path . $footer->image_footer;
                    unlink($file_old);
                }

                //upload new file
                $file = $request->image_footer;
                $filename = $file->getClientOriginalName();
                $file->move($path, $filename);
                $input['image_footer'] = $filename;
                $input['title_footer'] = $request->title_footer;
                $input['desc_footer'] = $request->desc_footer;
                $footer->update($input);
            } else {
                $footer->update($request->all());
            }
        }


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
    public function destroy_image($id)
    {
        $footer = Footer::find($id);

        // Make sure you've got the model
        if ($footer) {
            $path = public_path() . '/image/footer/';
            if ($footer->image_footer != ''  && $footer->image_footer != null) {
                $file_old = $path . $footer->image_footer;
                unlink($file_old);
            }
            $footer->image_footer = null;
            $footer->save();
        }
        return back()->with('Success', 'Successfully delete image!');
    }
}
