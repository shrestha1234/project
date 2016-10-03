<?php

namespace Lost\Http\Controllers\Api;

use Illuminate\Http\Request;
use JWTAuth;
use Validator;
use Dingo\Api\Routing\Helpers;
use Illuminate\Support\Facades\Password;
use Tymon\JWTAuth\Exceptions\JWTException;
use Dingo\Api\Exception\ValidationHttpException;
use Lost\Http\Requests;
use Lost\Http\Controllers\Controller;
use Lost\Models\User;
use Lost\Models\UserDetail;

class UserController extends Controller
{
    public function Register(Request $request){
        try {
            $user = new User();
            $user->username = $request->email;
            $user->password = bcrypt($request->password);
            $user->email = $request->email;
            $user->user_typeid = $request->user_typeid;
            $user->save();
            $userDetail = new UserDetail();
            $userDetail->user_id = $user->id;
            $userDetail->first_name = $request->first_name;
            $userDetail->last_name = $request->last_name;
            $userDetail->phone_no = $request->phone_no;
            $userDetail->address = $request->email;
            $userDetail->locality = $request->locality;
            $userDetail->country_id = $request->country;
            $userDetail->state_id = $request->state;
            $userDetail->zone_id = $request->zone;
            $userDetail->district_id = $request->district;

            $userDetail->save();
        }
        catch(\Exception $e)
        {
            throw $e;
        }

    }

     public function login(Request $request)
     {
         try{
         $credentials = $request->only(['email', 'password']);

         $validator = Validator::make($credentials, [
             'email' => 'required',
             'password' => 'required',
         ]);

         if($validator->fails()) {
             throw new ValidationHttpException($validator->errors()->all());
         }

        try {
               if (! $token = JWTAuth::attempt($credentials)) {
                     // return response()->errorUnauthorized();
           }
        } catch (JWTException $e) {
                return response()->error('could_not_create_token', 500);
        }
         $user=User::where('email','=',$request->email)->first();
         return response()->json(compact('user','token'));
         }
         catch(\Exception $e)
         {
             throw $e;
         }
    }


}
