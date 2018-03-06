<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->view('welcome/index');
	}

	public function page(int $id = 1)
	{
		switch ($id)
		{
			case 1:
				$data = [
					'info'  => '1',
					'title' => 'Page 1',
				];
				break;
			case 2:
				$data = [
					'info'  => '2',
					'title' => 'Page 2',
				];
				break;
			case 3:
				redirect('/');
				break;
			case 4:
				$data = [
					'info'  => '4',
					'title' => 'Page 4',
				];
				break;
			case 5:
				$data = [
					'info'  => '5 (reloaded)',
					'title' => 'Page 5',
				];
				break;
		}

		$this->load->view('welcome/page', $data);
	}
}
