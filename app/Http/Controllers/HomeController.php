<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Validator;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Task;
use App\User;


class HomeController extends Controller
{
    public function dashboard(){
      $user = Auth::user();
      if ($user) {
        return view('auth_dashboard', compact('user'));
      }
      else {
        return view('guest_dashboard');
      }
    }

    public function getLogin(){
      return view('login');
    }

    public function getRegister(){
      return view('register');
    }

    public function postLogin(Request $request){
      $userCredentials = $request->only('email', 'password');

      if(Auth::attempt($userCredentials)){
        return redirect()->intended('/');
      }
      else {
        return back()->with('error', 'Invalid Credentials');
      }
    }

    public function postRegister(Request $request){
      $input = $request->all();

      $input_array = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password)
      ];

      $user = User::create($input_array);
      return redirect('login');
    }

    public function getEditTask()
    {
      echo "inside getEditTask";
    }

    public function postEditTask()
    {
      echo "inside postEditTask";
    }

    public function getNewTask(){
      echo "inside getNewTask";
    }

    public function postNewTask()
    {
      echo "inside postNewTask";
    }

    public function logout(Request $request){
      $request->session()->flush();
      Auth::logout();
      return Redirect('/');
    }
}
