<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;
class UserController extends Controller 
{
public $successStatus = 200;
/** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(){ 
        if(Auth::attempt(['email' => request('username'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['usuario'] = $user->id;
            $success['access_token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['errorLogin'=>'Usuario no encontrado'], 401); 
        } 
    }

           

    public function register(Request $request) 
    { 
        $messages = [
            'name.required' => 'El nombre es obligatorio',
            'apellido_paterno.required' => 'El apellido paterno es obligatorio',
            'apellido_materno.required' => 'El apellido materno es obligatorio',
            'nombre_idea.required' => 'Falta el nombre de tu idea de negocio',
            'email.unique' => 'El correo electronico ya esta registrado',
            'email.required' => 'El correo es obligatorio',
            'email.email' => 'El formato del correo es incorrecto',
            'password.required' => 'La contraseña es obligatoria',
            'c_password.required' => 'Las contraseñas deben ser iguales',
            'password.min' => 'La contraseña debe tener mas de :min caracteres',
            'c_password.same' => 'Las contraseñas no son identicas',
            
        ];
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'apellido_paterno' => 'required', 
            'apellido_materno' => 'required', 
            'giro_negocio_id' => 'required', 
            'municipio_id' => 'required', 
            'estado_id' => 'required', 
            'nombre_idea' => 'required', 
            'sexo' => 'required', 
            'email' => 'required|email|unique:users', 
            'password' => 'required|min:8', 
            'c_password' => 'required|same:password', 
        ],$messages);
        
if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
$input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $success['access_token'] =  $user->createToken('MyApp')->accessToken; 
        $success['name'] =  $user->name;
        $success['usuario'] =  $user->id;
        $success['demas'] =  $request->all();

        return response()->json(['success'=>$success], 200); 
    }
/** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this->successStatus); 
    } 
}