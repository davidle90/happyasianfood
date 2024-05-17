<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Davidle90\Settings\app\Models\Settings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        $settings = Settings::get();

        $info = [
            'monday' => $settings->where('key', 'monday')->first(),
            'tuesday' => $settings->where('key', 'tuesday')->first(),
            'wednesday' => $settings->where('key', 'wednesday')->first(),
            'thursday' => $settings->where('key', 'thursday')->first(),
            'friday' => $settings->where('key', 'friday')->first(),
            'saturday' => $settings->where('key', 'saturday')->first(),
            'sunday' => $settings->where('key', 'sunday')->first(),
            'holidays' => $settings->where('key', 'holidays')->first(),
            'adress' => $settings->where('key', 'adress')->first(),
            'city' => $settings->where('key', 'city')->first(),
            'zip_code' => $settings->where('key', 'zip_code')->first(),
            'phone_number' => $settings->where('key', 'phone_number')->first(),
            'email' => $settings->where('key', 'email')->first(),
        ];

        return view('auth.login', [
            'info' => $info
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
