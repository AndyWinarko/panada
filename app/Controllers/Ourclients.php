<?php
namespace Controllers;
use Resources, Models;

class Ourclients extends Resources\Controller
{
	public function index()
	{
		$data['title'] = 'Our Client';

		$this->output('tema/default/ourclients',$data);
	}
}