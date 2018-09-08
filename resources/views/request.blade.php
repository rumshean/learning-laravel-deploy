<style>

</style>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Request</div>
                

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif   

                            </div>
                        <br>
                    <div class="tablecontent">
                
                        
                    @foreach($files as $file)
                    <p align="center"><a href="/download/{{ $file }}">
                    <?php
                 //echo $basename;
                   $basename   = basename($file);
                   $userid     = substr($basename,56,5).$user;
                   $pos        = strpos($basename, $userid);
                  
                    if($pos !== false){
                        echo $basename;
                    } else{
                        echo "";
                    }
                 
                    ?></p> <br>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection