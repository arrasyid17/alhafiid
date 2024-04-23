<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): view
    {
        return view('home');
    }
    /**
     * Show the application dashboard.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin(): view
    {
        return view ('admin.home');
    }
     public function managerHome(): view
    {
        return view ('managerHome');
    }
    
    public function superadmin(): view
    {
        return view ('superadmin.home');
    }
    public function dosen(): view
    {
        return view ('dosen.home');
    }
    public function mahasiswa(): view
    {
        return view ('mahasiswa.home');
    }
    public function tendik(): view
    {
        return view ('tendik.home');
    }
    public function akademik(): view
    {
        return view ('akademik.home');
    }
    public function keuangan(): view
    {
        return view ('keuangan.home');
    }
    public function direktur(): view
    {
        return view ('direktur.home');
    }
    public function wd1(): view
    {
        return view ('wd1.home');
    }
    public function wd2(): view
    {
        return view ('wd2.home');
    }
    public function wd3(): view
    {
        return view ('wd3.home');
    }
    public function lppm(): view
    {
        return view ('lppm.home');
    }
    public function sdm(): view
    {
        return view ('sdm.home');
    }

}
