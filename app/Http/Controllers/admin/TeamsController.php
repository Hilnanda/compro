<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Teams::all();
        return view(
            'admin.team',
            compact('team')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $input['image_main_two'] = time() . '.' . $request->image_main_two->getClientOriginalExtension();
        $request->image_main_two->move(public_path('image/team'), $input['image_main_two']);
        $input['title_main_two'] = $request->title_main_two;
        $input['text_main_two'] = $request->text_main_two;
        $input['desc_main_two'] = $request->desc_main_two;
        Teams::create($input);
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
        $team = Teams::find($id);
        return view(
            'admin.team-edit',
            compact('team')
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
        $team = Teams::find($request->id);

        if ($request->image_main_two != '') {
            $path = public_path() . '/image/team/';

            //code for remove old file
            if ($team->image_main_two != ''  && $team->image_main_two != null) {
                $file_old = $path . $team->image_main_two;
                unlink($file_old);
            }

            //upload new file
            $file = $request->image_main_two;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            // dd($filename);
            $input['image_main_two'] = $filename;
            $input['title_main_two'] = $request->title_main_two;
            $input['text_main_two'] = $request->text_main_two;
            $input['desc_main_two'] = $request->desc_main_two;
            $team->update($input);
        } else {
            $team->update($request->all());
        }


        return redirect('../team-cms')->with('Success', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teams::find($id)->delete();


        return back()->with('Success', 'Successfully delete data!');
    }
}
