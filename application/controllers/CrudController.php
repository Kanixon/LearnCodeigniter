<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {
	public function openPage()
	{
				$this->load->model('CrudModel');
				$this->load->library('pagination');
				$config['total_rows'] = $this->db->count_all('employees'); //total row
				$config['per_page'] = 5;  //show record per halaman
				$config["uri_segment"] = 3;  // uri parameter
				$choice = 5;
				$config["num_links"] = floor($choice);
				$config['base_url'] = 'http://127.0.0.1/LearnCodeigniter/index.php/CrudController/openPage';
				// Pagination Style
				$config['first_link']       = 'First';
				$config['last_link']        = 'Last';
				$config['next_link']        = 'Next';
				$config['prev_link']        = 'Prev';
				$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
				$config['full_tag_close']   = '</ul></nav></div>';
				$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
				$config['num_tag_close']    = '</span></li>';
				$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
				$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
				$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
				$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
				$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
				$config['prev_tagl_close']  = '</span>Next</li>';
				$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
				$config['first_tagl_close'] = '</span></li>';
				$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
				$config['last_tagl_close']  = '</span></li>';

				$this->pagination->initialize($config);
				$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

				//panggil function getEmployeeData yang ada pada model CrudModel.
				$data['data'] = $this->CrudModel->getEmployeeData($config["per_page"], $data['page']);
				$data['pagination'] = $this->pagination->create_links();

				$this->load->view('template/header');
				$this->load->view('crud',$data);
}
}
