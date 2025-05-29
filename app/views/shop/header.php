<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--=============== FLATICON ===============-->
    <link
            rel="stylesheet"
            href="https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css"
    />

    <!--=============== SWIPER CSS ===============-->
    <link
            rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../public/shop/assets/css/styles.css"/>

    <title>Ecommerce Website</title>
</head>
<body>
<!--=============== HEADER ===============-->
<header class="header">
    <div class="header__top">
        <div class="header__container container">
            <div class="header__contact">
                <span>(+01) - 2345 - 6789</span>
                <span>Our location</span>
            </div>
            <p class="header__alert-news">
                Super Values Deals - Save more coupons
            </p>
            <a href="?page=login_register" class="header__top-action">
                Log In / Sign Up
            </a>
        </div>
    </div>

    <nav class="nav container">
        <a href="?page=index" class="nav__logo">
            <img
                    class="nav__logo-img"
                    src="../public/shop/assets/img/logo.svg"
                    alt="logo"
            />
        </a>
        <div class="nav__menu" id="nav-menu">
            <div class="nav__menu-top">
                <a href="?page=index" class="nav__menu-logo">
                    <img src="../public/shop/assets/img/logo.svg" alt=""/>
                </a>
                <div class="nav__close" id="nav-close">
                    <i class="fi fi-rs-cross-small"></i>
                </div>
            </div>
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="?page=index" class="nav__link active-link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="?page=shop" class="nav__link">Shop</a>
                </li>
                <li class="nav__item">
                    <a href="?page=accounts" class="nav__link">My Account</a>
                </li>
                <li class="nav__item">
                    <a href="?page=compare" class="nav__link">Compare</a>
                </li>
                <li class="nav__item">
                    <a href="?page=login_register" class="nav__link">Login</a>
                </li>
            </ul>
            <div class="header__search">
                <input
                        type="text"
                        placeholder="Search For Items..."
                        class="form__input"
                />
                <button class="search__btn">
                    <img src="../public/shop/assets/img/search.png" alt="search icon"/>
                </button>
            </div>
        </div>
        <div class="header__user-actions">
            <a href="?page=wishlist" class="header__action-btn" title="Wishlist">
                <img src="../public/shop/assets/img/icon-heart.svg" alt=""/>
                <span class="count">3</span>
            </a>
            <a href="?page=cart" class="header__action-btn" title="Cart">
                <img src="../public/shop/assets/img/icon-cart.svg" alt=""/>
                <span class="count">3</span>
            </a>
            <div class="header__action-btn nav__toggle" id="nav-toggle">
                <img src="../public/shop/assets/img/menu-burger.svg" alt=""/>
            </div>
        </div>
    </nav>
</header>