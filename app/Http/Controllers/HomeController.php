<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;
use App\Modeels\User;
use App\Models\Food;
use App\Models\Cart;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data  = food::all();
        $user_id =Auth::id();
        $count = cart::where('user_id', $user_id)->count();

       return view("home", compact("data", "count"));

    }

    public function redirects()
    {
        $data  = food::all();

      $usertype  = Auth::user()->usertype;

      if($usertype =='1'){

          return view('admin.adminhome');

      }else{

        $user_id =Auth::id();
         
        $count = cart::where('user_id', $user_id)->count();

          return view('home', compact("data", "count"));  

      }

    }

    //start add cart
    public function addcart(Request $request, $id){
        if(Auth::id())
        {
            $user_id =Auth::id();

            $food_id = $id;

            $quantity = $request->quantity; 

            $cart = new cart;

            $cart->user_id =$user_id;

            $cart->food_id =$food_id;

            $cart->quantity =$quantity;
            
            $cart->save();


            return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }

    }
    //end add cart 

    //showcart

    public function showcart(Request $request, $id)

    {
        $count = cart::where('user_id',$id)->count();


        $rmvdata = cart::select('*')->where('user_id', '=', $id)->get();  // for remove cart

        $data = cart::where('user_id', $id)->join('food','carts.food_id', '=' , 'food.id')->get();
       // $total = $data->price * $data->quantity; 
        return view('showcart', compact("count", "data","rmvdata"));
        
    }
    //end showcart

      //removecart

      public function removecart($id)
      {
        $data = cart::find($id);
        $data->delete();

        return redirect()->back();
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
        //
    }
}
