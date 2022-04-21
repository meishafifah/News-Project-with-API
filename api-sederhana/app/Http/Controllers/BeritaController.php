<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();

        $arr_view = ['list_berita' => $berita];

        $html_view = view('daftar_berita', $arr_view) -> render();

        $data_json = [
            'jumlah_berita' => count($berita),
            'konten' => $html_view,
            'titel' => 'Homepage'
        ];

        return json_encode($data_json);
    }

    public function callForm()
    {
        $html_view = view('form_berita') -> render();

        $data_json = [
            'konten' => $html_view,
            'titel' => 'Form Tambah Berita'
        ];

        return json_encode($data_json);
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
        $request->validate([
            'id_kategori_berita' => 'required',
            'judul_berita' => 'required',
            'isi_berita' => 'required'
        ]);

        $berita = new Berita([
            'kategori_berita' => $request->get('id_kategori_berita'),
            'judul_berita' => $request->get('judul_berita'),
            'isi_berita' => $request->get('isi_berita')
        ]);

        $berita->save();

        $data_json = [
            'pesan' => 'sukses',
            'berita' => $berita
        ];

        return json_encode($data_json);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $berita = Berita::where('id_berita', $id) -> first();

        $arr_view = [
            'list_berita' => $berita
        ];

        if ($berita == null) {
            $html_view = 'Berita Tidak Ditemukan';
        } else {
            $html_view = view('detail_berita', $arr_view) -> render();
        }

        $data_json = [
            'konten' => $berita,
            'titel' => 'Detail Berita'
        ];

        return json_encode($data_json);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
