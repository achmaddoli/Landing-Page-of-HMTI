<?php

namespace App\Http\Controllers;

use App\Models\Fungsionaris;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FungsionarisController extends Controller
{
    public function index()
    {
        $fungsionaris = Fungsionaris::with('jabatan')->get();
        return view('fungsionaris.index', compact('fungsionaris'));
    }

    public function tampil()
    {
        $fungsionaris = Fungsionaris::with('jabatan')->orderBy('nama', 'asc')->get();
        return view('profil', compact('fungsionaris'));
    }

    public function create()
    {
        $jabatans = Jabatan::all();
        return view('fungsionaris.create', compact('jabatans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nama_jabatan' => 'required',
            'image' => 'required|image|mimes:jpeg,png|max:2048'
        ]);

        try {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('foto'), $imageName);

            $jabatan = Jabatan::where('nama_jabatan', $request->nama_jabatan)->first();

            Fungsionaris::create([
                'nama' => $request->nama,
                'id_jabatan' => $jabatan->id,
                'image' => $imageName
            ]);

            Alert::success('Success', 'Data Fungsionaris berhasil ditambahkan.');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menambahkan data Fungsionaris.');
        }

        return redirect()->route('fungsionaris.index');
    }

    public function edit($id)
    {
        $fungsionaris = Fungsionaris::findOrFail($id);
        $jabatans = Jabatan::all();
        return view('fungsionaris.edit', compact('fungsionaris', 'jabatans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nama_jabatan' => 'required',
            'image' => 'sometimes|nullable|image|mimes:jpeg,png|max:2048'
        ]);

        $fungsionaris = Fungsionaris::findOrFail($id);

        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('foto'), $imageName);

                if ($fungsionaris->image) {
                    $oldImagePath = public_path('foto/' . $fungsionaris->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $fungsionaris->image = $imageName;
            }

            $jabatan = Jabatan::where('nama_jabatan', $request->nama_jabatan)->first();

            $updateData = [
                'nama' => $request->nama,
                'id_jabatan' => $jabatan->id,
            ];

            if (isset($imageName)) {
                $updateData['image'] = $imageName;
            }

            $fungsionaris->update($updateData);

            Alert::success('Success', 'Data Fungsionaris berhasil diupdate.');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal mengupdate data Fungsionaris.');
        }

        return redirect()->route('fungsionaris.index');
    }

    public function destroy($id)
    {
        $fungsionaris = Fungsionaris::findOrFail($id);

        try {
            if ($fungsionaris->image) {
                $imagePath = public_path('foto/' . $fungsionaris->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $fungsionaris->delete();

            Alert::success('Deleted', 'Data Fungsionaris berhasil dihapus.');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menghapus data Fungsionaris.');
        }

        return redirect()->route('fungsionaris.index');
    }
}
