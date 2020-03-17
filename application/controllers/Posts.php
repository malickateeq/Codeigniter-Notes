<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        
        // Only logged in users can access this controller
        if(!$this->session->userdata('logged_in'))
        {
            redirect('users/login');
        }
    }
    public function index()
    {
        $data['title'] = 'Latest Posts';

        $data['posts'] = $this->post_model->get_posts();

        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = null)
    {
        $data['post'] = $this->post_model->get_posts($slug);
        if(empty($data['post']))
        {
            show_404();
        }
        $data['title'] = $data['post']['title'];
        
        $this->load->view('templates/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['title'] = 'Create Post';

        // Form validation rules
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');

        if($this->form_validation->run() === FALSE) // If form not submitted
        {
            $this->load->view('templates/header');
            $this->load->view('posts/create', $data);
            $this->load->view('templates/footer');
        }
        else // when form submitted
        {
            // Validation passed
            $this->post_model->create_post();
            
            // Set message
            $this->session->set_flashdata('post_created', 'Post created successfully.');

            redirect('posts');

        }
        
    }

    public function delete($id)
    {
        $this->post_model->delete_post($id);
        redirect('posts');
    }

    public function edit($slug)
    {
        $data['post'] = $this->post_model->get_posts($slug);
        if(empty($data['post']))
        {
            show_404();
        }
        $data['title'] = 'Edit Post';
        
        $this->load->view('templates/header');
        $this->load->view('posts/edit', $data);
        $this->load->view('templates/footer');

        // $this->post_model->edit_post($id);
        // redirect('posts');
    }

    public function update()
    {
        $this->post_model->update_post();
        redirect('posts');
    }
}
