<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {

        return view('auth.login', [
            'title' => 'Login', 
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        User::where('email', $credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            Alert::success('Success', 'Login success !');
            return redirect()->intended('/beranda');
        } else {
            Alert::error('Error', 'Login failed !');
            return redirect('/login');
        }
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }

    public function process(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        // Login otomatis setelah register
        // Auth::login($user); 

        return redirect('login')->with('success', 'Registration successful. Please login.');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
        ]);
    }

    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Student::create([
            'user_id' => $user->id,
            'first_name' => $data['name'], // Asumsi nama depan sama dengan nama pengguna
            'last_name' => '', // Bisa diubah sesuai kebutuhan
            'phone_number' => '', // Bisa diisi dengan nilai default atau kosong
            'birthdate' => now(), // Bisa diisi dengan nilai default atau kosong
        ]);

        return $user;
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Alert::success('Success', 'Log out success !');
        return redirect('/login')->with('Success', 'Log out success !');
    }
}
