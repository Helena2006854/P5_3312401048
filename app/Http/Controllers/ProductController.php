<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show() {
        $data = [
            ['id' => 1, 'produk' => 'Kamera Canon'],
            ['id' => 2, 'produk' => 'Tripod'],
            ['id' => 3, 'produk' => 'Lensa Fix'],
        ];
    
        return view('list_product', compact('data'));
    }
    
}
