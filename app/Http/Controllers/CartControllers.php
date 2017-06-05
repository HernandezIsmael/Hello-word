<?php

namespace HoneyHope\Http\Controllers;

use Illuminate\Http\Request;

use HoneyHope\Http\Requests;
use HoneyHope\Http\Controllers\Controller;
use HoneyHope\Models\TblProducto;
use Session;

class CartControllers extends Controller
{
    public function _construct()
    {
        if(!\Session::has('cart')) \Session::put('cart', array());
    }
    //mostrar Carrito

    public function show()
    {
        $cart = \Session::get('cart');
        //return \Session::get('cart');
        $total = $this->total();
        return view('public.carrito',compact('cart','total'));

    }
    //agrgar item
    public function add(TblProducto $product)
    {
        $cart= Session::get('cart');
        $product->quantity=1;
        $cart[$product->Vch_IdProducto] = $product;
        \Session::put('cart',$cart);

        return redirect()->route('cart-show');
    }

    /*public function hola(){
        $tabla = TblProducto::Consultas("vst_producto");
        return response()->json($tabla);
    }*/
 
    //eliminar item
    public function delete(TblProducto $product){
        $cart = \Session::get('cart');
        unset($cart[$product->Vch_IdProducto]);
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }
    //actualizar item
    public function update(TblProducto $product, $quantity){
        
        $cart = \Session::get('cart');
        $cart[$product->Vch_IdProducto]->quantity=$quantity;
        \Session::put('cart', $cart);
        return redirect()->route('cart-show');


    }
    //vaciar carrito
    public function trash(){
        \Session::forget('cart');
        return redirect()->route('cart-show');
    }
    //total a pagar
    private function total()
    {
        $cart = \Session::get('cart');
        $total=0;

        if(count($cart))
        {
           foreach ($cart as $item) {
            $total += $item->Flt_PrecioUnitario * $item->quantity;
            } 
            return $total;
        }else{
            return $total=0;

        }
        
        
    }

    public function orderDetail()
    {
        if(count(\Session::get('cart'))<=0) return redirect()->route('cart-show');
        $cart= \Session::get('cart');
        $total= $this->total();
        
        return view('public.order-detail',compact('cart','total'));
    }

}