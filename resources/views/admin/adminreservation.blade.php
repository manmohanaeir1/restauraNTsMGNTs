<!DOCTYPE html>
<html lang="en">
<head>
   @include("admin.admincss")
    <title>Reservation</title>
</head>
<body>

    <div class="container-scroller">

          @include("admin.navbar")
        

          <div style = "position: relative; top:70px; right:-150px">
            <table bgcolor ="gray" border=1px;>
                <tr>
                    <th style = "padding:30px;">Nmae</th>
                    <th style = "padding:30px;">Email</th>
                    <th style = "padding:30px;">phone</th>
                    <th style = "padding:30px;">guest</th>
                    <th style = "padding:30px;">date</th>
                    <th style = "padding:30px;">time</th>
                    <th style = "padding:30px;">message</th>
                </tr>
                @foreach($data as $data)
                <tr align ="center">
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->guest}}</td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->time}}</td>
                    <td>{{$data->message}}..</td>
                </tr>
                @endforeach
            </table>
          </div>
         
    </div>


    @include("admin.adminscript")
</body>
</html>