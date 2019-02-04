<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = permission::all();
        return view('admin.permission.show', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create');
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
            'name' => 'required|max:50|unique:permissions'
        ]);
        $permission = new permission;
        $permission->name = $request->name;
        $permission->save();
        return redirect(route('permission.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\admin\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\admin\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit($permission)
    {
        $permission = permission::find($permission);
        return view('admin.permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\admin\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:50'
        ]);
        $permission = permission::find($id);
        $permission->name = $request->name;
        $permission->save();
        return redirect(route('permission.index'))->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\admin\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        permission::where('id', $id)->delete();
        return redirect()->back();
    }
}
