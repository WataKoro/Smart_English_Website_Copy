<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Test\CIUnitTestCase;
use App\Models\ArtikelModel;
use App\Controllers\Admin_Artikel;

class ArtikelTest extends CIUnitTestCase
{
    public $artikelModel;

    public function testCreate()
    {
        $this->artikelModel = new ArtikelModel();
        $angka = rand(10, 100);
        date_default_timezone_set("Asia/Jakarta");

        $slug = url_title('test', '-', true);
        $result = $this->artikelModel->save([
            'judul_artikel' => 'test artikel',
            'isi_artikel' => 'isi_artikel',
            'last_update' => date('y-m-d'),
            'jml_tayang' => $angka,
            'status' => 'tipe_artikel',
            'slug' => $slug
        ]);
        $this->assertTrue($result);
    }
}