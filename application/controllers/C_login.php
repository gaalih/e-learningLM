<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function index()
	{
		$this->load->view('vLogin');
	}
        
    function ceklogin() {
        $this->load->model('mGuru');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //query  database        
        $result = $this->mGuru->cekLogin($username, $password)->result();
        
            if ($result) {
                $sess_array = array();
                foreach ($result as $row) {
                    $id = $row->id_guru;
                    $nama = $row->nama;
                }
                $login = array(
                    'id' => $id,
                    'nama' => $nama,
                    'Logged' => TRUE
                );
                $this->session->set_userdata($sess_array);
                redirect('beranda', 'refresh');
            } else {
                redirect('login', 'refresh');
            }
        

        return TRUE;
    }

}
