<?php

namespace App\Http\Controllers;
 use thiagoalessio\TesseractOCR\TesseractOCR;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OCRController extends Controller
{
    public function extractText(Request $request){
         $request->validate([
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
         ]);
         $image=request('image');
                                                               
         $ocr = new TesseractOCR();
         $ocr->image($image);
         $text = $ocr->run();
          

          //Time sheet Number
          $timesheet_pattern ="/\|group (\d+)/";
          preg_match($timesheet_pattern, $text, $timesheet);
          $time_sheet=$timesheet[1];

          //gmail
              $pattern = '/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z]{2,}\b/i';
              preg_match_all($pattern, $text, $email);
              $email_string = implode(', ', $email[0]);
            ;

            //phone number
            $phone_pattern = "/(?<=Phone: )\d{5} \d{6}/";
            preg_match($phone_pattern, $text, $phno);
            $phone_string = $phno[0];
            
            // Declaration
            $declaration_pattern = "/Declaration:(.*)/s";
            preg_match($declaration_pattern, $text, $decl);
            $declaration_string = trim($decl[1]);


            $user = new Users;  
            $user->content = $text; 
            $user->email = $email_string; 
            $user->phone =  $phone_string; 
            $user->declaration = $declaration_string; 
            $user->timesheet_no =  $time_sheet;    
            $user->save();
      
             return redirect('texthere');
        }
      
     public function extractHere(){
        $users=Users::orderBy('id','desc')->first();
        return view('texthere', ['users' => $users]);
        }

}