<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'apellido_paterno' => ['required', 'string', 'max:255'],
            'apellido_materno' => ['required', 'string', 'max:255'],
            'edad' => ['required','string'],
            'sexo' => ['required', 'integer'],
            'giro_negocio_id' => ['required', 'integer'],
            'nombre_idea' => ['required', 'string', 'max:255'],
            'estado_id' => ['required', 'integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   
        $municipio = 2458;
        $rfc = '';
        if($data['estado_id'] == 20){
            $municipio = $data['municipio_id'];
        }
        if(isset($data['rfc'])){
            $rfc = $data['rfc'];
        } 
        
        $giro = intval($data['giro_negocio_id']);
     
        return User::create([
            'name' => $data['name'],
            'apellido_paterno' => $data['apellido_paterno'],
            'apellido_materno' => $data['apellido_materno'],
            'edad' => $data['edad'],
            'sexo' => $data['sexo'],
            'rfc' => $rfc,
            'giro_negocio_id' => $giro,
            'nombre_idea' => $data['nombre_idea'],
            'estado_id' => $data['estado_id'],
            'municipio_id' => $municipio,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'tipo_usuario_id' => 3,
            'universidad_id' => 1
        ]);
    }
}
