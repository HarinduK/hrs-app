<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingDetails;

class BookingDetailsController extends Controller
{
    public function save(Request $request){
        try{
            $booking = new BookingDetails();
            $booking->book_id = $request->book_id;
            $booking->room_id = $request->room_id;
            $booking->service_type = $request->service_type;
            $booking->service = $request->service;
            $booking->amount = $request->amount;
            $booking->status = 0;
            $response = $booking->save();
            return  response()->json($this->responseBody(true,"Succesfully saved.",$booking->id));
        }catch(\Exception $exception){
            return  response()->json($this->responseBody(false,$exception,201));
        }

       }

       /*
        response body
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
