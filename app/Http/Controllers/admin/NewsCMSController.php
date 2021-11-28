<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class NewsCMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view(
            'admin.news',
            compact('news')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $input['image_news'] = time() . '.' . $request->image_news->getClientOriginalExtension();
        $request->image_news->move(public_path('image/news/'), $input['image_news']);
        $input['title_news'] = $request->title_news;
        $input['desc_news'] = $request->desc_news;
        News::create($input);
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
        $news = News::find($id);
        return view(
            'admin.news-edit',
            compact('news')
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
        $news = News::find($request->id);

        if ($request->image_news != '') {
            $path = public_path() . '/image/news/';

            //code for remove old file
            if ($news->image_news != ''  && $news->image_news != null) {
                $file_old = $path . $news->image_news;
                unlink($file_old);
            }

            //upload new file
            $file = $request->image_news;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            // dd($filename);
            $input['image_news'] = $filename;
            $input['title_news'] = $request->title_news;
            $input['desc_news'] = $request->desc_news;
            $news->update($input);
        } else {
            $news->update($request->all());
        }


        return redirect('../news-cms')->with('Success', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::find($id)->delete();


        return back()->with('Success', 'Successfully delete data!');
    }
}
