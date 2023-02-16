<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  function register(Request $request)
  {
    try {
      $valid = $request->validate([
        "name" => "required",
        "email" => "required | email | unique:users",
        "password" => "required",
        "roles_name" => "required",
      ]);
      $user = User::create([
        "name" => $valid["name"],
        "email" => $valid["email"],
        "password" => Hash::make($valid["password"]),
        "roles_name" => $valid["roles_name"],
      ]);
      $token = $user->createToken("StudentsToken")->plainTextToken;
      return response()->json([
        "message" => "user created successflly",
        "user" => $user,
        "token" => $token,
      ]);
    } catch (\Exception $ex) {
      return $ex->getMessage();
    }
  }

  function login(Request $request)
  {
    $valid = $request->validate([
      "email" => "required",
      "password" => "required",
    ]);
    $user = User::where("email", $valid["email"])->first();
    $password = Hash::check($valid["password"], $user->password);

    if (!$user &&  !$password) {
      return response()->json([
        "message" => "Login Failed"
      ]);
    } else {
      $token = $user->createToken("StudentsToken")->plainTextToken;
      return response()->json([
        "message" => "Login Successfully !",
        "user" => $user,
        "token" => $token
      ]);
    }
  }

  function logout(Request $request)
  {
    auth()->user()->tokens()->delete();
    return response()->json([
      "message" => "Log out Successfully !",
    ]);
  }
}
