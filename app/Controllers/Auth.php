<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function index()
	{
		return view('auth/index/pageindex');
	}


    public function register()
	{
		return view('auth/register/pageregister');
    }

    
    public function btd()
	{
		return view('auth/disco/pagedisco');
	}
	public function admin()
	{
		return view('auth/layout/pageadmin');
	}
	public function about()
	{
		return view('auth/about/pageabout');
	}
	public function login()
	{
		return view('auth/login/pagelogin');
	}
	
	//--------------------------------------------------------------------

}
