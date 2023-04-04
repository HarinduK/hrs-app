<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function save(Request $request){
        try{
            $guest = new Guest();
            $guest->name = $request->name;
            $guest->address = $request->address;
            $guest->phone_number = $request->phone_number;
            $guest->nic = $request->nic;
            $guest->email = $request->email;
            $guest->password = $request->password;
            $guest->status = 1;
            $response = $guest->save();
            return  response()->json($this->responseBody(true,"Succesfully saved.",$guest->id));
        }catch(\Exception $exception){
            return  response()->json($this->responseBody(false,$exception,201));
        }

       }


       public function allGuest(){
        try{
            $hotels = DB::table('guest')->get();
            return  response()->json($this->responseBody(true,"success",$guest));
        }catch(\Exeption $exception){
            return  response()->json($this->responseBody(true,$exception,null));
        }

       }

       public function searchGuest($id){
        try{
            $guest = Hotel::find($id);
            return  response()->json($this->responseBody(true,"success",$guest));
        }catch(\Exeption $exception){
            return  response()->json($this->responseBody(true,$exception,null));
        }
       }

       public function update($id,Request $request){
        try{
            $guest = Guest::find($id);
            $guest->name = $request->name;
            $guest->address = $request->address;
            $guest->Phone = $request->phone_number;
            $guest->nic = $request->nic;
            $guest->email = $request->email;
            $guest->password = $request->password;
            $response = $hotel->save();
            return  response()->json($this->responseBody(true,"success",$response));
        }catch(\Exeption $exception){
            return  response()->json($this->responseBody(true,$exception,null));
        }
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
