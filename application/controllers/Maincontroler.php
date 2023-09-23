<?php

class Maincontroler extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('');
        //$this->load->library('session');
        ///$this->load->database();
    }

	public function index()
	{
		$this->load->view('indexx');
	}

    public function services(){
        $this->load->view('services');
    }
}

?>