<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function getAllMenu()
    {
        $menuHarga =[ 

            ['makanan' => 'Nasi Goreng', 'harga' => 25000],
            ['makanan' => 'Mie Goreng', 'harga' => 22000],
            ['makanan' => 'Ayam Bakar', 'harga' => 35000],
            ['makanan' => 'Soto Ayam', 'harga' => 30000],
            ['makanan' => 'Es Teh', 'harga' => 5000],
            ['makanan' => 'Es Jeruk', 'harga' => 6000],
            ['makanan' => 'Jus Alpukat', 'harga' => 12000],
            ['makanan' => 'Kopi Hitam', 'harga' => 10000],
        
        ];
        
        return response()->json([
            'info' => 'data berhasil',
            'data' => $menuHarga
        ]);
    }

    public function getMenu()
    {
        return view('menu');
    }

    public function getMenuDetail($menu, $harga)
    {
        return view('menu-detail', [
            'menu' => $menu,
            'harga' => $harga
        ]);
    }
}
