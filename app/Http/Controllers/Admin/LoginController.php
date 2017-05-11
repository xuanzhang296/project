<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
require_once 'resources/org/code/Code.class.php';
use App\Http\Model\User;
use Illuminate\Support\Facades\Input;

class LoginController extends CommonController
{
    public function login(Request $request)
    {
    	if($input = $request->all())
    	{
    		$code = new \Code;
    		$_code = $code->get();
    		if(strtoupper($input['code'])!=$_code) {
    			return back()->with('errmsg','wrong verification code');
    		}

    		$user = User::first();

    		if($input['username'] != $user->user_name || Crypt::decrypt($user->user_pass)!=$input['password'] )
    		{
    			return back()->with('errmsg','wrong username or password');
    		}
             
            session(['user'=>$user]);
    		return redirect('admin/index');
    	}
    	else
    	{
    		return view('admin.login');

    	}
    	

    		
    	
    }

    public function logout() {
        session(['user'=>null]);
        return redirect('admin/login');
    }

    public function code()
    {
    	$code = new \Code;
    	$code->make();
    }

    public function resetpass() {

        if($input = Input::all()) {

            $rules = [
            'password' =>'required|between:6,20|confirmed',
            ];
            $messages = [
            'password.required'=>'new password can not be void',
            'password.between'=>'must contain 6-20 characters',
            'password.confirmed'=>'new and old password are different'
            ];
            $validator = Validator::make($input,$rules,$messages);
            if($validator->passes()) {
                $user = User::first();
                $_password = Crypt::decrypt($user->user_pass);
                if($input['password_o']==$_password) {   

                    $user->user_pass = Crypt::encrypt($input['password']);
                    $user->update();
                    return back()->with('errors','change password successfully');

                }else {

                    return back()->with('errors','wrong password');

                }
            }else {
                //dd($validator->errors()->all());
                return  back()->withErrors($validator);
            }
          
        }
        else {

            return view('admin.resetpass');

        }


        
    }
}
