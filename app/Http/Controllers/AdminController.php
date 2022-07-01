<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\reservation;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        $data=user::all();

       return view("admin.users", compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
       
    }
    //delete deletefoodmenu
    public function deletefoodmenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }
    // end 

  

    //for food menu 

    public function foodmenu()
    {
        $data = food::all();
       return view("admin.foodmenu", compact("data"));
      
    }
    

    //updatefoodview
    public function updatefoodview($id )
    {
        $data = food::find($id);
        return view("admin.updatefoodview", compact("data"));
    }
    // end 

    public function upload(Request $request)
    {
       $data = new food;

       $image = $request->image;
       $imagename = time() .' . '. $image->getClientOriginalExtension();
       $request->image->move('foodimage', $imagename);
       $data->image= $imagename;
       $data->title = $request->title;
       $data->price = $request->price;
       $data->description = $request->description;
        $data->save();

        return redirect()->back();
    }


    // end food menu

    // for update food menu

    public function update(Request $request, $id)
    {
        $data = food::find($id);

        $image = $request->image;
        $imagename = time() .' . '. $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image= $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
         $data->save();
 
         return redirect()->back();  


    }

    // end update food menu

    // for reservation food

    public function reservation(Request $request)
    {
       $data = new reservation;
       $data->name = $request->name;
       $data->email= $request->email;
       $data->phone= $request->phone;
       $data->guest= $request->guest;
       $data->date= $request->date;
       $data->time= $request->time;
       $data->message = $request->message;
        $data->save();
        return redirect()->back();
    }

    //end reservation


    public function viewreservation()
    {
        $data = reservation::all();
        return view("admin.adminreservation", compact("data"));
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
    // public function update(Request $request, $id)
    // {
    //     //
    // }

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
