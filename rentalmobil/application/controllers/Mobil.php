<?php
class Mobil extends CI_Controller{
    // Membuat method index
    public function index(){
    // Akses model mobil
    $this->load->model('mobil_model');
    $mobil = $this->mobil_model->getAll();
    $data['mobil'] = $mobil;
    $this->load->view('layouts/header');
    $this->load->view('mobil/index', $data);
    $this->load->view('layouts/footer');
    }

    public function detail($id){
        // Akses model mobil
        $this->load->model('mobil_model');
        $mbl = $this->mobil_model->getById($id);
        $data['mbl'] = $mbl;
        $this->load->view('layouts/header');
        $this->load->view('mobil/detail', $data);
        $this->load->view('layouts/footer');
    }

    public function form(){
        // render view
        $this->load->view('layouts/header');
        $this->load->view('mobil/form');
        $this->load->view('layouts/footer');    
    }

    public function save(){
        // akses ke model mobil
        $this->load->model('mobil_model', 'mobil');//1
        $_nopol = $this->input->post('nopol');
        $_warna = $this->input->post('warna');
        $_biaya_sewa = $this->input->post('biaya_sewa');
        $_deskripsi = $this->input->post('deskripsi');
        $_cc = $this->input->post('cc');
        $_tahun = $this->input->post('tahun');
        $_merk_id = $this->input->post('merk_id');

        $data_mobil['nopol'] = $_nopol; //2
        $data_mobil['warna'] = $_warna;
        $data_mobil['biaya_sewa'] = $_biaya_sewa;
        $data_mobil['deskripsi'] = $_deskripsi;
        $data_mobil['cc'] = $_cc;
        $data_mobil['tahun'] = $_tahun;
        $data_mobil['merk_id'] = $_merk_id;

        if ((!empty($_idedit))){ // update
            $data_mobil['id'] = $_idedit;
            $this->mobil->update($data_mobil);
        }else{
            // data baru
            $this->mobil->simpan($data_mobil);
        }
        redirect('mobil', 'refresh');
    }

    public function edit($id){
        // akses model mobil
        $this->load->model('mobil_model', 'mobil');
        $obj_mobil = $this->mobil->getById($id);
        $data['obj_mobil'] = $obj_mobil;
        $this->load->view('layouts/header');
        $this->load->view('mobil/edit', $data);
        $this->load->view('layouts/footer');
    }

    public function delete($id){
        $this->load->model('mobil_model', 'mobil');
        // Mengecek data mobil berdasarkan id
        $data_mobil['id'] = $id;
        $this->mobil->delete($data_mobil);
        redirect('mobil', 'refresh');
    }

    public function upload(){
        $_idmobil=$this->input->post("idmobil");
        $this->load->model('mobil_model', 'mobil');
        $mbl = $this->mobil->getById($_idmobil);
        $data['mbl']=$mbl;

        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2894;
        $config['max_widht'] = 2894;
        $config['max_height'] = 2894;
        $config['file_name'] = $mbl->id;

        // Menginisialisasi file upload (memeriksa)
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $data['error'] = 'data sukses';
            $data['upload_data'] = $this->upload->data();
        }
        // Kirim dan render ke detail
        $this->load->view('layouts/header');
        $this->load->view('mobil/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>