<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;

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
        $fdata = food::find($id);
        $fdata->delete();
        return redirect()->back();
    }
    // end 

  

    //for food menu 

    public function foodmenu()
    {
        $fdata = food::all();
       return view("admin.foodmenu", compact("fdata"));
      
    }
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
