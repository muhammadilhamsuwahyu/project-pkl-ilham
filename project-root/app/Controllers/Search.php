<?php

namespace App\Controllers;
use App\Models\RegionSelectModel;
use App\Models\Jenis_perizinanModel;
use App\Models\Tabel_perizinanModel;


class Search extends BaseController
{
    protected $Jenis_perizinanModel;
    protected $Tabel_perizinanModel;
    protected $RegionSelectModel;
    public function __construct()
    {
        $this->Jenis_perizinanModel = new Jenis_perizinanModel();
        $this->Tabel_perizinanModel = new Tabel_perizinanModel();
        $this->RegionSelectModel = new RegionSelectModel();

    }
    public function index()
    {
        $izin = $this->Jenis_perizinanModel->findAll();
        $dataperizinan = $this->Tabel_perizinanModel->getAll();
        $data = [
            'izin'=> $izin,
            'dataperizinan'=>$dataperizinan
        ];
        echo view('search',$data);
    }
}
