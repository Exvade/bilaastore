<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    public function index() {
        $testimonies = Testimony::latest()->get();
        return view('admin.testimonies.index', compact('testimonies'));
    }

    public function create() {
        return view('admin.testimonies.create');
    }

    public function store(Request $request) {
        $request->validate(['nama' => 'required', 'teks' => 'required']);
        Testimony::create($request->all());
        return redirect()->route('testimonies.index')->with('success', 'Testimoni berhasil ditambah! ✨');
    }

    public function edit($id) {
        $testimony = Testimony::findOrFail($id);
        return view('admin.testimonies.edit', compact('testimony'));
    }

    public function update(Request $request, $id) {
        $request->validate(['nama' => 'required', 'teks' => 'required']);
        Testimony::findOrFail($id)->update($request->all());
        return redirect()->route('testimonies.index')->with('success', 'Testimoni diperbarui! 💖');
    }

    public function destroy($id) {
        Testimony::findOrFail($id)->delete();
        return back()->with('success', 'Testimoni dihapus! 🗑️');
    }
}