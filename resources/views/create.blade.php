@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body create-form">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <br>

                    <form action="/home" method="post">
                    <table class="MenuClick">
                        <tr>
                            <td>
                                <h1>BNI320</h1>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table class="table" id="bni320table">
                        <tbody>
                            <tr>
                                <th>Norek</th>
                                <th>StartDate</th>
                                <th>EndDate</th>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="norek1"/></td>
                                <td><input type="text" class="form-control" name="startdate1"/></td>
                                <td><input type="text" class="form-control" name="enddate1" /></td>
                             </tr>
                         </tbody>
                       </table>
                       
                       
                       {{ csrf_field() }}                       
                       <button class="btn btn-primary" onclick="HiddenNum()" type="submit">Execute</button>

                       
                       </form>
                       <br>
                       <button class="btn btn-default" onclick="AddRow()">AddRow</button>
                       <script>

                    if (num == null) {
                    var num = 2;
                    }
                        function AddRow(){
                    

                    var str1 = '<td><input type="text" class="form-control" name="norek';
                    var str2 = '"/></td>';
                    var str3 = str1 + num + str2; 

                    var str4 = '<td><input type="text" class="form-control" name="startdate';
                    var str5 = '"/></td>';
                    var str6 = str4 + num + str5;  

                    var str7 = '<td><input type="text" class="form-control" name="enddate';
                    var str8 = '"/></td>';
                    var str9 = str7 + num + str8;   

                    var tableRef = document.getElementById('bni320table').getElementsByTagName('tbody')[0];
                    var newRow   = tableRef.insertRow(tableRef.rows.length);
                    //var x=document.getElementById('bni320table').insertRow(0);
                    var y = newRow.insertCell(0);
                    var z = newRow.insertCell(1);
                    var w = newRow.insertCell(2);

                    y.innerHTML=str3;
                    z.innerHTML=str6;
                    w.innerHTML=str9;

                    num = num + 1;

                       }
                    function HiddenNum(){
                    
                    var str1 = '<td><input type="hidden" class="form-control" name="hidden" value="';
                    var str2 = '"/></td>';
                    var str3 = str1 + num + str2;


                    var tableRef = document.getElementById('bni320table').getElementsByTagName('tbody')[0];
                    var newRow   = tableRef.insertRow(tableRef.rows.length);
                    //var x=document.getElementById('bni320table').insertRow(0);
                    var y = newRow.insertCell(0);
                    var z = newRow.insertCell(1);
                    var w = newRow.insertCell(2);

                    y.innerHTML=str3;
                    }
                   </script>
                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection