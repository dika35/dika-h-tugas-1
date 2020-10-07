<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CApp extends CI_Controller
{
	public function index()
	{
		if ($this->session->has_userdata('id_user'))
		{
			redirect('CApp/CTampilMember');
		}

		$this->load->view('VLogin');
	}

	public function CProsesLogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->MApp->MProsesLogin($username, $password);

		if ($user)
		{
			$this->session->set_userdata($user);
			redirect('CApp/CTampilMember');
		}
		else
		{
			$this->session->set_flashdata('error_login', true);
			redirect('CApp');
		}
	}

	public function CLogout()
	{
		$this->session->unset_userdata('id_user');
		redirect('CApp');
	}

	public function CTampilMember()
	{
		if (!$this->session->has_userdata('id_user'))
		{
			redirect('CApp');
		}

		$id_user = $this->session->userdata('id_user');

		$data = $this->MApp->MTampilMember($id_user);

		$this->load->view('VHome', ['data' => $data]);
	}
}

