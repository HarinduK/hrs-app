<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guest;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class UserController extends Controller
{
    public function create(Request $request)
    {
        try{
            $data = $request->all();
            $res = User::create([
                'name' => $data['regi-email'],
                'email' => $data['regi-email'],
                'role_id' => 2,
                'password' => Hash::make($data['password1'])
            ]);
            if($res->id>0){
                $exGuest=Guest::find($data['guestId']);
                $exGuest->user_id=$res->id;
                $response =$exGuest->save();
                return redirect("login")->withSuccess('Login details are not valid');
                // return  response()->json($this->responseBody(true,"success",$response));
            }
        }catch(\Exeption $exception){
            return  response()->json($this->responseBody(true,$exception,null));
        }

    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    private function responseBody($success, $message, $result)
    {
        $body = [
            "success" => $success,
            "message" => $message,
            "result" => $result
        ];
        return $body;
    }
}
