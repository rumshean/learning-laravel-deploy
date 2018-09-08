<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\rcmodel;
use App\rcusers;
use Auth;
use Illuminate\Support\Str;

class bnicontroller extends Controller
{


 //public function show(){
 ////$uuid = return (string) Str::uuid();
 //$random = str_random(40);
 //return view (home/create, ['batchids' => $random]);
 //}
      /**
     * Create a new controller instance.
     *
     * @return void
     */


   // public function show(){
   //  $rand = rand(1,100); 
   //  $date = date("dmYis"); 
   //  $batch_id= $rand.$date;
   //  //$batch_id = str_random(60);
   //  return view('create', ['batch_id' => $batch_id]);
   //  //return view('create', compact($batch_id));
   //  //return view('batch_id');
   // }

   


    public function __construct()
    {
        $this->middleware('auth');
    }
    
   public function index(){
        $rctable = rcmodel::all();
        
        return view('/home', compact($rctable));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
      // $validasi = Validator::make($request->all(), $rules);

        for($j=1;$j<$request->hidden;$j++) {
       $validator = $request->validate([
            'norek'.$j => 'required|numeric|digits:16',
            'startdate'.$j => 'required|numeric|digits:8',
            'enddate'.$j => 'required|numeric|digits:8'
           // if (empty('norek'.$j) && empty('startdate'.$j) && empty('enddate'.$j)) {
           //     return true;
           // }
        ]);
        } 
        if($validator == true){
            
                


        for ($i=1;$i<=$request->hidden;$i++){
            $a=$request->{'norek'.$i};
            $b=$request->{'startdate'.$i};
            $c=$request->{'enddate'.$i};


        if (isset($a) && isset($b) && isset($c)) 
        {    
            
        
        $rctable = new rcmodel();
        $users = new rcusers();
        $rctable->norek = $request->{'norek'.$i};
        $rctable->startdate = $request->{'startdate'.$i};
        $rctable->enddate = $request->{'enddate'.$i};
        $rctable->user_id = Auth::user()->id;
        $rctable->status = "waiting";
        $rctable->batch_id = $request->{'batch_id'};
        $rctable->save(); 
        $txt=$a." ".$b." ".$c." ".$rctable->id." ".Auth::user()->id." ".$rctable->status." ".$rctable->batch_id."\n";
        Storage::append('waiting/'.$request->{'batch_id'}.'.txt.unprocess',$txt);
        

        

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


