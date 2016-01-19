<?php

class HomeController extends BaseController {


	public function showLogin()
	{
		return View::make('master.layout');
	}



	public function showBackend()
	{
		if(Session::has('user')){
		return View::make('plantillas.dashboard');
		}else{
			Session::put('error', "Acceso denegado");
			return Redirect::to('/cpanel');
		}
	}	

	public function showUsuarios()
	{
		if(Session::has('user')){
			return View::make('backend.usuarios',array('usuarios' => Usuario::all()));
		}else{
			Session::put('error', "Acceso denegado");
			return Redirect::to('/cpanel');
		}				
	}

	public function showVacaciones()
	{
		if (Session::has('user')) {
		return View::make('backend.vacaciones',array('usuarios' => Usuario::all()));
		}
			
	}		
}
