<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rowater;
use DB;
use Mail;
class RoController extends Controller
{
     public function filtter(){
        return view('service.filtration');
     }
     public function maintce(){
      return view('service.maintaince');
   }
   public function Sanitization(){
      return view('service.sanitization');
   }
   public function monitoring(){
      return view('service.Monitoring');
   }
     public function index(){
        return view('welcome');
     }

     public function abouts(){
        return view('Abouts.abouts');
     }
 public function contact(){
         return view('contact');
 }
public function save_data(Request $request){

   $email=rowater::where('email',$request->email)->first();
   if($email){
      return response()->json([
         'status'=>0,
         'message' => 'Email Already Exit'], 200);
   }
       DB::beginTransaction();
       try {
       $data_row= new rowater;
       $data_row->name=$request->name;
       $data_row->email=$request->email;
       $data_row->phone=$request->mobile;
       $data_row->message=$request->message;
      

      //  $mail_send = explode(',', $cc);
       $data = ['name' => "satendra", 'data' => $data_row];
       $mail_send ='satendramawai41@gmail.com';
       Mail::send('mail.contact_ad', $data, function ($message) use ($mail_send) {
         $message->to($mail_send);
         $message->subject("Contact Details");
       });

       $data = ['name' => "satendra"];
       $mail_form['form'] = $request->email;
       Mail::send('mail.contact_user', $data, function ($message) use ($mail_form) {
         $message->to($mail_form['form']);
         $message->subject("Contact Details");
       });

       $data_row->save();
       DB::commit();
       return response()->json([
         'status'=>1,
         'message' => 'User created successfully!'], 200);
      } catch (Exception $e) {
           DB::rollBack();
          return response()->json(['error' => $e->getMessage()]);
      }
}

}
