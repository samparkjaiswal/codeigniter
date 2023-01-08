<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Crud_model');
		$this->load->database();
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function form3()
	{
		if(!empty($this->input->post('submit')))
		{
			$name=$this->input->post('name');
			$mobile=$this->input->post('mobile');
			$dob=$this->input->post('dob');
			$gender=$this->input->post('gender');
			$address=$this->input->post('address');
			$qualification=$this->input->post('qualification');
			$email=$this->input->post('email');
			$language=$this->input->post('language');
			$langu=implode(',',$language);
			$date=date('y-m-d');

			$data=$this->Crud_model->savedata(array('name'=>$name,'mobile'=>$mobile,'dob'=>$dob,'gender'=>$gender,'address'=>$address,'qualification'=>$qualification,'email'=>$email,'language'=>$langu,'date'=>$date));
			if($data==true)
			{
				echo "Data Inserted";
			}
			else
			{
				echo "Data Not Inserted";
			}
		}
		$this->load->view('form3');
	}
}
