<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function home()
    {
        return view('testTemplate/home');
    }

    public function businessHome()
    {
        return view('testTemplate/businessHome');
    }

    public function contact()
    {
        return view('testTemplate/contact');
    }
    
    public function shop()
    {
        return view('testTemplate/shop');
    }

    public function detail()
    {
        return view('testTemplate/detail');
    }
    public function cart()
    {
        return view('testTemplate/cart');
    }
    public function chackout()
    {
        return view('testTemplate/chackout');
    }
    public function error()
    {
        return view('testTemplate/error');
    }
}
