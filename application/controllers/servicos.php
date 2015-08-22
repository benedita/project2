<?php
/**
 * Created by PhpStorm.
 * User: Benny
 * Date: 14/06/2015
 * Time: 15:43
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class servicos extends CI_Controller{



    public function index()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('servicos');
        $this->load->view('footer');
    }
}