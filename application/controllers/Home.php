<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
    [12/1, 12:52 PM] Rezi A: Home Page

    Home berisi perkenalan/portofolio perusahaan
    Fitur sustain, dapat berupa list gambar
    Untuk Setiap card atau section pada home page, disematkan link sehingga clickable dan akan direct ke halaman/menu lain
    Tema warna gradasi dari abu, hitam, putih
    [12/1, 12:52 PM] Rezi A: Daftar Proyek (sedang berjalan & sudah selesai)
    Selain menampilkan judul, Daftar Proyek berisikan lokasi, bulan/tahun
    Berisi detail proyek, gambar, konsep
    inspirasi foto diganti “image reference”
    Data penunjang tidak perlu

    Cara Kerja (nama perusahaan)
*/
class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['content'] = 'home/home';
        $this->data['title'] = 'Home | '.$this->title;
        $this->template($this->data ,'home');
    }

    public function about()
    {
        $this->data['content'] = 'home/about';
        $this->data['title'] = 'About | '.$this->title;
        $this->template($this->data , 'home');
    }

    public function projects()
    {
        $this->data['content'] = 'home/projects';
        $this->data['title'] = 'Himbauan | '.$this->title;
        $this->template($this->data , 'home');
    }

    public function projects_details()
    {
        $id = $this->uri->segment(3);
        $this->data['content'] = 'home/projects_detail';
        $this->data['title'] = 'Himbauan | '.$this->title;
        $this->template($this->data , 'home');
    }
}
