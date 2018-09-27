<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\KindProduct;

class ProductController extends Controller
{
    public function getSanPham($url){
    	$kind_product = KindProduct::where('url',$url)->first();
    	$product = Product::where('id_kind',$kind_product->id)
    						->where('available',1)
    						->select('id','name','img','created_at')
    						->get();
    	$product_all = Product::where('available',1)->orderby('id','desc')->take(15)->get();
    	return view('sanpham')->with(['product'=>$product,'product_all'=>$product_all]);
    	
    }
    public function getListProduct(){
    	return view('admin.listproduct');
    }
}
