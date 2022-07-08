<?php
class Home extends CI_Controller{
    public function index(){
        // Merender method atau property yang ada di dalam object view
        $this->load->view('home/index');
    }
}
?>