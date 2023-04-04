<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CreditCard;
use App\Models\Guest;
use Illuminate\Support\Facades\Auth;

class CreditCardController extends Controller
{
    public function save(Request $request){
        try{
            $card = new CreditCard();
            $card->card_number = $request->card_number;
            $card->cvv = $request->cvv;
            $guests = DB::table('guests')->where('user_id',Auth::User()->id )->first();
            $card->guest_id = $guests->id;

            $response = $card->save();
            return  response()->json($this->responseBody(true,"Succesfully saved.",200));
        }catch(\Exception $exception){
            return  response()->json($this->responseBody(false,$exception,201));
        }

       }

       // get all hotels
   public function get(){
    try{
        $guests = DB::table('guests')->where('user_id',Auth::User()->id )->first();
        $cards = DB::table('credit_cards')->where('guest_id',$guests->id )->get();
        return  response()->json($this->responseBody(true,"success",$cards));
    }catch(\Exeption $exception){
        return  response()->json($this->responseBody(true,$exception,null));
    }
   }

       /**
     * responseBody
     * This is used to create response.
     * @param success This is the paramter require boolean
     * @param message This is the paramter require message content
     * @param result This is the paramter require result as some of data to return client
     * @return Json This returns as response.
     */
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
