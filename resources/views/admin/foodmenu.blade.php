<!DOCTYPE html>
<html lang="en">
<head>
   @include("admin.admincss")
    <title>User data</title>
</head>
<body>
<x-app-layout>
    
    </x-app-layout>
    <div class="container-scroller">

          @include("admin.navbar")
          <div style = "position :relative; top:50px; right:-150px">
            <form action="{{url('/uploadfood')}}" method = "post" enctype="multipart/form-data">
            @csrf
                <div>
                    <label for=""> Title</label>
                    <input style = "color:blue;" type="text" name="title" placeholder="write a title " required>
                </div>
                <div>
                    <label for=""> Price</label>
                    <input style = "color:blue;" type="number" name="price" placeholder=" price " required>
                </div>
                <div>
                    <label for=""> Image</label>
                    <input style = "color:blue;" type="file" name="image" required>
                </div>
                <div>
                    <label for=""> Description </label>
                    <input style = "color:blue;" type="text" name="description" placeholder="write a description " required>
                </div>
                <div>
                    <input style ="color:black background color:white" type="submit" value ="Save">
                </div>
            </form>

            <div><table bgcolor ="lime">
            <tr>
                <th style = "padding:30px">Food Name</th>
                <th style = "padding:30px" >Price</th>
                <th style = "padding:30px">Description</th>
                <th style = "padding:30px">Image</th>
                <th style = "padding:30px">Action</th>

            </tr>
            @foreach($fdata as $fdata)
            <tr align ="center">
                <td>{{$fdata->title}} </td>
                <td>{{$fdata->price}}</td>
                <td>{{$fdata->description}}</td>
                <td> <img height ="200" width = "200" src ="/foodimage/{{$fdata->image}}" > </td>
                <td> <a href="{{url('/deletefoodmenu',$fdata->id)}}"> Delete</a></td>

            </tr>
            @endforeach
          </table>
        </div>
          </div>

          
    </div>


    @include("admin.adminscript")
</body>
</html>