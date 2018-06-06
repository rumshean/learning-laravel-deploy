<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rcinterface extends Model
{
   Route::post('/', function()
{
    $inputrc = new Rcinterface;
    $inputrc->norek = new norek;
    $inputrc->startdate = new startdate;
    $inputrc->enddate = new enddate;
    $inputrc->save();

    return Redirect::to("/home");
});


}
