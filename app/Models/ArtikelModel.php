<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table      = 'tartikel';
    protected $primaryKey = 'id_artikel';
    protected $allowedFields = ['id_artikel', 'foto_artikel', 'judul_artikel', 'isi_artikel', 'slug', 'last_update', 'jml_tayang', 'status'];

    public function getArtikel($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_artikel' => $id])->first();
    }
}
