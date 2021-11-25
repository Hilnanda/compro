<?php

namespace App\Http\Controllers\admin;

use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::first();
        return view('admin.banner',
        compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $banner = Banner::find($request->id);
        if($request->banner_image != ''){        
            $path = public_path().'/image/';
  
            //code for remove old file
            if($banner->banner_image != ''  && $banner->banner_image != null){
                 $file_old = $path.$banner->banner_image;
                 unlink($file_old);
            }
  
            //upload new file
            $file = $request->banner_image;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $input['banner_image'] = $filename;
            $input['banner_text1'] = $request->banner_text1;
            $input['banner_text2'] = $request->banner_text2;
            $input['banner_text3'] = $request->banner_text3;
            $input['banner_text4'] = $request->banner_text4;
            $input['banner_text5'] = $request->banner_text5;
            // $input['date_banner'] = $request->date_banner;
            $banner->update($input);
       }else {
        $banner->update($request->all());
       }
        
        return back()->with('Sukses', 'Berhasil menambahkan data!');
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
