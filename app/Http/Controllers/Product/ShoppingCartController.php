<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\ShoppingCart;
use App\Models\Product\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoppingCart = ShoppingCart::with(['product:id,name,price'])->where('user_id',Auth::User()->id)->where('ischeckout', 0)->get();
        return view('shoppingcart',compact('shoppingCart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shoppingCart = ShoppingCart::where('user_id',Auth::User()->id)->where('ischeckout', 0)->get();
        $transaction = [];
        DB::beginTransaction();
        try {
            foreach ($shoppingCart as $item) {
                $transaction[] = [
                    'shoppingcart_id' => $item->id,
                    'expire_time' => Carbon::now()->addHour(4),
                    'start_time' => Carbon::now(),
                    'status' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
                $item->ischeckout = 1;
                $item->save();
            }
            Transaction::insert($transaction);
            $status = 'success';
            DB::commit();
        } catch (\Throwable $th) {
            $status = 'failed';
            DB::rollBack();
        }
        
        return response()->json($status);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $shoppingcart = ShoppingCart::where('products_id',$request->products_id)->where('ischeckout',0)->where('user_id', Auth::User()->id)->first();
            if (!is_null($shoppingcart)) {
                $shoppingcart->update(['qty' => $shoppingcart->qty+$request->qty]);
            }else{
                $request->merge(['user_id' => Auth::User()->id]);
                ShoppingCart::create($request->all());
            }
            $shoppingcount = ShoppingCart::where('user_id', Auth::User()->id)->where('ischeckout',0)->count(['products_id']);
        } catch (\Throwable $th) {
            $shoppingcount = $th->getMessage();
        }

        return response()->json($shoppingcount);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shoppingCart = ShoppingCart::where('user_id',Auth::User()->id)->where('ischeckout', 0)->count();
        return response()->json($shoppingCart);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            ShoppingCart::find($id)->delete();
            $response = 'success';
        } catch (\Throwable $th) {
            $response = 'failed';
        }

        return response()->json($response);
    }
}
