<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Admin_Artikel extends BaseController
{
    public $artikelModel;

    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
    }

    public function index()
    {
        $artikel = $this->artikelModel->findAll();

        $data = [
            'article' => $artikel
        ];

        return view('admin/artikel', $data);
    }

    public function index_statistik()
    {
        $artikel = $this->artikelModel->findAll();

        $data = [
            'article' => $artikel
        ];

        return view('admin/statistik', $data);
    }

    public function create()
    {
        $artikel = $this->artikelModel->findAll();

        $data = [
            'article' => $artikel
        ];

        return view('admin/create_artikel', $data);
    }

    public function save()
    {
        $angka = rand(10, 100);
        $foto_artikel = $this->request->getFile('foto_artikel');
        $foto_artikel->move('assets/artikel');
        //ambil nama file

        if ($foto_artikel->getError() == 4) {
            $nama_foto = 'vector.png';
        } else {
            $nama_foto = $foto_artikel->getName();
        }
        date_default_timezone_set("Asia/Jakarta");

        $slug = url_title($this->request->getVar('judul_artikel'), '-', true);
        // $type = ;
        // echo $this->request->getVar('tipe_artikel');
        $this->artikelModel->save([
            'foto_artikel' => $nama_foto,
            'judul_artikel' => $this->request->getVar('judul_artikel'),
            'isi_artikel' => $this->request->getVar('isi_artikel'),
            'last_update' => date('y-m-d'),
            'jml_tayang' => $angka,
            'status' => $this->request->getVar('tipe_artikel'),
            'slug' => $slug
        ]);

        return redirect()->to('/admin/dashboard');
    }

    public function delete($id)
    {
        //cari gambar berdasar id
        $artikel = $this->artikelModel->find($id);

        // kalo gambarnya default
        if ($artikel['foto_artikel'] != 'vector.png') {
            unlink('assets/artikel/' . $artikel['foto_artikel']);
        }
        //hapus gambar di server

        $this->artikelModel->delete($id);
        return redirect()->to('/admin/dashboard');
    }
    public function edit($id)
    {
        $data = [
            'detail_artikel' => $this->artikelModel->getArtikel($id)
        ];

        // dd($detail_artikel);

        return view('admin/edit_artikel', $data);
    }
    public function update($id)
    {
        $foto_artikel = $this->request->getFile('foto_artikel');

        //kalo foto ada isinya
        if ($foto_artikel->getName() != '') {
            $foto_artikel->move('assets/artikel');
            $nama_foto = $foto_artikel->getName();
        }

        date_default_timezone_set("Asia/Jakarta");


        $slug = url_title($this->request->getVar('judul_artikel'), '-', true);

        // kalo ada foto baru
        if ($foto_artikel->getName() != '') {

            if ($foto_artikel->getName() != 'vector.png') {
                unlink('assets/artikel/' . $this->request->getVar('foto_lama'));
            }

            $this->artikelModel->save([
                'id_artikel' => $id,
                'foto_artikel' => $nama_foto,
                'judul_artikel' => $this->request->getVar('judul_artikel'),
                'isi_artikel' => $this->request->getVar('isi_artikel'),
                'last_update' => date('y-m-d'),
                'status' => $this->request->getVar('tipe_artikel'),
                'slug' => $slug
            ]);
        } else { //kalo foto ga di-update
            $this->artikelModel->save([
                'id_artikel' => $id,
                'judul_artikel' => $this->request->getVar('judul_artikel'),
                'isi_artikel' => $this->request->getVar('isi_artikel'),
                'last_update' => date('y-m-d'),
                'status' => $this->request->getVar('tipe_artikel'),
                'slug' => $slug
            ]);
        }

        return redirect()->to('/admin/dashboard');
    }
}
