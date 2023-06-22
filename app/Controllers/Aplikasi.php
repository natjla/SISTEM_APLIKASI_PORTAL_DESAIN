<?php

namespace App\Controllers;

use App\Models\DesainModel;
use App\Models\DesainDataModel;
use App\Models\AnggotaModel;

class Aplikasi extends BaseController
{
    protected $desainModel;
    protected $desainDataModel;
    protected $anggotaModel;

    public function __construct()
    {
        $this->desainModel = new DesainModel();
        $this->desainDataModel = new DesainDataModel();
        $this->anggotaModel = new AnggotaModel();
    }

    public function index()
    {
        $item = $this->desainModel->where('status', '0')->findAll();

        $member = $this->anggotaModel->where('status', '0')->first();

        $data = [
            'title' => 'Home',
            'active' => 'Home',
            'item' => $item,
            'member' => $member,
        ];

        echo view('fe/v_header.php', $data);
        echo view('fe/v_home.php', $data);
        echo view('fe/v_footer.php', $data);
    }

    public function cari()
    {
        $data = [
            'title' => 'Home',
            'active' => 'Home',
        ];

        echo view('fe/v_header.php', $data);
        echo view('fe/v_cari.php', $data);
        echo view('fe/v_footer.php', $data);
    }

    public function ajaxcari()
    {
        $id = $this->request->getGet('id');

        $data = [
            'dt_hasil' => $this->desainModel->search($id),
        ];

        echo view('fe/v_ajax_cari.php', $data);
    }

    public function desain()
    {
        $item = $this->desainModel->where('status', '0')->findAll();

        $data = [
            'title' => 'Desain',
            'active' => 'Desain',
            'item' => $item,
        ];

        echo view('fe/v_header.php', $data);
        echo view('fe/v_desain.php', $data);
        echo view('fe/v_footer.php', $data);
    }

    public function desaindata()
    {
        $lastUrl = $this->request->uri->getPath();
        $parts = explode('=', $lastUrl);
        $id = $parts[1];

        $item = $this->desainDataModel->where('status', '0')->where('kunci', $id)->findAll();

        $desain = $this->desainDataModel->where('status', '0')->where('kunci', $id)->first();

        $data = [
            'title' => 'Desain',
            'active' => $desain['nama'],
            'item' => $item,
        ];

        echo view('fe/v_header.php', $data);
        echo view('fe/v_desain_data.php', $data);
        echo view('fe/v_footer.php', $data);
    }

    public function anggota()
    {

        $item = $this->anggotaModel->where('status', '0')->findAll();

        $data = [
            'title' => 'Anggota',
            'active' => 'Anggota',
            'item' => $item,
        ];

        echo view('fe/v_header.php', $data);
        echo view('fe/v_anggota.php', $data);
        echo view('fe/v_footer.php', $data);
    }
}
