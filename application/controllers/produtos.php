<?php
/**
 * Created by PhpStorm.
 * User: Benny
 * Date: 14/06/2015
 * Time: 00:43
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class produtos extends CI_Controller{



    public function index()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('produtos');
        $this->load->view('footer');
    }
}