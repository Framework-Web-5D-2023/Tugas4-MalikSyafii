<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index(): string
  {
    $mahasiswa = $this->mahasiswaModel->getAllMahasiswa();
    $data = [
      "title" => "Display",
      "mahasiswa" => $mahasiswa
    ];
    //dd($data);
    return view('display', $data);
  }
  public function input(): string
  {
    $data = [
      "title" => "input",
    ];
    return view('input', $data);
  }
  public function create()
  {
    $nama = $this->request->getVar("nama");
    $npm = $this->request->getVar("npm");
    $prodi = $this->request->getVar("prodi");

    $data = [
      "nama" => $nama,
      "npm" => $npm,
      "prodi" => $prodi,
    ];
    $this->mahasiswaModel->create($data);
    return redirect()->to(base_url());
  }
}
