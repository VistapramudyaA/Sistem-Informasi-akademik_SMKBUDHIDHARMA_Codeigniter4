<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelGuru;
use App\Models\ModelJurusan;

class Guru extends BaseController
{
    protected $ModelGuru;
    protected $ModelJurusan;

    public function __construct()
    {
        $this->ModelGuru = new ModelGuru();
        $this->ModelJurusan = new ModelJurusan();
    }

    public function index()
    {
        $data = [
            'judul' => 'Guru',
            'subjudul' => 'Data Guru',
            'page' => 'Guru/v_t_guru',
            'level' => session()->get('level'),
            'guru' => $this->ModelGuru->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function Tambah()
    {
        $data = [
            'judul' => 'Guru',
            'subjudul' => 'Tambah Guru',
            'page' => 'Guru/v_tambah',
            'jurusan' => $this->ModelJurusan->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function Edit($id_guru)
    {
        $data = [
            'judul' => 'Guru',
            'subjudul' => 'Edit Guru',
            'page' => 'Guru/v_edit',
            'guru' => $this->ModelGuru->DetailData($id_guru),
            'jurusan' => $this->ModelJurusan->AllData(),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function View($id_guru)
    {
        $data = [
            'judul' => 'Detail Guru',
            'page' => 'Guru/v_view',
            'guru' => $this->ModelGuru->DetailData($id_guru),
        ];

        return view('Frontend/v_halaman_admin', $data);
    }

    public function TambahData()
    {
        
        $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $foto_guru = $this->request->getFile('foto_guru');

        if ($foto_guru->isValid() && !$foto_guru->hasMoved()) {
            $randomName = $foto_guru->getRandomName();
            $foto_guru->move('fotoguru', $randomName);

            $data = [
                'kode_guru' => $this->request->getPost('kode_guru'),
                'nip' => $this->request->getPost('nip'),
                'nama_guru' => $this->request->getPost('nama_guru'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'jenis_kel' => $this->request->getPost('jenis_kel'),
                'telp_guru' => $this->request->getPost('telp_guru'),
                'pendidikan' => $this->request->getPost('pendidikan'),
                'id_jurusan' => $this->request->getPost('jurusan'),
                'password' => $hashedPassword,
                'level' => $this->request->getPost('level'),
                'foto_guru' => $randomName,
            ];

            $this->ModelGuru->tambahData($data);

            session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
        }

        return redirect()->to(base_url('Guru'));
    }

    public function UbahData($id_guru)
    {      
        $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $guru = $this->ModelGuru->DetailData($id_guru);

        $data = [
            'id_guru' => $id_guru,
            'kode_guru' => $this->request->getPost('kode_guru'),
            'nip' => $this->request->getPost('nip'),
            'nama_guru' => $this->request->getPost('nama_guru'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jenis_kel' => $this->request->getPost('jenis_kel'),
            'telp_guru' => $this->request->getPost('telp_guru'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'id_jurusan' => $this->request->getPost('jurusan'),
            'password' => $hashedPassword,
            'level' => $this->request->getPost('level'),
        ];
        $foto_guru = $this->request->getFile('foto_guru');

        if ($this->request->getFile('foto_guru')->getError() != 4) {
            if ($guru['foto_guru'] != "") {
                unlink('fotoguru/' . $guru['foto_guru']);
            }

            $data['foto_guru'] = $foto_guru->getRandomName();
            $foto_guru->move('fotoguru', $data['foto_guru']);
        }

        $this->ModelGuru->ubahData($id_guru, $data);
        session()->setFlashdata('ubah', 'Data Berhasil Diubah');
        return redirect()->to(base_url('Guru'));
    }

    public function HapusData($id_guru)
    {
        $guru = $this->ModelGuru->DetailData($id_guru);
        if ($guru['foto_guru'] != "") {
            unlink('fotoguru/' . $guru['foto_guru']);
        }

        $this->ModelGuru->hapusData($id_guru);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('Guru'));
    }
}