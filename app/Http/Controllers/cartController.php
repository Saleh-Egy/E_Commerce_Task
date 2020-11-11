<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->hasRole('customer')){
            $carts = Cart::addSelect(['product' => Product::select('name')
        ->whereColumn('id', 'carts.product_id')->where('user_id',Auth::user()->id)
        ])->simplePaginate(5);
    
        return view('cart/allCart', ['carts' => $carts]);
        }
        else{
            return abort(404);
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // return view('cart/addCart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$request->except('_method','_token');
      
        DB::table('carts')->where('id',$id)->update(
            ['quantity' => $request->quantity]
        );
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();
        
        return redirect('carts');
    }
}
