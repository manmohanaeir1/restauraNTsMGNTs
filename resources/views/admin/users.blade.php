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
        

         <div style = "position: relative; top:60px; right:-15 0px">
             <table bgcolor = "gray" border = "3px" >
                 <tr>
                     <th style ="padding:30px ">Name</th>
                     <th style ="padding:30px ">Email</th>
                     <th style ="padding:30px ">Action</th>
                     
                 </tr>
                 @foreach($data as $data)
                 <tr align ="center">
                     <td>{{$data->name}}</td>
                     <td>{{$data->email}}</td>
                        @if($data->usertype== "0")
                     <td> <a href="{{url('/deleteuser',$data->id)}}">delete</a> </td>
                     @else
                     <td> <a href="">Not allowed</a> </td>
                     @endif 
                 </tr>
                 
                 @endforeach
             </table>
         </div>
    </div>


    @include("admin.adminscript")
</body>
</html>