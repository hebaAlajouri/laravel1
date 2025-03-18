<?php


    
    class AuthController extends Controller
    {
        // Show Register Form
        public function showRegister()
        {
            return view('auth.register');
        }
    
        // Handle Registration
        public function register(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            Auth::login($user);
    
            return redirect('/admin/profile'); // Redirect to profile after registration
        }
    
        // Show Login Form
        public function showLogin()
        {
            return view('auth.login');
        }
    
        // Handle Login
        public function login(Request $request)
        {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
    
            if (Auth::attempt($credentials)) {
                return redirect('/admin/profile'); // Redirect on success
            }
    
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }
    
        // Handle Logout
        public function logout()
        {
            Auth::logout();
            return redirect('/login'); // Redirect to login after logout
        }
    }
    

