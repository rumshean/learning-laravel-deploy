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

                    <form action="/home/create2" method="post">
                    <table class="MenuClick">
                        <tr>
                            <td>
                                <h1>BNI321</h1>
                                <br>
                                <h7> Format : 19 digit di depan tambah 003 (spasi) ddmmyyyy (spasi) ddmmyyyy</h7>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h7>Batch ID :</h7>
                                <h7> <input type="text" class="form-control" name="batch_id" value="<?php $rand = rand(1,100); $date = date("dmYis"); $batch_id= 'BNI321'.$rand.$date; echo $batch_id ?>" align="center" readonly/></h7>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <table class="table" id="BNI321table">
                        <tbody>
                            <tr>
                                <th>Norek</th>
                                <th>StartDate</th>
                                <th>EndDate</th>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" onchange="validasiNorek(1)" name="norek[]" id='norek[]'/></td>
                                <td><input type="text" class="form-control" onchange="validasistartdate(1)" name="startdate[]" id ='startdate[]' /></td>
                                <td><input type="text" class="form-control" onchange="validasienddate(1)" name="enddate[]" id ='enddate[]' /></td>
                             </tr>
                         </tbody>
                       </table>
                       
                       
                       {{ csrf_field() }}                       
                       <button class="btn btn-primary" onclick="hidden1Num()" type="submit">Execute</button>

                       
                       </form>
                       <br>
                       <button class="btn btn-default" onclick="AddRow()">AddRow</button>
                       <script>

                            if (num == null) {
                            var num = 2;
                            }
                            function AddRow(){
                        

                                var str3 = '<td><input type="text" class="form-control" name="norek[]"/></td>'; 

                    var str6 = '<td><input type="text" class="form-control" name="startdate[]"/></td>';  

                    var str9 = '<td><input type="text" class="form-control" name="enddate[]"/></td>';  

                                var tableRef = document.getElementById('BNI321table').getElementsByTagName('tbody')[0];
                                var newRow   = tableRef.insertRow(tableRef.rows.length);
                                //var x=document.getElementById('BNI321table').insertRow(0);
                                var y = newRow.insertCell(0);
                                var z = newRow.insertCell(1);
                                var w = newRow.insertCell(2);

                                y.innerHTML=str3;
                                z.innerHTML=str6;
                                w.innerHTML=str9;

                                num = num + 1;

                            }
                            function validasiNorek(rek){
                                val = $('#norek'+rek).val();
                                console.log(val.length);
                                if(val == ''){
                                    alert('data tidak boleh kosong');
                                }
                                if(val.length < 19 || val.length > 19){
                                    alert('karakter harus 19 digit');
                                }
                                // if(val.size)
                                alert(val);
                            }

                            function validasistartdate(startdate){
                                val = $('#norek'+startdate).val();
                                console.log(val.length);
                                if(val == ''){
                                    alert('data tidak boleh kosong');
                                }
                                if(val.length < 8 || val.length > 8){
                                    alert('karakter harus 8 digit');
                                }
                                // if(val.size)
                                alert(val);
                            }

                            function validasienddate(enddate){
                                val = $('#norek'+enddate).val();
                                console.log(val.length);
                                if(val == ''){
                                    alert('data tidak boleh kosong');
                                }
                                if(val.length < 8 || val.length > 8){
                                    alert('karakter harus 8 digit');
                                }
                                // if(val.size)
                                alert(val);
                            }
                   </script>
                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection