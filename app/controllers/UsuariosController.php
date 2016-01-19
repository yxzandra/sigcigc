<?php

class UsuariosController extends BaseController {

	public function users_action()
	{
		$id = Input::get('id');
		$accion = Input::get('accion');

		$user = Usuario::find($id);
		switch ($accion) {
			case 1:
				# code... Editar
				return View::make('usuarios.edit', array('user'=> $user));
				break;
			case 2:
				# code... Eliminar
				return View::make('usuarios.delete', array('user'=> $user));
				break;
			default:
				# code... Crear
				return View::make('usuarios.new');
				break;
		}
	}

	public function login()
	{

		$user 	= Input::get('user');
		$passwd = Input::get('password');	
		
		$user = DB::table('usuarios')->where('usu_login', $user)->first();

		if($user != NULL){
			if($passwd == $user->usu_passwd){								 				

				Session::put('user', $user->id_usuario);
				Session::put('nivel', $user->usu_login);
				Session::put('nombre', $user->usu_nombre);
				Session::put('apellido', $user->usu_apellido);													 		

				return Redirect::to('/');
			}else{
				Session::put('error', "Constrase&ntilde;a invalida, intentelo nuevamente");	
				return Redirect::to('/cpanel');		
			}
		}else{
			Session::put('error', "El usuario no existe");
			return Redirect::to('/cpanel');				
		}

	}


	public function create_action()
	{
		$login = Input::get('login');
		$contrasenna = Input::get('contrasenna');
		$apellido = Input::get('apellido');
		$nombre = Input::get('nombre');
		$correo = Input::get('correo');
		$especialidad = Input::get('especialidad');


		$usuarios = new Usuario;

		$usuarios->login = $login;
		$usuarios->contrasenna = $contrasenna;
		$usuarios->apellido = $apellido;
		$usuarios->nombre = $nombre;
		$usuarios->correo = $correo;
		$usuarios->especialidad = $especialidad;

		$usuarios->save();

		Session::put('message', "Usuario creado existosamente");
		return Redirect::to('usuarios');
	}

	public function edit_action()
	{
		$id = Input::get('id');
		$login = Input::get('login');
		$contrasenna = Input::get('contrasenna');
		$apellido = Input::get('apellido');
		$nombre = Input::get('nombre');
		$correo = Input::get('correo');
		$especialidad = Input::get('especialidad');


		$usuarios = Usuario::find($id);

		$usuarios->login = $login;
		$usuarios->contrasenna = $contrasenna;
		$usuarios->apellido = $apellido;
		$usuarios->nombre = $nombre;
		$usuarios->correo = $correo;
		$usuarios->especialidad = $especialidad;

		$usuarios->save();

		Session::put('message', "Usuario editado existosamente");
		return Redirect::to('usuarios');		
	}


	public function delete_action()
	{
		$id = Input::get('id');

		DB::table('usuarios')->where('id', $id)->delete();

		Session::put('message', "Usuario eliminado existosamente");
		return Redirect::to('usuarios');			
	}


	public function logout()
	{
		Session::flush();		
		return Redirect::to('/cpanel');	
	}	

}