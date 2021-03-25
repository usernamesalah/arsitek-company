<?php
/**
 * summary
 */
class Admin extends MY_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        $this->module = 'admin';
        $this->data['username'] = $this->session->userdata('username');
        $this->data['role'] = $this->session->userdata('role');
        if (!isset($this->data['username']))
        {
            redirect('logout');
            exit;
        }
        if ( $this->data['role'] != 1) {
            redirect('logout');
            exit;
        }
        $this->load->model('Peserta_m');
        $this->load->model('User_m');
        $this->load->library("Tanggal");
    }

    public function index()
    {
        if ($this->POST('simpan')) {
            $password = $this->POST('password');
            $password_lagi = $this->POST('password-confirm');
            if ($password !== $password_lagi)
            {
                $this->flashmsg('Kolom password harus sama dengan kolom password lagi', 'danger');
                redirect('admin');
                exit;
            }
            $this->load->model('User_m');
            $this->User_m->update($this->data['username'] , ['password' => md5($password)]);
            $this->flashmsg('Password Berhasil Diganti', 'success');
                redirect('admin');
                exit;
        }
    	$this->data['title'] = 'Pendaftaran';
    	$this->data['content'] = 'dashboard';
        $this->template($this->data, $this->module);
    }
    
    public function peserta()
    {   
        if($this->GET('delete')){
            $this->load->model('User_m');
            // $data = $this->Peserta_m->get_row(['username' => $this->GET('username')]);
            $this->User_m->delete($this->GET('username'));

            $this->Peserta_m->delete($this->GET('username'));
            redirect('admin/peserta','refresh');
            exit;
        }
        if ($this->POST('delete')) {
            echo $this->POST('username');
            $this->load->model('User_m');
            $this->User_m->delete($this->POST('username'));

            $data = $this->Peserta_m->get_row(['username' => $this->POST('username')]);

            echo $data;exit;
            $this->Peserta_m->delete($data->id);
            echo json_encode('berhasil');
            redirect('admin/peserta','refresh');
            exit;
        }
    	$this->data['peserta']= $this->Peserta_m->get();
    	$this->data['title'] = 'Data Peserta';
    	$this->data['content'] = 'data_peserta';
        $this->template($this->data, $this->module);
    }

    public function detail_peserta()
    {
        $uname = $this->input->get('username');
        $username = str_replace("-", " ", $uname);
        $this->data['data']= $this->Peserta_m->get_row(['username' => $username]);
        $this->data['title'] = 'Detail Peserta';
        $this->data['content'] = 'detail_peserta';
        $this->template($this->data, $this->module);
    }

    public function reset_password()
    {
        $uname = $this->input->get('username');
        $username = str_replace("-", " ", $uname);
        
        $this->User_m->update_where(["username" =>$username] , ['password' => md5("123456")]);
        $this->flashmsg('Password Berhasil Direset menjadi <b>123456</b>', 'success');
        redirect('admin/peserta');
        exit;
    }

    public function tambah_peserta()
    {
        if ($this->POST('simpan')) {
            $data = [
                'username'  => $this->POST('username'),
                'password'  => md5($this->POST('password')),
                'id_role'   => 2
            ];
            $password = $this->POST('password');
            $password_lagi = $this->POST('password-confirm');
            if ($password !== $password_lagi)
            {
                $this->flashmsg('Kolom password harus sama dengan kolom password lagi', 'danger');
                redirect('admin/peserta');
                exit;
            }
            $this->load->model('User_m');
            $this->User_m->insert($data);
            $this->Peserta_m->insert(['username' => $this->POST('username')]);
            $this->flashmsg('Data Berhasil Ditambah', 'success');
            redirect('admin/peserta','refresh');
            exit;
        }
        // $this->data['peserta']= $this->Peserta_m->get();
        $this->data['title'] = 'Data Peserta';
        $this->data['content'] = 'tambah_peserta';
        $this->template($this->data, $this->module);
    }

    public function tes()
    {
        echo 'oke';
        $this->load->model('User_m');
        for ($i = 201; $i <= 300 ; $i++) {
            $this->User_m->insert([
                'username' => $i,
                'password' => md5('123456'),
                'id_role' => 2
            ]);
        }
    }

    public function resend_email()
    {
        $email = $this->GET('email');
        $id= $this->GET('id');

        if (isset($email , $id)) {
                
                
            // Encryption of string process starts 
            $encryption = $this->encrypt_decrypt('encrypt' , $id); 

            $link = base_url("register/download?token=") . $encryption; 
            $emailContent = '<p><b>Terima kasih telah mendaftar! </b><br>
            Berikut terlampir Lembar Bukti Pendaftaran Peserta. Lampiran ini berguna sebagai bukti pendaftaran sekaligus nomor urut untuk photoshoot.<br>
            Jadwal photoshoot akan diumumkan melalui akun instagram Bujang Gadis Palembang (@bgp_palembang), OA Line BGP (@zqi5203s) dan akun Instagram Dinas Pariwisata Kota Palembang (@pariwisata.palembang). Harap langsung menghubungi panitia apabila tidak dapat melakukan photoshoot pada jadwal yang telah ditentukan.<br>
            Jangan lupa cetak lampiran untuk dikumpulkan bersama berkas lainnya ya!<br>
            Download berkasnya <b><a href="'. $link .'"> Disini </a></b><br>
            
            Pengumpulan berkas dapat dilakukan pada:<br>
            Tanggal: 28 Mei - 4 Juni 2020<br>
            Pukul: 09.00 - 16.00 WIB<br>
            Lokasi: Kantor Dinas Pariwisata Kota Palembang (Jl. Dr. Wahidin No. 3 Kelurahan Talang Semut, Kecamatan Bukit Kecil Kota Palembang) <br>
            <br>
            <br>
            Regards,<br>
            Panitia Pemilihan Bujang Gadis Palembang Tahun 2020<br>
            <br><br>
            #Samaratungga<br>
            #PBGP2020<br>
            #PariwisataPalembang<br>
            #CharmingPalembang<br>
            #PalembangEmasDarussalam<br>
            #BujangGadisPalembang<br>
            #EverythingBeginsFromHere<br></p>';
            $this->send_mail2($email, 'Pendaftaran Bujang Gadis Palembang 2020', $emailContent);
        
        }
        $this->flashmsg('<div style="text-align: center;"><h3><i class="fa fa-check" style="font-size: 100px;"></i><br>Email Terkirim</h3></div>', 'success');
        redirect('admin/peserta');
        exit;
    }

    private function sendMail($address, $subject, $body)
    {
        $this->load->library('gz');
        $data = [
            'server' => 'smtp.gmail.com',
            'username' => 'noreply.pudinglab@gmail.com', 
            'password' => 'Manusia@123',
            'tagretEmail' => $address,
            'subject' => $subject,
            'emailAlias' => 'admin@bgpalembang.com',
            'body' => $body,
            'event' => 'Pendaftaran Bujang Gadis Palembang 2020'
        ];

        $response = json_decode($this->gz->POST($this->data['api_url'].'/users/sendMail', $data));
        if ($response->status == 'success'){
            return true;
        }
        else{
            return false;
        }
        
        // $this->load->library('CI_PHPMailer/ci_phpmailer');
        // try 
        // {
        //     $this->ci_phpmailer->setServer('smtp.gmail.com');
        //     $this->ci_phpmailer->setAuth('noreply.pudinglab@gmail.com', 'Manusia@123');
        //     $this->ci_phpmailer->setAlias('admin@bgpalembang.com', 'Bujang Gadis Palembang 2020');
        //     $this->ci_phpmailer->sendMessage($address, $subject, $body);
        // } 
        // catch (Exception $e)
        // {
        //     $this->ci_phpmailer->displayError();
        // }
    }



    private function encrypt_decrypt($action, $string) {
        $output = false;
    
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'secret';
        $secret_iv = 'ini secret';
    
        // hash
        $key = hash('sha256', $secret_key);
        
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
    
        if ( $action == 'encrypt' ) {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if( $action == 'decrypt' ) {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }
    
        return $output;
    }

}
