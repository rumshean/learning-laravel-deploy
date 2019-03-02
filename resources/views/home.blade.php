<style>

</style>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Choose what you need</div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                            <table class="MenuClick">
                                <tr>
                                    <td>
                                        <h1><a href="/home/create">BNI320</a></h1>
                                    </td>
                                     <td>
                                        <h1><a href="/home/create2">BNI321</h1>
                                    </td>
                                     <td>
                                        <h1><a href="/home/create1">BNI322</a></h1>
                                    </td>
                                     <td>
                                        <h1><a href="/home/create3">BNI360</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <h1 align="center"><a href="/home/request">My request</h1>
                                </tr>
                            </table>                     
                        </div>
                        <br>
                    <div class="tablecontent">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
