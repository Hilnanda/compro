<?php

namespace App\Http\Controllers\admin;

use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Content::all();
        return view(
            'admin.content',
            compact('content')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $input['image_main_one'] = time() . '.' . $request->image_main_one->getClientOriginalExtension();
        $request->image_main_one->move(public_path('image/content'), $input['image_main_one']);
        $input['title_main_one'] = $request->title_main_one;
        $input['text_main_one'] = $request->text_main_one;
        Content::create($input);
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
        $content = Content::find($id);
        return view(
            'admin.content-edit',
            compact('content')
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
        $content = Content::find($request->id);

        if ($request->image_main_one != '') {
            $path = public_path() . '/image/content/';

            //code for remove old file
            if ($content->image_main_one != ''  && $content->image_main_one != null) {
                $file_old = $path . $content->image_main_one;
                unlink($file_old);
            }

            //upload new file
            $file = $request->image_main_one;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            // dd($filename);
            $input['image_main_one'] = $filename;
            $input['title_main_one'] = $request->title_main_one;
            $input['text_main_one'] = $request->text_main_one;
            $content->update($input);
        } else {
            $content->update($request->all());
        }


        return redirect('../content')->with('Success', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Content::find($id)->delete();


        return back()->with('Success', 'Successfully delete data!');
    }
}
