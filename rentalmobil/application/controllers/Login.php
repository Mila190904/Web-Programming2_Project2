<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
    public function index(){
        $data = [];
        $this->load->view('frontend/header');
        $this->load->view('login/index',$data);
        $this->load->view('frontend/footer');
    }
    public function auth(){
        $this->load->model('users_model','users');
        // $username = $this->input->post('username');
        // $password = $this->input->post('password');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->users->login($_username,$_password);
        if(isset($row)){
            $this->session->set_userdata('USERNAME',$row->username);
            $this->session->set_userdata('ROLE',$row->role);
            $this->session->set_userdata('USER',$row);
            redirect('/sewa/form');
        }else{
            redirect(base_url().'index.php/login?status=f');
        }

    //     if ($username == 'admin' && $password == 'admin') {
    //         $userdata = [
    //             "username" =>$username,
    //             "logged_in" =>TRUE,
    //         ];
    //         $this->session->set_userdata($userdata);
    //         redirect('/users');
    //         redirect('/mobil');
    //         redirect('/merk');
    //         redirect('/perawatan');
    //         redirect('/jenis_perawatan');
    //         redirect('/sewa');
    //     } elseif ($username == '' && $password == '') {
    //         $userdata = [
    //             "username" =>$username,
    //         ];
    //         $this->session->set_userdata($userdata);
    //         redirect('/sewa');
    //     } else {
    //         redirect('/login');
    //     }
        
    }
    public function logout(){
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USER');
        redirect(base_url().'index.php/login');
    }
}
?>