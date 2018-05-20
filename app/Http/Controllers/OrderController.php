<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreOrderRequest;
use App\Order;
use DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $orders=Order::all();
        return view('admin\order\index',compact('orders'));
    }


    public function search()
    {
        $searchString = \Input::get('searchString');
        $Order= DB::table('order')->where('first_name', 'like', '%' .$searchString.'%')->get();

        return view('admin\order\index',compact('Order'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\order\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $Order = new \App\Order;
        $Order->first_name = $request->first_name;
        $Order->last_name = $request->last_name;
        $Order->identity_num = $request->identity_num;
        $Order->tour_id = $request->tour_id;
        $Order->address = $request->address;
        $Order->comments = $request->comments;
        $Order->save();

        return \Redirect::route('order.index')->with('message','Commande ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Order=Order::find($id)->order;
        return view('admin\Order\show',array('supertravel'=> $Order));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order=Order::find($id);
        return view('admin\order\edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOrderRequest $request, $id)
    {
        $Order = Order::find($id) ;
        $Order->first_name = $request->first_name;
        $Order->last_name = $request->last_name;
        $Order->identity_num = $request->identity_num;
        $Order->tour_id = $request->tour_id;
        $Order->address = $request->address;
        $Order->comments = $request->comments;
        $Order->save();

        return \Redirect::route('order.index')->with('message','Commande mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id) ;
        $order->delete();

        return \Redirect::route('order.index')->with('message','Commande supprimée');
    }
}
