<?php

class Blog2 extends CI_Controller{

    public function index($nama,$goldarah,$alamat)
    {
        $data['nama'] =$nama;
        $data['goldarah'] =$goldarah;
        $data['alamat'] =$alamat;
        $this->load->view('blog',$data);
    }

}