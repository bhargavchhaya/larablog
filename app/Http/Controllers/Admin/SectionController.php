<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\sections;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sections = sections::all();
        return view('admin.section.show', compact('sections'));
    }

    public function create()
    {
        return view('admin.section.section');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $imagename = $request->image->store('public');
        }
        $section = new Sections();
        $section->title = $request->title;
        $section->body = $request->body;
        $section->image = $imagename;
        $section->status = $request->status;
        $section->save();
        return redirect(route('section.index'));
    }


}
