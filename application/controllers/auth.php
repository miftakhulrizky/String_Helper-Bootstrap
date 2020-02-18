<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function registration()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/registration');
        $this->load->view('templates/auth_footer');
    }

    public function post()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $pass_md5 = md5($this->input->post('password'));
        $pass_SHA1 = sha1($this->input->post('password'));
        echo "Email : $email <br>";
        echo "Password (Plain Text) : $pass <br>";
        echo "Password ( md5 ) : $pass_md5 <br>";
        echo "Password ( SHA1 ) : $pass_SHA1 <br>";
    }
}

