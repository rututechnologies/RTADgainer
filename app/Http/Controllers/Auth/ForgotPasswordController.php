<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Crypt;
use Illuminate\Support\Facades\Hash;
use League\Flysystem\Exception;
use Log;
use DB;
use Auth;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
    function sendOTP(Request $request){
//        dd($request->all());
        try{
            DB::beginTransaction();
            //validate
            $this->validate($request, ['mobile' => 'required|max:10']);
            //chcek mobile no is exist
            if(count($login=User::where('phone_number',$request->mobile)->first())){
                //generate encrypted OTP
                $otp=$this->create_pin();
                $login->otp_check=$otp;
//                $login->otp_check=bcrypt($otp);
//                $login->otp_created_at= Carbon::now();
                $login->update();
                //send otp
                $mobile=$login->phone_number;
                Log::info('Login cred for :'.$mobile.'-'.$otp);
//                send OTP to  mobile

                if($this->send_OTP($otp,$login->phone_number)=='login_generated'){
                    DB::commit();
                    return view('auth.passwords.otp_enter_form',compact('mobile'));
                }else
                    return redirect()->back()->withErrors(['mobile'=>'Error occured.']);
//                return view('auth.passwords.otp_enter_form',compact('mobile'));
            }else
                return redirect()->back()->withErrors(['mobile'=>'Mobile number does not exists']);
        }catch (Exception $e){
            DB::rollback();
        }


        //
    }
    public function send_OTP($decrypted_otp,$mobile){

        $sendit=new MessageController();
        $this_mail = $sendit->RESET_HOSPITAL_LOGIN_DETAILS_MESSAGE;
        $this_mail = str_replace(['##mobile_no##','##password##'], [$mobile,$decrypted_otp], $this_mail);

        $sendit->SendMessage($mobile,$this_mail);
        Log::info('Login cred for :'.$mobile.'-'.$decrypted_otp);
        return 'login_generated';
    }
    public function validateOTP(Request $request){
//        dd($request->all());
        //validate otp
        $this->validate($request, ['mobile' => 'bail|required|max:10','otp'=>'bail|required|min:5|max:5']);
        //check otp is existing in tb
        if(count($login=User::where('phone_number',$request->mobile)->first())){
            //match otp
//            dd($request->otp, $login->otp_check);
//            if (Hash::check($request->otp, $login->otp_check)) {
            if ($request->otp== $login->otp_check) {
                //show view reset password
                $login->otp_check=$this->create_pin();
                $login->update();
                $token=$login->otp_check;
//                dd($token);
                //send otp
                $mobile=$login->phone_number;
//                $decrypted_otp=$this->decrypt_pin($login->otp);

                return view('auth.passwords.reset_mobile',compact('mobile','token'));
            }else
                return response(['otp'=>'OTP Invalid'],500);
        }else
            return response(['mobile'=>'Mobile number does not exists'],500);



    }
    public function reset_password_mobile(Request $request){


//        dd($request->all());
        //validate
        $this->validate($request, [
            'token' => 'required',
            'mobile' => 'required|min:10|max:10',
            'password' => 'required|confirmed|min:6',

        ]);
        //check mobile number & otp
        if(count($login=User::where('phone_number',$request->mobile)->first())){
            //match otp
            if($request->token==$login->otp){
                $login->pin=bcrypt($request->pin);
                $login->update();
                return response(['message'=>'Password changed successfully'],200);
            }else
                return response(['otp'=>'OTP Invalid'],400);
        }else
            return response(['mobile'=>'Mobile number does not exists'],400);
        //reset password


    }
    public function create_pin()
    {
        //generate login -
        $digit_pin=rand(10000,99999);


        return $digit_pin;
    }
    private function decrypt_pin($pin)
    {
        // dd($decrypt_pin);
        $decrypt_pin=Crypt::decrypt($pin);
        return $decrypt_pin;
    }
    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('auth.passwords.mobile');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showForgotForm(){
        return view('auth.passwords.forgot_password');
    }

     public function reset_password(Request $request){
        $email_id = $request->email;
         $random_password = str_random(6);
         if($user = User::where('email',$email_id)->first()){               
               
                
             Mail::send('auth.mail.reset_password', ['email_id' => $email_id,'random_password'=>$random_password], function ($m) use($email_id,$random_password) 
                    {
                        $m->from('dhanspatil91@gmail.com', 'Dhanashri Gadkari');
                        $m->to($email_id)->subject('Reset Password');
                    });
             $encrypted_password =encrypt($random_password);
                $user->password =  $encrypted_password;
          $user->update();
          return view('auth.login');
         }
         else{
            return response('This is not registered email address with ADgainer.',200);
         }
    }
}
