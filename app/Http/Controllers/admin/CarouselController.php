<?php

namespace App\Http\Controllers\admin;

use App\Carousel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel = Carousel::all();
        return view(
            'admin.carousel',
            compact('carousel')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $input['image_carousel'] = time() . '.' . $request->image_carousel->getClientOriginalExtension();
        $request->image_carousel->move(public_path('image/carousel/'), $input['image_carousel']);
        $input['title_carousel'] = $request->title_carousel;
        $input['desc_carousel'] = $request->desc_carousel;
        $input['text_title_carousel'] = $request->text_title_carousel;
        Carousel::create($input);
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
        $carousel = Carousel::find($id);
        return view(
            'admin.carousel-edit',
            compact('carousel')
        );
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
        $carousel = Carousel::find($request->id);

        if ($request->image_carousel != '') {
            $path = public_path() . '/image/carousel/';

            //code for remove old file
            if ($carousel->image_carousel != ''  && $carousel->image_carousel != null) {
                $file_old = $path . $carousel->image_carousel;
                unlink($file_old);
            }

            //upload new file
            $file = $request->image_carousel;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            // dd($filename);
            $input['image_carousel'] = $filename;
            $input['title_carousel'] = $request->title_carousel;
            $input['desc_carousel'] = $request->desc_carousel;
            $input['text_title_carousel'] = $request->text_title_carousel;
            $carousel->update($input);
        } else {
            $carousel->update($request->all());
        }


        return redirect('../carousel')->with('Success', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carousel::find($id);
        $path = public_path() . '/image/carousel/';
        if ($carousel->image_carousel != ''  && $carousel->image_carousel != null) {
            $file_old = $path . $carousel->image_carousel;
            unlink($file_old);
        }
        $carousel->delete();

        return back()->with('Success', 'Successfully delete data!');
    }
}
