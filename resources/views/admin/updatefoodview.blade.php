<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">

   @include("admin.admincss")
    <title>User data</title>
</head>
<body>
<x-app-layout>
    
    </x-app-layout>
    <div class="container-scroller">

          @include("admin.navbar")
        

          <div style = "position :relative; top:50px; right:-150px">
            <form action="{{url('/update', $data->id)}}" method = "post" enctype="multipart/form-data">
            @csrf
                <div>
                    <label for=""> Title</label>
                    <input style = "color:blue;" type="text" name="title" value="{{$data->title}}" required>
                </div>
                <div>
                    <label for=""> Price</label>
                    <input style = "color:blue;" type="number" name="price" value="{{$data->price}}" required>
                </div>
               
                <div>
                    <label for=""> Description </label>
                    <input style = "color:blue;" type="text" name="description" value="{{$data->description}}" required>
                </div>
                <div>
                    <label for=""> Old Image</label>
                    <img height ="200" width = "200"  src="/foodimage/{{$data->image}}" alt="">
                    </div> <div>
                    <label for=""> New Image</label>
                    <input style = "color:blue;" name= "image" type="file" required>
                </div>
                <div>
                    <input style ="color:black background color:white" type="submit" value ="Save">
                </div>
            </form>
    </div>


    @include("admin.adminscript")
</body>
</html>