<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room;

class RoomController extends Controller
{
    public function save(Request $request){

        try{
            $room = new Room();
            $room->room_no = $request->room_no;
            $room->charges = $request->charges;
            $room->description = $request->description;
            $room->hotel_id = $request->hotel_id;
            $room->status = 1;
            $response = $room->save();
            return  response()->json($this->responseBody(true,"Succesfully saved.",200));
        }catch(\Exception $exception){
            return  response()->json($this->responseBody(false,$exception,201));
        }

       }

       public function searchRoomsByHotel($id){
        try{
            $rooms = DB::table('rooms')->where('hotel_id', $id)->get();
            return  response()->json($this->responseBody(true,"success",$rooms));
        }catch(\Exeption $exception){
            return  response()->json($this->responseBody(true,$exception,null));
        }
       }

       public function searchRoom($id){
        try{
            $result = Room::find($id);
            return  response()->json($this->responseBody(true,"success",$result));
        }catch(\Exeption $exception){
            return  response()->json($this->responseBody(true,$exception,null));
        }
       }

       public function update($id,Request $request){
        try{
            $room = Room::find($id);
            $room->room_no = $request->room_no;
            $room->charges = $request->charges;
            $room->description = $request->description;
            $response = $room->save();
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
