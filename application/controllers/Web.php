<?php
/**
 * 
 */
class Web extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        echo"construct"();
        }

        public function index(){
$data['judul']="Halama Depan";
$this->load('v_index');
        }
}
