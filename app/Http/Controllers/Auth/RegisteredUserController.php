<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        try{
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ],
            [
                'name.required' => 'Vui lòng nhập tên.',
                'name.max' => 'Tên không được vượt quá 255 ký tự.',
                'email.required' => 'Vui lòng nhập email.',
                'email.email' => 'Email không đúng định dạng.',
                'email.max' => 'Email không được vượt quá 255 ký tự.',
                'email.unique' => 'Email đã được sử dụng.',
                'password.required' => 'Vui lòng nhập mật khẩu.',
                'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
                // Thêm các quy tắc và thông báo tùy chỉnh khác nếu cần
            ]
        );
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            event(new Registered($user));
            
            Auth::login($user);
            
        }catch (ValidationException $e){
            // $errors = $e->errors();
            // dd($errors);
            // session()->flash('error',implode('<br>', $errors));
           
            $errors = $e->errors();

        return redirect()->back()->withErrors($errors)->withInput();
        }
        return redirect(RouteServiceProvider::HOME);
    }
}
