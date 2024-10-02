<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Role;
use App\Models\RoleMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        $title = 'Role';
        $menus = Menu::all();
        $accessMenus = RoleMenu::with('menu')->where('role_id',auth()->user()->role_id)->get();
        return view('role.index',compact('roles','title','menus','accessMenus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        $title = 'Role';
        $menus = Menu::all();
        $accessMenus = RoleMenu::with('menu')->where('role_id',auth()->user()->role_id)->get();
        return view('role.create',compact('roles','title','menus','accessMenus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'is_active' => 'required'
        ]);
        Role::create($validateData);
        return redirect(route('role.index'))->with('success','Data berhasil ditambahkan!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $title = 'Role';
        $menus = Menu::all();
        $accessMenus = RoleMenu::with('menu')->where('role_id',auth()->user()->role_id)->get();
        $role = Role::findOrFail($id);
        return view('role.edit',compact('title','menus','accessMenus','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required',
            'is_active' => 'required'
        ]);

        $role->update([
            'name' => $request->name,
            'is_active' => $request->is_active
        ]);

        return redirect(route('role.index'))->with('success','Data berhasil diperbarui!!!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete($id);

        return redirect(route('role.index'))->with('success','Data berhasil dihapus!!!');
    }
}
