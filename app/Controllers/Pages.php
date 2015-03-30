<?php
namespace Controllers;
use Resources, Models;

class Pages extends Resources\Controller
{
	public function index()
	{
		$data['title'] = 'Beranda';
		$this->output('tema/default/home',$data);
	}
	public function ourclient(){
		$data['title'] = 'Our Client';
		$data['content'] = 'ini content our client';
		$data['footer'] = 'Copyright (C) 2015, ini footer our clients';
		$this->output('tema/default/halaman',$data);
	}

	public function aboutus(){
		$data['title'] = 'About Us';
		$data['content'] = 'ini content about us';
		$data['footer'] = 'Copyright (C) 2015, ini footer about us';
		$this->output('tema/default/halaman',$data);
	}

	public function careers(){
		$data['title'] = 'Careers';
		$data['content'] = 'ini content careers';
		$data['footer'] = 'Copyright (C) 2015, ini footer careers';
		$this->output('tema/default/halaman',$data);
	}

	public function contactus(){
		$data['title'] = 'Contact Us';
		$data['content'] = 'ini content Contact Us';
		$data['footer'] = 'Copyright (C) 2015, ini footer contact us';
		$this->output('tema/default/halaman',$data);
	}
}
