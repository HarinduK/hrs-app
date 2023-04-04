<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function save(Request $request){
        try{
            $booking = new Booking();
            $booking->from_date = $request->from_date;
            $booking->to_date = $request->to_date;
            $booking->guest_id = $request->guest_id;
            $booking->hotel_id = $request->hotel_id;
            // $booking->pay_cash = $request->pay_cash;
            $booking->status = 0;
            $response = $booking->save();
            return  response()->json($this->responseBody(true,"Succesfully saved.",$booking->id));
        }catch(\Exception $exception){
            return  response()->json($this->responseBody(false,$exception,201));
        }

       }

       public function remove(){
        $deleteBookingDetails=DB::delete('DELETE FROM booking_details WHERE book_id IN (SELECT b.id FROM bookings b WHERE b.guest_id
        Not IN (SELECT DISTINCT guest_id from credit_cards))');

        $deleteBookings=DB::delete('DELETE FROM bookings b WHERE b.guest_id
        Not IN (SELECT DISTINCT guest_id from credit_cards)');
       }
       public function revenue(){
        $revenuelist=DB::select('SELECT r.room_no,b.from_date,b.to_date,bd.amount FROM bookings b
                                INNER JOIN booking_details bd on bd.book_id=b.id
                                INNER JOIN rooms r on r.id=bd.room_id;');
         return  response()->json($this->responseBody(true,"Succesfully saved.",$revenuelist));
       }

       public function list(){
        $revenuelist=DB::select('SELECT b.id,g.name as guest,h.name as hotel,r.room_no,b.from_date,b.to_date,b.status FROM bookings b
        INNER JOIN guests g on g.id=b.guest_id
        INNER JOIN booking_details bd on bd.book_id=b.id
        INNER JOIN rooms r on r.id=bd.room_id
        INNER JOIN hotels h on h.id=r.hotel_id;');
         return  response()->json($this->responseBody(true,"Succesfully saved.",$revenuelist));
       }

       public function changeStatus(Request $request){
        $revenuelist=DB::update('update bookings set status = '.$request->status.' where id = '.$request->id);
         return  response()->json($this->responseBody(true,"Succesfully saved.",$revenuelist));
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
