<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function __construct()
    {
        //$this->middleware('auth')->except('authenticate');
    }

    // To Authenticate
    public function authenticate(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('login', 'password');
    
        // Check if the input is a valid email
        $isEmail = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL);
    
        // Find the user by email or username
        $user = User::where($isEmail ? 'email' : 'name', $credentials['login'])->first();
    
        if ($user && Auth::attempt([$isEmail ? 'email' : 'name' => $user->name, 'password' => $credentials['password']])) {
            session(['name' => $user->name]);
            return redirect()->intended('dashboard');
        }
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
        // $user = User::where('email', $credentials['email'])->first();
        // Log::info('Retrieved User: ' . json_encode($user));
        // dd($credentials);

        // $users = DB::select('select * from users');
        // Log::info('Retrieved Users: ' . json_encode($users));

    
    public function redirectToRegisterPage()
    {
        return View::make('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create($request->all());

        return redirect()->route('login')->with('success', 'User created successfully.');
    }

    public function dashboard(){
        return View::make('dashboard');
    }



}
