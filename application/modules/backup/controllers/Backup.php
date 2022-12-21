<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends MX_Controller{
    // put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('m_backup');
        $this->load->library('session');

        // if ($this->session->userdata('role')!="admin")
        // {
        //     redirect('backup','refresh');
        // }
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index(){
        $a['layout'] = 'v_backup';
        $a['modules'] = 'backup';
        echo Modules::run('template/frontend', $a);
    }

    public function backup1(){
        $this->load->dbutil();

        $tanggal = date('YmdS-His');

        $config = array(
            'format' => 'sql',
            'filename' => 'Rekam'.$tanggal.'.sql',
            'add_drop' => TRUE,
            'add_insert' => TRUE,
            'newline' => "\n",
            'foreign_key_checks' => FALSE,
        );

        $backup = $this->dbutil->backup($config);

        $nama_file='Rekam'.$tanggal.'_db.sql';  

        $this->load->helper('download');
        force_download($nama_file,$backup);
        
    }

    public function restore(){
        
    }

}