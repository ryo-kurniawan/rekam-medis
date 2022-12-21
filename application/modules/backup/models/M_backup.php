<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_backup extends CI_Model{
    function get_data_barang(){     
        return $this->db->query('SELECT * FROM "t_barang"');
    }  
}