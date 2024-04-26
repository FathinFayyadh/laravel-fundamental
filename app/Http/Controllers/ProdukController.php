<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function product() {
        $products=[
            [
            'menu'=> 'vanila latte',
            'Price'=> 20000,
            'description'=>'Coffe yang sangat recomended',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRevvcMq882QZpZP2fDmi6G9vXtCvLbpcLgIQ&s'
        ],
        [
            'menu'=> 'vanila latte',
            'Price'=> 20000,
            'description'=>'Coffe yang sangat recomended',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1qzSsIM4CzdgehcPTLYY3jSux8PZlvWyxXw&s',  
        ],
        [
            'menu'=> 'vanila latte',
            'Price'=>20000,
            'description'=>'Coffe yang sangat recomended',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT13mjFYjep8D1sm6BejNh-mgaDcZdyISepoQ&s',

        ],
        [
            'menu'=> 'vanila latte',
            'Price'=>20000,
            'description'=>'Coffe yang sangat recomended',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT13mjFYjep8D1sm6BejNh-mgaDcZdyISepoQ&s',

        ]
        ];
        return view('landing', compact('products'));
    }

    public function form(){
        return view("form");
    
    }

    public function formCreate(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required',   
        ], [
            'name.required' => 'Error: Field nama wajib di isi!',
            'berat.required' => 'Error: Field berat wajib di isi!',
            'harga.required' => 'Error: Field harga wajib di isi!',
            'stock.required' => 'Error: Field stock wajib di isi!',
            'kondisi.required' => 'Error: Field kondisi wajib di isi!',
            'deskripsi.required' => 'Error: Field deskripsi wajib di isi!',   
        ]);

        // Jika validasi gagal, kembalikan pesan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        return redirect()->to(route('list.product') . '#list-product');
    }
}
