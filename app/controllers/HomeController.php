<?php

class HomeController
{
    public function index()
    {
        include_once 'views/shop/home.php';
    }

    public function shop()
    {
        include_once 'views/shop/shop.php';
    }

    public function details()
    {
        include_once 'views/shop/details.php';
    }

    public function accounts()
    {
        include_once 'views/shop/accounts.php';
    }

    public function cart()
    {
        include_once 'views/shop/cart.php';
    }

    public function checkout()
    {
        include_once 'views/shop/checkout.php';
    }

    public function compare()
    {
        include_once 'views/shop/compare.php';
    }

    public function login_register()
    {
        include_once 'views/shop/login-register.php';
    }

    public function wishlist()
    {
        include_once 'views/shop/wishlist.php';
    }
}