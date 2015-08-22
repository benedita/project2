<?php
/**
 * Created by PhpStorm.
 * User: Benny
 * Date: 14/06/2015
 * Time: 15:40
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class contactos extends CI_Controller{



    public function index()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('contactos');
        $this->load->view('footer');
    }
}