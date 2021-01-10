<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_penduduk extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //cek login
        if (!$this->session->userdata($this->session->nama_user) == '') {
            redirect(base_url());
        }
        $this->load->model('admin/M_penduduk', 'penduduk');
        $this->penduduk->upk = $this->session->userdata('UPK');
    }

    public function list()
    {
        $data = array(
            'title'  => 'List penduduk',
            'menu'   => 'penduduk',
            'script' => 'penduduk',
            'konten' => 'admin/penduduk/list'
        );
        $this->load->view('admin/templates/templates', $data, FALSE);
    }

    function data()
    {
        error_reporting(0);
        $list = $this->penduduk->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $idNa = $this->req->acak($field->id);
            // $idNa = $field->id;
            $status = ($field->status) == '1' ? "<button class='btn btn-success btn-sm' id='on' data-id='$idNa' title='User Aktif'><i class='fas fa-toggle-on' ></i> On</button>" : "<button class='btn btn-danger btn-sm' id='off' data-id='$idNa' title='User Tidak Aktif'><i class='fas fa-toggle-off'></i> Off</button>";

            $button = "
                <button class='btn btn-danger btn-sm' id='delete' data-id='$idNa' title='Hapus Data'><i class='fas fa-trash-alt'></i></button>
                <a href='penduduk/edit/$idNa' class='btn btn-warning btn-sm' id='edit' data-id='$idNa' title='Edit data'><i class='fas fa-pencil-alt'></i></a>
            ";
            $jk = ($field->jk == 1) ? "Laki-laki" : "Perempuan" ;

            $no++;
            $row = array();
            // $row[] = "<input type='checkbox' id='pilihGan-$idNa' value='$idNa'></input>";
            $row[] = $no;
            $row[] = $field->warga;
            $row[] = $field->nama_lengkap;
            $row[] = $jk;
            $row[] = $field->nama_pekerjaan;
            $row[] = $field->nama_pendidikan;
            $row[] = $field->nama_agama;
            $row[] = $button;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->penduduk->count_all(),
            "recordsFiltered" => $this->penduduk->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
    }

    public function edit($id)
    {
        // $dataNa = $this->db->get_where('t_penduduk', [$this->req->id($id) => $id])->row();
        $dataNa = $this->penduduk->get($id);
        $agama = $this->db->get('t_agama')->result();
        $pendidikan = $this->db->get('t_pendidikan')->result();
        $pekerjaan = $this->db->get('t_pekerjaan')->result();
        $pernikahan = $this->db->get('t_pernikahan')->result();

        // $this->req->print($dataNa);

        $data = array(
            'title'      => 'Edit Data Penduduk',
            'data'       => $dataNa,
            'agama'      => $agama,
            'pendidikan' => $pendidikan,
            'pekerjaan'  => $pekerjaan,
            'pernikahan' => $pernikahan,
            'konten'     => 'admin/penduduk/edit' 
        );

        $this->load->view('admin/templates/templates', $data, FALSE);
        

    }

    function get($id)
    {
        $data = $this->penduduk->get($id);
        foreach ($data as $key => $value) {
            if (strtolower($key) == 'id') {
                $data->$key = $this->req->acak($value);
            }
        }
        echo json_encode($data);
    }

    public function tambah()
    {
     
        $agama = $this->db->get('t_agama')->result();
        $pendidikan = $this->db->get('t_pendidikan')->result();
        $pekerjaan = $this->db->get('t_pekerjaan')->result();
        $pernikahan = $this->db->get('t_pernikahan')->result();
        

        $data = array(
            'title'         => 'Tambah penduduk',
            'menu'          => 'penduduk',
            'agama'         => $agama,
            'pendidikan'    => $pendidikan,
            'pekerjaan'     => $pekerjaan,
            'pernikahan'    => $pernikahan,
            'script'        => 'penduduk',
            'konten'        => 'admin/penduduk/tambah'
        );
        $this->load->view('admin/templates/templates', $data, FALSE);
    }

    function insert()
    {
        $data = $this->req->all();
        if ($this->penduduk->insert($data) == true) {
            $this->session->set_flashdata('success', 'Berhasil Menambahkan data');
            redirect('admin/penduduk');
        } else {
            $this->session->set_flashdata('failed', 'Terjadi kesalahan saat menambahkan data silakan hubungi administrator');
            redirect('admin/penduduk/tambah');   
        }
    }

    function update($id)
    {
        
        $data = $this->req->all();
        if ($this->penduduk->update($data, $id ) == true) {
            $this->session->set_flashdata('success', 'Berhasil Mengubah data');
            redirect('admin/penduduk');
        } else {
            $this->session->set_flashdata('failed', 'Tidak ada data yang diubah');
            redirect('admin/penduduk');
        }
        // echo $this->db->last_query();
        
        echo json_encode($msg);
    }

    function delete($id)
    {
        if ($this->penduduk->delete($this->req->id($id)) == true) {
            $msg = array(
                'status' => 'ok',
                'msg' => 'Berhasil menghapus data !'
            );
        } else {
            $msg = array(
                'status' => 'fail',
                'msg' => 'Gagal menghapus data !'
            );
        }
        echo json_encode($msg);
    }

    function set($id, $action)
    {
        if ($action == 'on') {
            if ($this->penduduk->update(['status' => '1'], $this->req->id($id)) == true) {
                $msg = array(
                    'status' => 'ok',
                    'msg' => 'Berhasil Mengaktifkan Data !'
                );
            } else {
                $msg = array(
                    'status' => 'fail',
                    'msg' => 'Gagal Mengaktifkan data !'
                );
            }
            echo json_encode($msg);
        } elseif ($action == 'off') {
            if ($this->penduduk->update(['status' => '0'], $this->req->id($id)) == true) {
                $msg = array(
                    'status' => 'ok',
                    'msg' => 'Berhasil Me-nonaktifkan Data !'
                );
            } else {
            }
            // echo $this->db->last_query();;
            echo json_encode($msg);
        }
    }



    // multiple select off data
    function allOff()
    {
        $idNa = explode(",", $this->req->input("id"));
        $total = count($idNa) - 1;
        $jmlNa = 0;
        foreach ($idNa as $id) {
            if ($id != "") {
                if ($this->penduduk->update(['status' => 0], $this->req->id($id)) == true) $jmlNa++;
            }
        }
        if ($jmlNa > 0) {
            echo json_encode([
                "status" => "ok",
                "msg" => "Berhasil Me-nontaktifkan $jmlNa dari $total Akun"
            ]);
        } else {
            echo json_encode([
                "status" => "fail",
                "msg" => "Tidak ada data yg berubah !"
            ]);
        }
    }

    // multiple select on data
    function allOn()
    {
        $idNa = explode(",", $this->req->input("id"));
        $total = count($idNa) - 1;
        $jmlNa = 0;
        foreach ($idNa as $id) {
            if ($id != "") {
                if ($this->penduduk->update(['status' => 1], $this->req->id($id)) == true) $jmlNa++;
            }
        }
        if ($jmlNa > 0) {
            echo json_encode([
                "status" => "ok",
                "msg" => "Berhasil Mengaktifkan $jmlNa dari $total Akun"
            ]);
        } else {
            echo json_encode([
                "status" => "fail",
                "msg" => "Tidak ada data yg berubah !"
            ]);
        }
    }

    // multiple select delete data
    function allDelete()
    {
        $idNa = explode(",", $this->req->input("id"));
        $total = count($idNa) - 1;
        $jmlNa = 0;
        foreach ($idNa as $id) {
            if ($id != "") {
                if ($this->penduduk->delete($this->req->id($id)) == true) $jmlNa++;
            }
        }
        if ($jmlNa > 0) {
            echo json_encode([
                "status" => "ok",
                "msg" => "Berhasil Mengaktifkan $jmlNa dari $total Akun"
            ]);
        } else {
            echo json_encode([
                "status" => "fail",
                "msg" => "Tidak ada data yg berubah !"
            ]);
        }
    }
}
