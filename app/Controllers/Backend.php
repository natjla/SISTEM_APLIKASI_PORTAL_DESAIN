<?php

namespace App\Controllers;

use App\Models\DesainModel;
use App\Models\DesainDataModel;
use App\Models\AdminModel;
use App\Models\anggotaModel;

class Backend extends BaseController
{
    protected $desainModel;
    protected $desainDataModel;
    protected $adminModel;
    protected $anggotaModel;
    protected $session;

    public function __construct()
    {
        $this->desainModel = new DesainModel();
        $this->desainDataModel = new DesainDataModel();
        $this->adminModel = new AdminModel();
        $this->anggotaModel = new anggotaModel();
        $this->session = session();
    }

    public function index()
    {
        echo view('be/v_login.php');
    }

    public function prosesloginbe()
    {

        $user = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        session()->set('user', $user);

        $data = [
            'username' => $user,
            'password' => $password,
        ];

        $rule = [
            'username' => [
                'required',
            ],
            'password' => [
                'required'
            ],
        ];

        // Get user by telp
        $user = $this->adminModel->where('status', '0')->where('username', $user)->first();

        // If the user exists, skip the unique rule
        if ($user) {
            $rule = [
                'username' => 'required',
                'password' => 'required'
            ];
        }

        $errors = null;

        if (!$this->validateData($data, $rule)) {
            $errors = $this->validator->getErrors();
            echo view('/be/v_login.php', [
                'errors' => $errors,
            ]);
        } else {
            return redirect()->to('/dashboard');
        }
    }

    public function dashboard()
    {
        $username = session()->get('user');
        $userData = $this->adminModel->where('status', '0')->where('username', $username)->first();
        if (!empty($userData)) {
            $item = $this->desainModel->where('status', '0')->findAll();

            $jumlah_desain = count($item);

            $data = [
                'title' => 'Dashboard',
                'active' => 'Dashboard',
                'item' => $item,
                'totaldesain' => $jumlah_desain,
                'user' => $userData,
            ];

            echo view('be/v_header.php', $data);
            echo view('be/v_dashboard.php', $data);
            echo view('be/v_footer.php', $data);
        } else {
            echo view('be/v_login.php');
        }
    }

    public function desain()
    {
        $username = session()->get('user');
        $userData = $this->adminModel->where('status', '0')->where('username', $username)->first();
        if (!empty($userData)) {
            $item = $this->desainModel->where('status', '0')->findAll();

            $data = [
                'title' => 'Desain',
                'active' => 'Desain',
                'item' => $item,
                'user' => $userData,
            ];

            echo view('be/v_header.php', $data);
            echo view('be/v_desain.php', $data);
            echo view('be/v_footer.php', $data);
        } else {
            echo view('be/v_login.php');
        }
    }

    public function prosestambahdesain()
    {
        $desain = $this->request->getPost('desain');
        $gambar = $this->request->getFile('gambar');
        $tematext = strtolower((string)$desain);
        $url = str_replace(' ', '-', $tematext);

        $gambarnama = $gambar->getRandomName();

        $gambar->move(ROOTPATH . 'public/uploads/desain', $gambarnama);

        $data = [
            'gambar' => $gambarnama,
            'nama' => $desain,
            'kunci' => $url,
        ];

        $this->desainModel->save($data);

        return redirect()->back();
    }

    public function editdesain()
    {
        $username = session()->get('user');
        $userData = $this->adminModel->where('status', '0')->where('username', $username)->first();
        if (!empty($userData)) {
            $lastUrl = $this->request->uri->getPath();
            $parts = explode('=', $lastUrl);
            $id = $parts[1];

            $item = $this->desainModel->where('status', '0')->where('id', $id)->first();

            $data = [
                'title' => 'Desain',
                'active' => 'Desain',
                'item' => $item,
                'user' => $userData,
            ];

            echo view('be/v_header.php', $data);
            echo view('be/v_desain_edit.php', $data);
            echo view('be/v_footer.php', $data);
        } else {
            echo view('be/v_login.php');
        }
    }

    public function proseseditdesain()
    {
        $lastUrl = $this->request->uri->getPath();
        $parts = explode('=', $lastUrl);
        $id = $parts[1];

        $item = $this->desainModel->where('status', '0')->where('id', $id)->first();
        $oldgambar = $item['gambar'];

        $desain = $this->request->getPost('desain');
        $gambar = $this->request->getFile('gambar');
        $tematext = strtolower((string)$desain);
        $url = str_replace(' ', '-', $tematext);

        if (isset($gambar) && $gambar->isValid()) {
            $gambarnama = $gambar->getRandomName();

            unlink(ROOTPATH . 'public/uploads/desain/' . $oldgambar);

            $gambar->move(ROOTPATH . 'public/uploads/desain', $gambarnama);

            $data = [
                'id' => $id,
                'gambar' => $gambarnama,
                'nama' => $desain,
                'kunci' => $url,
            ];
        } else {
            $data = [
                'id' => $id,
                'gambar' => $oldgambar,
                'nama' => $desain,
                'kunci' => $url,
            ];
        }


        $this->desainModel->save($data);

        return redirect()->to('/be_desain');
    }

    public function hapusdesain()
    {
        $lastUrl = $this->request->uri->getPath();
        $parts = explode('=', $lastUrl);
        $id = $parts[1];

        $item = $this->desainModel->where('status', '0')->where('id', $id)->first();

        $data = [
            'id' => $id,
            'gambar' => $item['gambar'],
            'nama' => $item['nama'],
            'kunci' => $item['kunci'],
            'status' => '1',
            'created_at' => $item['created_at'],
        ];

        $this->desainModel->save($data);

        return redirect()->back();
    }

    public function desaindata()
    {
        $username = session()->get('user');
        $userData = $this->adminModel->where('status', '0')->where('username', $username)->first();
        if (!empty($userData)) {
            $lastUrl = $this->request->uri->getPath();
            $parts = explode('=', $lastUrl);
            $id = $parts[1];

            $item = $this->desainDataModel->where('status', '0')->where('kunci', $id)->findAll();

            $member = $this->anggotaModel->where('status', '0')->findAll();

            $data = [
                'title' => 'Desain Data',
                'active' => 'Desain Data',
                'item' => $item,
                'id' => $id,
                'user' => $userData,
                'member' => $member,
            ];

            echo view('be/v_header.php', $data);
            echo view('be/v_desain_data.php', $data);
            echo view('be/v_footer.php', $data);
        } else {
            echo view('be/v_login.php');
        }
    }

    public function prosesdesaindata()
    {
        $lastUrl = $this->request->uri->getPath();
        $parts = explode('=', $lastUrl);
        $id = $parts[1];

        $gambar = $this->request->getFile('gambar');

        $gambarnama = $gambar->getRandomName();

        $gambar->move(ROOTPATH . 'public/uploads/desain', $gambarnama);

        $data = [
            'nama' => $this->request->getPost('desain'),
            'gambar' => $gambarnama,
            'tentang' => $this->request->getPost('tentang'),
            'karya' => $this->request->getPost('karya'),
            'kunci' => $id,
        ];

        $this->desainDataModel->save($data);

        return redirect()->back();
    }

    public function editdata()
    {
        $username = session()->get('user');
        $userData = $this->adminModel->where('status', '0')->where('username', $username)->first();
        if (!empty($userData)) {
            $lastUrl = $this->request->uri->getPath();
            $parts = explode('=', $lastUrl);
            $id = $parts[1];

            $item = $this->desainDataModel->where('status', '0')->where('id', $id)->first();

            $member = $this->anggotaModel->where('status', '0')->findAll();

            $data = [
                'title' => 'Desain Data',
                'active' => 'Desain Data',
                'item' => $item,
                'id' => $id,
                'user' => $userData,
                'member' => $member,
            ];

            echo view('be/v_header.php', $data);
            echo view('be/v_desain_edit_data.php', $data);
            echo view('be/v_footer.php', $data);
        } else {
            echo view('be/v_login.php');
        }
    }

    public function proseseditdata()
    {
        $lastUrl = $this->request->uri->getPath();
        $parts = explode('=', $lastUrl);
        $id = $parts[1];

        $item = $this->desainDataModel->where('status', '0')->where('id', $id)->first();
        $oldgambar = $item['gambar'];
        $url = $item['kunci'];

        $desain = $this->request->getPost('desain');
        $gambar = $this->request->getFile('gambar');
        $tentang = $this->request->getPost('tentang');
        $karya = $this->request->getPost('karya');

        if (isset($gambar) && $gambar->isValid()) {
            $gambarnama = $gambar->getRandomName();

            unlink(ROOTPATH . 'public/uploads/desain/' . $oldgambar);

            $gambar->move(ROOTPATH . 'public/uploads/desain', $gambarnama);

            $data = [
                'id' => $id,
                'nama' => $desain,
                'gambar' => $gambarnama,
                'tentang' => $tentang,
                'karya' => $karya,
                'kunci' => $url,
            ];
        } else {
            $data = [
                'id' => $id,
                'nama' => $desain,
                'gambar' => $oldgambar,
                'tentang' => $tentang,
                'karya' => $karya,
                'kunci' => $url,
            ];
        }


        $this->desainDataModel->save($data);

        return redirect()->to('/be_desain_data&bagan=' . $url);
    }

    public function hapusdatadesain()
    {
        $lastUrl = $this->request->uri->getPath();
        $parts = explode('=', $lastUrl);
        $id = $parts[1];

        $item = $this->desainDataModel->where('status', '0')->where('id', $id)->first();

        $data = [
            'id' => $id,
            'status' => '1',
        ];

        $this->desainDataModel->save($data);

        return redirect()->back();
    }

    public function anggota()
    {
        $username = session()->get('user');
        $userData = $this->adminModel->where('status', '0')->where('username', $username)->first();
        if (!empty($userData)) {

            $item = $this->anggotaModel->where('status', '0')->findAll();

            $data = [
                'title' => 'Anggota',
                'active' => 'Anggota',
                'item' => $item,
                'user' => $userData,
            ];

            echo view('be/v_header.php', $data);
            echo view('be/v_anggota.php', $data);
            echo view('be/v_footer.php', $data);
        } else {
            echo view('be/v_login.php');
        }
    }

    public function prosestambahanggota()
    {
        $nama = $this->request->getPost('nama');
        $foto = $this->request->getFile('foto');
        $tentang = $this->request->getPost('tentang');

        $gambarnama = $foto->getRandomName();

        $foto->move(ROOTPATH . 'public/uploads/profile', $gambarnama);

        $data = [
            'nama' => $nama,
            'foto' => $gambarnama,
            'tentang' => $tentang,
        ];

        $this->anggotaModel->save($data);

        return redirect()->back();
    }

    public function editanggota()
    {
        $username = session()->get('user');
        $userData = $this->adminModel->where('status', '0')->where('username', $username)->first();
        if (!empty($userData)) {
            $lastUrl = $this->request->uri->getPath();
            $parts = explode('=', $lastUrl);
            $id = $parts[1];

            $item = $this->anggotaModel->where('status', '0')->where('id', $id)->first();

            $data = [
                'title' => 'Edit Anggota',
                'active' => 'Edit Anggota',
                'item' => $item,
                'user' => $userData,
            ];

            echo view('be/v_header.php', $data);
            echo view('be/v_anggota_edit.php', $data);
            echo view('be/v_footer.php', $data);
        } else {
            echo view('be/v_login.php');
        }
    }

    public function proseseditanggota()
    {
        $lastUrl = $this->request->uri->getPath();
        $parts = explode('=', $lastUrl);
        $id = $parts[1];

        $item = $this->anggotaModel->where('status', '0')->where('id', $id)->first();
        $oldgambar = $item['foto'];

        $nama = $this->request->getPost('nama');
        $foto = $this->request->getFile('foto');
        $tentang = $this->request->getPost('tentang');

        if (isset($gambar) && $gambar->isValid()) {
            $gambarnama = $gambar->getRandomName();

            unlink(ROOTPATH . 'public/uploads/profile/' . $oldgambar);

            $gambar->move(ROOTPATH . 'public/uploads/profile', $gambarnama);

            $data = [
                'id' => $id,
                'nama' => $nama,
                'gambar' => $gambarnama,
                'tentang' => $tentang,
            ];
        } else {
            $data = [
                'id' => $id,
                'nama' => $nama,
                'gambar' => $oldgambar,
                'tentang' => $tentang,
            ];
        }


        $this->anggotaModel->save($data);

        return redirect()->to('/be_anggota');
    }

    public function hapusanggota()
    {
        $lastUrl = $this->request->uri->getPath();
        $parts = explode('=', $lastUrl);
        $id = $parts[1];

        $data = [
            'id' => $id,
            'status' => '1',
        ];

        $this->anggotaModel->save($data);

        return redirect()->back();
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}
