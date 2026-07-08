<?php

namespace App\Http\Controllers\PPM;

use App\Models\Inv;
use App\Models\Perbaikan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PerbaikanController extends Controller
{
    public function create(Request $request)
    {
        $qr = $request->qr;
        $alat = Inv::where('id_alat', $qr)->first();
        
        if (!$alat) {
            return redirect()
                ->route('qr.menu', ['id' => $qr])
                ->with('error','Alat belum terinventaris. Silakan lakukan inventaris terlebih dahulu');
        }
        $rs = $alat->rs;
        return view('pages.admin.PPM.perbaikan.create',compact('qr', 'alat','rs')
        );
    }

    public function data($qr)
    {
        $query = Perbaikan::query()->select([
            'id','created_at','nama_alat','merek',
            'type','seri','lokasi','kepala','teknisi',
            'korektif','catatan'])->where('id_alat', $qr);

        return DataTables::eloquent($query)
        ->editColumn('created_at', function ($row){
            return Carbon::parse($row->created_at)
            ->timezone('Asia/Jakarta')->format('d-M-Y H:i');
        })
         ->addIndexColumn()
        ->addColumn('aksi', function ($row) {
                return '<a href="'.route('perbaikan.edit', $row->id).'"
                        class="btn btn-success btn-xs"
                        data-toggle="tooltip"
                        title="Edit">
                        <i class="fa fa-pencil-square-o"></i>
                        </a>';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'rs'   => 'required',
            'id_alat'   => 'required',
            'nama_alat' => 'required',
            'merek'     => 'required',
            'type'      => 'required',
            'seri'      => 'required',
            'lokasi'    => 'required',
            'kepala'    => 'required',
            'teknisi'   => 'required',
            'korektif'  => 'required',
            'catatan'   => 'required',
            'foto'      => 'required',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('alat', 'public');
        }

        Perbaikan::create([
            'rs'   => $request->rs,
            'id_alat'   => $request->id_alat,
            'nama_alat' => $request->nama_alat,
            'merek'     => $request->merek,
            'type'      => $request->type,
            'seri'      => $request->seri,
            'lokasi'    => $request->lokasi,
            'kepala'    => $request->kepala,
            'teknisi'   => $request->teknisi,
            'korektif'  => $request->korektif,
            'catatan'   => $request->catatan,
            'foto'      => $fotoPath,
        ]);

        session()->flash('success', 'Data Berhasil Tersimpan');
        return redirect()->route('qr.menu', ['id' => $request->id_alat]);
    }

    public function edit($id)
    {
        $item = Perbaikan::findOrFail($id);
        return view('pages.admin.PPM.perbaikan.edit',
        compact('item'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_alat' => 'required',
            'merek'     => 'required',
            'type'      => 'required',
            'seri'      => 'required',
            'lokasi'    => 'required',
            'kepala'    => 'required',
            'teknisi'    => 'required',
            'korektif'    => 'required',
            'catatan'    => 'required',
        ]);

        $item = Perbaikan::findOrFail($id);
        $item->update($validate);
        session()->flash('success', 'Data Berhasil Diubah');
        return redirect()->route('perbaikan.create', ['qr' => $item->id_alat]);
    }

    public function destroy($id)
    {
        $item = Perbaikan::findOrFail($id);
        Storage::disk('public')->delete($item->foto);
        $item->delete();
        session()->flash('success', 'Data Berhasil Dihapus');
        return back();
    }
}
