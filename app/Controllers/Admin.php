<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$dataTotalUsers = [22, 19, 30, 47, 32, 0, 34, 55, 41, 0];
		return view('admin/dashboard', ['dataTotalUsers' => $dataTotalUsers]);
	}

	public function blank()
	{
		return view('admin/blank');
	}
	
}
