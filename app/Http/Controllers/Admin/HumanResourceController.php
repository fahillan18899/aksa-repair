<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HumanResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::all();

        return view('pages.admin.human_resource.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.human_resource.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => '',
            'password' => '',
            'user_role' => '',
            'tanggal_lahir' => '',
            'kode_rs' => '',
            'firstname' => '',
            'lastname' => '',
            'sex' => '',
            'designation' => '',
            'address' => '',
            'phone' => '',
            'mobile' => '',
            'career_title' => '',
            'short_biography' => '',
            'specialist' => '',
            'degree' => '',
            'picture' => '',
            'tambah_employee' => '',
        ]);
        $request['kode_rs'] = Auth::user()->kode_rs;
        $data['password'] = bcrypt($request->input('password'));
        User::create($request->post());


        return redirect()->route('human_resource.index')
            ->with('success', 'Data Berhasil Di Tambahkan.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = User::where('user_id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.human_resource.edit', [
            'item' => $item,
        ]);
    }

    public function show($id)
    {
        $item = User::where('user_id', $id)->where('kode_rs', Auth::user()->kode_rs)->first();
        return view('pages.admin.human_resource.profile', [
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  User $stock_opname)
    {
        $request->validate([
            'username' => '',
            'password' => '',
            'user_role' => '',
            'tanggal_lahir' => '',
            'kode_rs' => '',
            'firstname' => '',
            'lastname' => '',
            'sex' => '',
            'designation' => '',
            'address' => '',
            'phone' => '',
            'mobile' => '',
            'career_title' => '',
            'short_biography' => '',
            'specialist' => '',
            'degree' => '',
            'picture' => '',
            'tambah_employee' => '',
        ]);
        $stock_opname->fill($request->post())->save();


        return redirect()->route('stock_opname.index')
            ->with('success', 'Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::where('user_id',  $id)->where('kode_rs', Auth::user()->kode_rs)->first();

        $item->delete();
        return redirect('/dashboard/human_resource')->with('success', 'Data Berhasil Di Hapus');;
    }
}
