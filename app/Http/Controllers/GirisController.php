<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GirisController extends Controller
{
    public function form()
    {
        return view('login');
    }

    public function giris(Request $request)
    {
        $request->validate([
            'kullanici' => 'required',
            'sifre' => 'required',
        ]);

        if ($request->kullanici === config('blog.kullanici') && $request->sifre === config('blog.sifre')) {
            session(['giris_yapti' => true]);
            return redirect('/yeni');
        }

        return back()->with('hata', 'Kullanıcı adı veya şifre yanlış!');
    }

    public function cikis()
    {
        session()->forget('giris_yapti');
        return redirect('/');
    }
}
