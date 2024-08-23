<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rules\Validacion;
use App\Models\Product;

class CartController extends Controller
{

    public function cart()  {
        $cartCollection = \Cart::getContent();
        return view('home.cart')->withTitle('ByteMex')->with(['cartCollection' => $cartCollection]);;
    }
    public function pago() {
        $cartCollection = \Cart::getContent();
        return view('home.pago')->with(['cartCollection' => $cartCollection]);
    }
    
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }

    public function Paymentconfirmation(Request $request) {
        
        $validatedData = $request->validate([
            'card-name' => 'required|string|max:255',
            'card-number' => 'required|digits:16',
            'card-expiration' => [
                'required',
                'regex:/^(0[1-9]|1[0-2])\/\d{4}$/',
                new Validacion
            ],
            'card-ccv' => 'required|digits:3',
        ], [
            'card-name.required' => 'El nombre en la tarjeta es obligatorio.',
            'card-number.required' => 'El número de la tarjeta es obligatorio.',
            'card-number.digits' => 'El número de la tarjeta debe tener exactamente 16 dígitos.',
            'card-expiration.required' => 'La fecha de expiración es obligatoria.',
            'card-expiration.regex' => 'La fecha de expiración debe tener el formato MM/AAAA.',
            'card-expiration.after_or_equal' => 'La fecha de expiración debe ser actual o futura.',
            'card-ccv.required' => 'El CVC/CCV es obligatorio.',
            'card-ccv.digits' => 'El CVC/CCV debe tener exactamente 3 dígitos.',
        ]);
    
        DB::table('pago')->insert([
            'card_name' => $validatedData['card-name'],
            'card_number' => $validatedData['card-number'],
            'card_expiration' => $validatedData['card-expiration'],
            'card_ccv' => $validatedData['card-ccv'],
            'total_amount' => \Cart::getTotal(),
        ]);
    
        \Cart::clear();
    
        return redirect()->route('payment.success.view')->with('success', '¡Pago realizado con éxito!');
    }
    
    
}

