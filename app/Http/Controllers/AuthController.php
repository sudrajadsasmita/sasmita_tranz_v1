<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\BaseController;
use App\Http\Resources\UserResource;
use App\Models\TaProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends BaseController
{
    public function __construct()
    {
        $this->tokenKey = env('TOKEN_NAME');
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $authUser = Auth::user();
            $token = $authUser->createToken($this->tokenKey)->plainTextToken;

            return $this->sendResponse(new UserResource($authUser), "User login successfully.", $token);
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised'], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'date_birth' => 'required|date',
            'phone' => 'required',
            'address' => 'required',
            'role_id' => 'required'
        ]);

        if ($validator->fails()) {
            $this->sendError('Error Validation', $validator->errors());
        }

        $fileds = $validator->validated();
        $profile = TaProfile::create([
            'date_birth' => $fileds['date_birth'],
            'phone' => $fileds['phone'],
            'address' => $fileds['address'],
            'role_id' => $fileds['role_id'],
        ]);

        $user = User::create([
            'name' => $fileds['name'],
            'email' => $fileds['email'],
            'password' => bcrypt($fileds['password']),
            'profile_id' => $profile->id,
        ]);

        $token = $user->createToken($this->tokenKey)->plainTextToken;

        return $this->sendResponse(new UserResource($user), "Account created successfully.", $token);
    }
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        $user = User::where('email', $request->email)->first();
        return $this->sendResponse($user, 'User logout successfully.');
    }
}
