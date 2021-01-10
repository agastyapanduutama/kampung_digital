<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
        if (!$this->session->userdata('logged_in')) {
                redirect(base_url('admin/login'));
            }
        $this->load->model('admin/M_penduduk', 'penduduk');
        
	}

    public function home()
    {

        $data = array(
                      'title'           => 'Database Penduduk RW 18' ,
                      'konten'          => 'admin/home/dashboard' 
                    );

        $this->load->view('admin/templates/wrapper', $data, FALSE);
     
        // $this->req->print($_SESSION);

    }

}

/* End of file C_home.php */
