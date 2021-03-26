<?php

namespace App\Controllers;

class Front extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function shop()
	{
		return view('shop');
	}

	public function cart()
	{
		return view('cart');
	}
	
	public function login()
	{
		return view('login');
	}

	public function checkout()
	{
		return view('checkout');
	}

	public function contact()
	{
		return view('contact');
	}
	
}
