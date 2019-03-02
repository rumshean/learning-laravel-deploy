<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\rcmodel;
use App\rcusers;
use Auth;
use Illuminate\Support\Str;

class bnicontroller1 extends Controller
{


    public function create1()
    {
        $rctable = rcmodel::all();
        return view('create1', compact($rctable));
    }

    public function store1(Request $request)
    {
        //$rand = rand(1,100); 
        //$date = date("dmYis"); 
        //$batch_id= $rand.$date;
        //return view('create', ['batch_id' => $batch_id]);
    
      // $rules = [
      //         'norek1' => 'required|numeric|digits:16',
      //         'startdate1' => 'required|numeric|digits:8',
      //         'enddate1' => 'required|numeric|digits:8',
      // ];
      // $validasi = validator11::make($request->all(), $rules);

       $validator1 = $request->validate([
            'norek.*' => 'required|numeric|digits:19',
            'startdate.*' => 'required|numeric|digits:8',
            'enddate.*' => 'required|numeric|digits:8'
           // if (empty('norek'.$j) && empty('startdate'.$j) && empty('enddate'.$j)) {
           //     return true;
           // }
            ]);
        //$validator1 == true;
      if($validator1){
            
                


        for ($i=0;$i<sizeof($request->norek);$i++){
            $a=$request->norek[$i];
            $b=$request->startdate[$i];
            $c=$request->enddate[$i];

        if (isset($a) && isset($b) && isset($c)) 
        {    
            
        
        $rctable = new rcmodel();
        $users = new rcusers();
        $rctable->norek = $a;
        $rctable->startdate = $b;
        $rctable->enddate = $c;
        $rctable->user_id = Auth::user()->id;
        $rctable->status = "waiting";
        $rctable->batch_id = $request->{'batch_id'};
        $rctable->save(); 
        $txt=$a." ".$b." ".$c." ".$rctable->id." ".Auth::user()->id." ".$rctable->status." ".$rctable->batch_id;
        Storage::append('waiting/'.$request->batch_id.'.txt.unprocess',$txt);
        

        

            }

        }
        
        $request->session()->flash('status', 'Job is requested!');     
        return redirect('/home');       
         }
      
   }

    
   public function create2()
   {
       $rctable = rcmodel::all();
       return view('create2', compact($rctable));
   }

   public function store2(Request $request)
   {
       //$rand = rand(1,100); 
       //$date = date("dmYis"); 
       //$batch_id= $rand.$date;
       //return view('create', ['batch_id' => $batch_id]);
   
     // $rules = [
     //         'norek1' => 'required|numeric|digits:16',
     //         'startdate1' => 'required|numeric|digits:8',
     //         'enddate1' => 'required|numeric|digits:8',
     // ];
     // $validasi = validator11::make($request->all(), $rules);

      $validator1 = $request->validate([
           'norek.*' => 'required|numeric|digits:19',
           'startdate.*' => 'required|numeric|digits:8',
           'enddate.*' => 'required|numeric|digits:8'
          // if (empty('norek'.$j) && empty('startdate'.$j) && empty('enddate'.$j)) {
          //     return true;
          // }
           ]);
       //$validator1 == true;
     if($validator1){
           
               


       for ($i=0;$i<sizeof($request->norek);$i++){
           $a=$request->norek[$i];
           $b=$request->startdate[$i];
           $c=$request->enddate[$i];

       if (isset($a) && isset($b) && isset($c)) 
       {    
           
       
       $rctable = new rcmodel();
       $users = new rcusers();
       $rctable->norek = $a;
       $rctable->startdate = $b;
       $rctable->enddate = $c;
       $rctable->user_id = Auth::user()->id;
       $rctable->status = "waiting";
       $rctable->batch_id = $request->{'batch_id'};
       $rctable->save(); 
       $txt=$a." ".$b." ".$c." ".$rctable->id." ".Auth::user()->id." ".$rctable->status." ".$rctable->batch_id;
       Storage::append('waiting/'.$request->batch_id.'.txt.unprocess',$txt);
       

       

           }

       }
       
       $request->session()->flash('status', 'Job is requested!');     
       return redirect('/home');       
        }
     


  }

   public function create3()
   {
       $rctable = rcmodel::all();
       return view('create3', compact($rctable));
   }

   public function store3(Request $request)
   {
       //$rand = rand(1,100); 
       //$date = date("dmYis"); 
       //$batch_id= $rand.$date;
       //return view('create', ['batch_id' => $batch_id]);
   
     // $rules = [
     //         'norek1' => 'required|numeric|digits:16',
     //         'startdate1' => 'required|numeric|digits:8',
     //         'enddate1' => 'required|numeric|digits:8',
     // ];
     // $validasi = validator11::make($request->all(), $rules);

      $validator1 = $request->validate([
           'norek.*' => 'required|numeric|digits:19',
           'startdate.*' => 'required|numeric|digits:8',
           'enddate.*' => 'required|numeric|digits:8'
          // if (empty('norek'.$j) && empty('startdate'.$j) && empty('enddate'.$j)) {
          //     return true;
          // }
           ]);
       //$validator1 == true;
     if($validator1){
           
               


       for ($i=0;$i<sizeof($request->norek);$i++){
           $a=$request->norek[$i];
           $b=$request->startdate[$i];
           $c=$request->enddate[$i];

       if (isset($a) && isset($b) && isset($c)) 
       {    
           
       
       $rctable = new rcmodel();
       $users = new rcusers();
       $rctable->norek = $a;
       $rctable->startdate = $b;
       $rctable->enddate = $c;
       $rctable->user_id = Auth::user()->id;
       $rctable->status = "waiting";
       $rctable->batch_id = $request->{'batch_id'};
       $rctable->save(); 
       $txt=$a." ".$b." ".$c." ".$rctable->id." ".Auth::user()->id." ".$rctable->status." ".$rctable->batch_id;
       Storage::append('waiting/'.$request->batch_id.'.txt.unprocess',$txt);
       

       

           }

       }
       
       $request->session()->flash('status', 'Job is requested!');     
       return redirect('/home');       
        }
     
  }
}




//$this->validate($request, [
//            'norek'.$j => 'required|numeric|digits:16',
//            'startdate'.$j => 'required|numeric|digits:8',
//            'enddate'.$j => 'required|numeric|digits:8'
//        ]);
//123456789123456 12345678 12345678