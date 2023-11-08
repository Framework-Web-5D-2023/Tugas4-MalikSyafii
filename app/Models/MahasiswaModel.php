<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
  protected $table      = 'mahasiswa';
  protected $primaryKey = 'id';
  protected $protectFields = false;
  public function getAllMahasiswa()
  {
    return $this->findAll();
  }
  public function create($data)
  {
    return $this->insert($data);
  }
}
