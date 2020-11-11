<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Pagination\Paginator;
use App\Models\Category;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->simplePaginate(5);
        return view('admin/allProducts', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =Category::get();
        
        return view('admin/addProduct',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        // dd( $data['SKE']);
        $data=$request->all();

        $request->validate([
            'name'=>'required',
            'category_id'=>'required',
            'price'=>'required',
            // 'SKE'=>'required',
            'image'=>'mimes:png,jpg,jpeg,svg|max:1024',
        ]);
        $serial = range(0, 9999);
        shuffle($serial);
        $data['SKE'] = implode(array_slice($serial, 0, 1));
         if($request->image){
            $name = $request->name;
            $imgName = $name.'.'.$request->image->extension();
            $request->image->move(public_path('img'),$imgName);
            $data['image']=$imgName;
         }
        Product::create($data);

        return redirect('products')->with('success','inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $product = Product::with('category')->find($id);
        DB::table('carts')->insert(
            ['user_id'=>Auth::user()->id, 'product_id' => $id]
        );
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories =Category::get();
        $product = Product::find($id);
        return view('admin/addProduct',['product'=>$product,'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$request->except('_method','_token');
       // dd($data);
        $data['category_id']= $request->category_id;
        if($request->image){
            $name = $request->name;
            $imgName = $name.'.'.$request->image->extension();
            $request->image->move(public_path('img'),$imgName);
            $data['image']=$imgName;
        }
      
        $product = Product::where('id',$id)->update($data);

        return redirect('products')->with('success','updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        
        return redirect('products');
    }
}
