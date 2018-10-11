<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller 
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('product_model');
	}
	public function index()
	{
		$this->load->view('product');
	}
	public function product_list()
	{
		$this->load->view('product/list');
	}
	public function edit()
	{
		if(!empty($this->input->post()))
		{
			$this->product_model->edit();
		}
		$this->load->view('product/edit');
		//localhost/tokokelontong/index.php/product/edit
	}

	}