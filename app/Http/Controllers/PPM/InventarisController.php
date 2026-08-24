<?php

namespace App\Http\Controllers\PPM;

use App\Models\Inv;
use App\Models\MasterAlat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class InventarisController extends Controller
{
    public function index()
    {
        return view('pages.admin.PPM.inv.index', compact('items'));
    }

    public function create(Request $request)
    {
        $qr = $request->qr;
        $items = Inv::latest()->get();
        return view('pages.admin.PPM.inv.create', compact('qr', 'items'));
    }

    public function masterAlat(Request $request)
    {
        $keyword = $request->get('q');
        $alat = MasterAlat::where('alat', 'LIKE', '%' .$keyword. '%')
        ->orderBy('alat')->limit(10)->get(['id','alat']);
        return response()->json($alat);
    } 

    public function store(Request $request)
    {
        $request->validate([
            'rs'        => 'required',
            'id_alat'   => 'required',
            'nama_alat' => 'required',
            'merek'     => 'required',
            'type'      => 'required',
            'seri'      => 'required',
            'lokasi'    => 'required',
            'jadwal'    => 'required',
            'foto'      => 'required',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('alat', 'public');
        }

        Inv::create([
            'rs'        => $request->rs,
            'id_alat'   => $request->id_alat,
            'nama_alat' => mb_strtoupper($request->nama_alat, 'UTF-8'),
            'merek'     => $request->merek,
            'type'      => $request->type,
            'seri'      => $request->seri,
            'lokasi'    => mb_strtoupper($request->lokasi, 'UTF-8'),
            'jadwal'    => $request->jadwal,
            'foto'      => $fotoPath,
        ]);

        session()->flash('success', 'Data Berhasil Tersimpan');
        return redirect()->route('qr.menu', ['id' => $request->id_alat]);
    }

    public function editInv($qr)
    {
        $item = Inv::where('id_alat', $qr)->firstOrFail();

        return view('pages.admin.PPM.inv.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_alat' => 'required',
            'merek'     => 'required',
            'type'      => 'required',
            'seri'      => 'required',
            'lokasi'    => 'required',
            'jadwal'    => 'required',
        ]);
        $validate['nama_alat'] = mb_strtoupper($validate['nama_alat'], 'UTF-8');
        $validate['lokasi'] = mb_strtoupper($validate['lokasi'], 'UTF-8');
        $item = Inv::findOrFail($id);
        $item->update($validate);
        session()->flash('success', 'Data Berhasil Diubah');
        return redirect()->route('qr.menu', ['id' => $item->id_alat]);
    }

    public function destroy($id)
    {
        $item = Inv::findOrFail($id);
        Storage::disk('public')->delete($item->foto);
        $item->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return back();
    }
}
