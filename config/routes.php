<?php

return array (
    
    //Товар: 
    'product/([0-9]+)' => 'product/view/$1', //ProductController и метод обрабатывает actionView
    //Каталог:
    'catalog' => 'catalog/index',   //CatalogController и метод actionIndex
    //Навигация по страницам: 
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
    //Категории:
    'category/([0-9]+)' => 'catalog/category/$1', 
    //Корзина
    'cart/delete' => 'cart/delete',
    'cart/checkout' => 'cart/checkout', //actionCheckout в CartController
    'cart/add/([0-9]+)' => 'cart/add/$1',   //actionAdd CartController
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cart' => 'cart/index', //actionIndex в CartController
    
    //Регистрация пользователя:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    
    //Управление товарами:
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',  
    //Управление категориями:
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    //Управление заказами:
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',
    //Админпанель:
    'admin' => 'admin/index',
    // О магазине
    'contacts' => 'site/contact',
    'about' => 'site/about',
    //Личный кабинет
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    //Контакты
    'contacts' => 'site/contact',
    //Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    '(^/*$)' => 'site/index', // actionIndex в SiteController
    
);

