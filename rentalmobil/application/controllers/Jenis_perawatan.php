<?php
class Jenis_perawatan extends CI_Controller{
    public function index(){
        // load model
        $this->load->model('jenis_perawatan_model');
        $jenis_perawatan = $this->jenis_perawatan_model->getAll();
        $data['jenis_perawatan'] = $jenis_perawatan;
        // render view
        $this->load->view('layouts/header');
        $this->load->view('jenis_perawatan/index', $data);
        $this->load->view('layouts/footer');
    }
    public function form(){
        // render view
        $this->load->view('layouts/header');
        $this->load->view('jenis_perawatan/form');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model 
        $this->load->model('jenis_perawatan_model', 'jenis_perawatan'); // 1
        $_nama = $this->input->post('nama');

        $data_jenis_perawatan['nama'] = $_nama; // 2

        if((!empty($_idedit))){ //update
            $data_jenis_perawatan['id'] = $_idedit;
            $this->jenis_perawatan->update($data_jenis_perawatan);
        }else{
            //  data baru
            $this->jenis_perawatan->simpan($data_jenis_perawatan);
        }
        redirect('jenis_perawatan','refresh');
    }
    public function edit($id){
        // akses model 
        $this->load->model('jenis_perawatan_model','jenis_perawatan');
        $obj_jenis_perawatan = $this->jenis_perawatan->getById($id);
        $data['obj_jenis_perawatan'] = $obj_jenis_perawatan;
        $this->load->view('layouts/header');
        $this->load->view('jenis_perawatan/edit', $data);
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('jenis_perawatan_model','jenis_perawatan');
        // Mengecek data berdasarkan id
        $data_jenis_perawatan['id'] = $id;
        $this->jenis_perawatan->delete($data_jenis_perawatan);
        redirect('jenis_perawatan','refresh');
    }
}
?>