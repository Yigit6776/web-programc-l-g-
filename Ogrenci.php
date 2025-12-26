<?php

namespace App\Controllers;

use App\Models\OgrenciModel;

class Ogrenci extends BaseController
{
    public function index()
    {
        return view('ogrenci_form');
    }

public function kaydet()
{
    $saat = $this->request->getPost('vize'); // SAAT
    $gun  = $this->request->getPost('ders'); // Gün

    $model = new \App\Models\OgrenciModel();

    $model->insert([
        'ogrenci_adi' => $this->request->getPost('ogrenci_adi'),
        'ders'        => $gun,
        'vize'        => $saat,     // 🔥 SAAT BURADA
        'final'       => 0,
        'ortalama'    => 0,
        'harf_notu'   => 'FF'
    ]);

    return redirect()->to(site_url('ogrenci/liste'));
}





public function liste()
{
    $model = new OgrenciModel();
    $data['ogrenciler'] = $model->findAll();

    return view('liste', $data);
}






public function sil($id)
{
    $model = new \App\Models\OgrenciModel();
    $model->delete($id);

    return redirect()->to(site_url('ogrenci/liste'));
}

}
