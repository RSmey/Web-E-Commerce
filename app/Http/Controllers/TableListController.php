<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Illuminate\Support\Facades\Input;
use Session;
use DB;
class TableListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.add');
    }
    public function indexPage()
    {
        //
        $product = Product::all();
        return view('pages.sport_store', compact('product'));
    }
    public function detail($id){

        $data = Product::find($id);
        return view('pages.detail', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $product = new Product;

        $product->name = $request->name;
        $product->type = $request->type;
        $product->companies = $request->companies;
        if($request->file('image')){
            $file = $request->file('image');
            $file->move(public_path(). '/logo_images/SportShop', $file->getClientOriginalName());

            $product->image = $file->getClientOriginalName();
        }
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();
        
        return redirect('/admin');
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

        return view('pages.list_products.show_page_page');
    }
    public function showmen(){

        $product = DB::table('products')->where('type','=', 'Men Clothes')->get();
        return view('pages.list_products.show_page_type', compact('product'));
    }
    public function showshoe(){

        $product = DB::table('products')->where('type','=', 'Shoe')->get();
        return view('pages.list_products.show_page_type', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editindex(){
        $datas = DB::select('select * from products');
        return view('pages.list_products.ball', compact('datas'));
    }
    public function edit($id)
    {
        //
        $datas = Product::find($id);

        return view('pages.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id = $request->id;
        $name = $request->name;
        $type = $request->type;
        $companies = $request->companies;
        $description = $request->description;
        $price = $request->price;
        $file = $request->file('image');
        $file->move(public_path(). '/logo_images/SportShop', $file->getClientOriginalName());
        $image = $file->getClientOriginalName();

        $datas = Product::find($id);

        $datas->name = $name;
        $datas->type = $type;
        $datas->companies = $companies;
        $datas->price = $price;
        $datas->description = $description;
        $datas->image = $image;

        $datas->save();

        echo "Successful....!".$datas->name."/ ". $datas->type."/ ".$datas->companies."/ ".
        $datas->price."/ ".$datas->description."/ ".$datas->image;
        
        return redirect('/list_data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Product::where('id', $id)->delete();

        return redirect('list_data');
    }
}
