<?php

class Blog3 extends CI_Controller{

    public function index()
    {
        $data['blogs'] = [
            [
                'title' => 'Artikel Pertama',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Aliquam lectus justo, vestibulum id libero eget, laoreet sodales diam. 
                In vel tristique nisl. Donec vel lorem odio. Nullam condimentum sapien id imperdiet eleifend. 
                Curabitur lacinia auctor erat, et faucibus sapien scelerisque quis. 
                Duis viverra augue nibh, non ullamcorper sem sollicitudin non. 
                Vestibulum congue aliquet risus, sit amet efficitur magna mattis ut. 
                Sed tincidunt ante at congue aliquet. Vestibulum fermentum posuere varius.</p>'
            ],
            [
                'title' => 'Artikel Kedua',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Aliquam lectus justo, vestibulum id libero eget, laoreet sodales diam. 
                In vel tristique nisl. Donec vel lorem odio. Nullam condimentum sapien id imperdiet eleifend. 
                Curabitur lacinia auctor erat, et faucibus sapien scelerisque quis. 
                Duis viverra augue nibh, non ullamcorper sem sollicitudin non. 
                Vestibulum congue aliquet risus, sit amet efficitur magna mattis ut. 
                Sed tincidunt ante at congue aliquet. Vestibulum fermentum posuere varius.</p>'
            ],
            [
                'title' => 'Artikel Ketiga',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Aliquam lectus justo, vestibulum id libero eget, laoreet sodales diam. 
                In vel tristique nisl. Donec vel lorem odio. Nullam condimentum sapien id imperdiet eleifend. 
                Curabitur lacinia auctor erat, et faucibus sapien scelerisque quis. 
                Duis viverra augue nibh, non ullamcorper sem sollicitudin non. 
                Vestibulum congue aliquet risus, sit amet efficitur magna mattis ut. 
                Sed tincidunt ante at congue aliquet. Vestibulum fermentum posuere varius.</p>'
            ],


        ];

        $this->load->view('blog',$data);
    }

}