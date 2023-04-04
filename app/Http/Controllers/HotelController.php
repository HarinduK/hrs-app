<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hotel;

class HotelController extends Controller
{
   public function save(Request $request){
    try{
        $hotel = new Hotel();
        $hotel->name = $request->name;
        $hotel->address = $request->address;
        $hotel->latitude = $request->latitude;
        $hotel->longitude = $request->longitude;
        $hotel->status = 1;
        $response = $hotel->save();
        return  response()->json($this->responseBody(true,"Succesfully saved.",200));
    }catch(\Exception $exception){
        return  response()->json($this->responseBody(false,$exception,201));
    }

   }

// get all hotels
   public function allHotels(){
    try{
        $hotels = DB::table('hotels')->get();
        return  response()->json($this->responseBody(true,"success",$hotels));
    }catch(\Exeption $exception){
        return  response()->json($this->responseBody(true,$exception,null));
    }
   }

   public function searchHotel($id){
    try{
        $hotel = Hotel::find($id);
        return  response()->json($this->responseBody(true,"success",$hotel));
    }catch(\Exeption $exception){
        return  response()->json($this->responseBody(true,$exception,null));
    }
   }

   public function update($id,Request $request){
    try{
        $hotel = Hotel::find($id);
        $hotel->name = $request->name;
        $hotel->address = $request->address;
        $hotel->latitude = $request->latitude;
        $hotel->longitude = $request->longitude;
        $response = $hotel->save();
        return  response()->json($this->responseBody(true,"success",$response));
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
