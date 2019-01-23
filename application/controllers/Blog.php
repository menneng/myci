<?php

class Blog extends CI_Controller{

    public function __construct()
    {
        parent:: __construct();
        

        #dipindah ke config/autoload
            #$this->load->database();
            #$this->load->helper('url');
            #$this->load->helper('form');

        $this->load->model('Blog_model');
    }


    public function index()
    {
        $this->load->library('pagination');
        
        #dipindah ke constructor
        #$this->load->database();

        #$query = $this->db->query("SELECT * FROM blog");
        
        #$query = $this->db->get("blog"); dipindah ke model
        $query = $this->Blog_model->getBlogs();


        #jika pakai object maka nulisnya:
        # $data['blogs'] =$query->result();
        $data['blogs'] =$query->result_array();

    
        //print_r($data);
        $this->load->view('blog',$data);
    }

    public function detail($url)
    {
        #dipindah ke constructor
        #$this->load->database();

        #$query = $this->db->query(SELECT * FROM blog WHERE url = "'.$url.'" ');
        #$this->db->where('url',$url);
        #$query = $this->db->get("blog");
        
        $query = $this->Blog_model->getSingleBlog('url',$url);
        $data['blog']=$query->row_array();

        $this->load->view('detail',$data);

    }

    public function add()
    {
        //cara lama
        //if(isset($_POST['title'])){
        //$data['title']=$_POST['title'];
        //$data['content']=$_POST['content'];
        //}

        $this->form_validation->set_rules('title','Judul','required');
        $this->form_validation->set_rules('url','Url','required|alpha_dash');
        $this->form_validation->set_rules('content','Konten','required');


        //if($this->input->post()){
        if($this->form_validation->run()===TRUE){
        #cara baru, cara codeigniter
        $data['title']=$this->input->post('title');
        $data['content']=$this->input->post('content');
        $data['url']=$this->input->post('url');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 500;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload('cover'))
                {
                    echo $this->upload->display_errors();
                }
                else
                {
                    $data['cover'] = $this->upload->data()['file_name'];
                }
        
        $id=$this->Blog_model->insertBlog($data);
        
        if($id){
            echo "Data berhasil disimpan";
            redirect('/');
        }
        else
            echo "Data gagal disimpan";
        }

        $this->load->view('form_add');
    }

    public function edit($id)
    {

        $query = $this->Blog_model->getSingleBlog('id',$id);
        $data['blog'] = $query->row_array();

        if($this->form_validation->run()===TRUE){
        #if($this->input->post()){
            #cara baru, cara codeigniter
            $post['title']=$this->input->post('title');
            $post['content']=$this->input->post('content');
            $post['url']=$this->input->post('url');
    
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 500;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
    
            $this->load->library('upload', $config);
            $this->upload->do_upload('cover');

            if (!empty($this->upload->data()['filename']))
                    {
                        $post['cover'] = $this->upload->data()['file_name'];
                    }

            $id=$this->Blog_model->updateBlog($id,$post);
            
            if($id){
                echo "Data berhasil diupdate";
                redirect('/');
            }
            else
                echo "Data gagal diupdate";
            }


        $this->load->view('form_edit',$data);
    }

    public function delete($id)
    {

        $this-> Blog_model->deleteBlog($id);
        
        redirect('/');
    }
}

?>