<?php

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('gz');
        $this->module = 'register';
        $this->data['username'] = $this->session->userdata('username');
        $this->data['role'] = $this->session->userdata('role');

        if ($this->data['username']) {
            switch ($this->data['role']) {
                case 1:
                    redirect('admin');
                    exit;
                case 2:
                    redirect('peserta');
                    exit;
                default:
                    redirect('admin');
                    exit;
            }
        }

        $this->data['token'] = $this->session->userdata('token');
        if (isset($this->data['token']))
        {
            redirect('payment');
            exit;
        }
    }

    public function index()
    {
        redirect('login/customer');
        if ($this->POST('login')) {
            $this->load->model('User_m');
            $username = $this->POST('username');
            $password = md5($this->POST('password'));
            $this->data['peserta'] = $this->User_m->get_row(['username' => $username, 'password' => $password]);
            if ($this->data['peserta']) {
                $this->session->set_userdata(['username' => $this->data['peserta']->username, 'role' => $this->data['peserta']->id_role]);
                redirect('login');
                exit;
            }

            $this->flashmsg('Username atau password yang anda masukkan salah', 'danger');
            redirect('login');
        }
        $this->data['title'] = 'Pendaftaran';
        $this->data['content'] = 'login';
        $this->template($this->data, $this->module);
    }

    public function admin()
    {
        if ($this->POST('login')) {
            $this->load->model('User_m');
            $username = $this->POST('username');
            $password = md5($this->POST('password'));
            $this->data['peserta'] = $this->User_m->get_row(['username' => $username, 'password' => $password]);
            if ($this->data['peserta']) {
                $this->session->set_userdata(['username' => $this->data['peserta']->username, 'role' => $this->data['peserta']->id_role]);
                redirect('login');
                exit;
            }

            $this->flashmsg('Username atau password yang anda masukkan salah', 'danger');
            redirect('login');
        }
        $this->data['title'] = 'Login Admin';
        $this->data['content'] = 'login_admin';
        $this->template($this->data, $this->module);
    }

    public function customer()
    {
        if ($this->POST('login')) {
            $username = $this->POST('username');
            $pw = $this->POST('pw');
            $this->data = [
                'username' => $username,
                'password' => $pw
            ];
            $response = json_decode($this->gz->POST('auth', $this->data));
           
            if ($response->status === 'Request Success') {
                $this->session->set_userdata(['token' => $response->token]);
                $this->flashmsg($response->message, 'success');

                redirect('payment');
                exit;
            }

            $this->flashmsg($response->message, 'danger');
        }
        $this->data['title'] = 'Login';
        $this->data['content'] = 'login';
        $this->template($this->data, 'payment');
    }
}
