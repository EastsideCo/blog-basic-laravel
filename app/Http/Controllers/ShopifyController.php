<?php

namespace App\Http\Controllers;

class ShopifyController extends Controller
{
    public function index()
    {
        $shopifyApi = app('ShopifyAPI');
        $products = $shopifyApi->call('GET', 'admin/products.json&page=1');
        return view('index', (array) $products);
    }
}
