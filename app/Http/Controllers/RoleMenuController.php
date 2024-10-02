<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\RoleMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;

class RoleMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Role Menu';
        $roleMenus = RoleMenu::all();
        $menus = Menu::all();
        $accessMenus = RoleMenu::with('menu')->where('role_id',auth()->user()->role_id)->get();
        return view('role_menu.index',compact('roleMenus','title','menus','accessMenus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $title = 'Role Menu';
        $roleMenus = RoleMenu::all();
        $menus = Menu::all();
        $roles = Role::all();
        $accessMenus = RoleMenu::with('menu')->where('role_id',auth()->user()->role_id)->get();
        return view('role_menu.create',compact('roleMenus','title','menus','roles','accessMenus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validateData = $request->validate([
            'role_id' => 'required',
            'menu_id' => 'required'
        ]);

        RoleMenu::create($validateData);
        return redirect()->route('role_menu.index')->with('success','Data berhasil ditambahkan!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(RoleMenu $roleMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $roleMenu = RoleMenu::findOrFail($id);
        $roles = Role::all();
        $menus = Menu::all();
        $title = 'Role Menu';
        $accessMenus = RoleMenu::with('menu')->where('role_id',auth()->user()->role_id)->get();
        return view('role_menu.edit',compact('roleMenu','roles','menus','title','accessMenus'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoleMenu $roleMenu)
    {
        $request->validate([
            'role_id' => 'required',
            'menu_id' => 'required'
        ],[
            'role_id.required' => 'role harus diisi',
            'menu_id.required' => 'menu harus diisi'
        ]);

        $roleMenu->update([
            'role_id' => $request->role_id,
            'menu_id' => $request->menu_id
        ]);

        return redirect()->route('role_menu.index')->with('success','Data berhasil diubah!!!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $roleMenu = RoleMenu::findOrFail($id);
        $roleMenu->delete();

        return redirect(route('role_menu.index'))->with('success','Data berhasil dihapus!!!');
    }
}
