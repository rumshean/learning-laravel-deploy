<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\rcmodel;
use App\rcusers;
use Auth;

class bnicontroller extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $rctable->save(); 
        $txt=$rctable->norek." ".$rctable->startdate." ".$rctable->enddate." ".$rctable->id." ".Auth::user()->id."\n";
            }
        }
        Storage::put('BNI320MAN.txt',$txt);
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


