<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\rcmodel;
use App\rcusers;
use Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
 /**
 * 
 */
 class filecontroller extends Controller
 {
 	
 	public function show()
 	{
 	   $rctable = rcmodel::all();
	   $files = Storage::allFiles('output');

	  //foreach ($files as $file) {
	//	   $basename = basename($file);
	  //}

	   $user  	   = Auth::user()->id;
	   //$userid     = substr($basename,56,5).$user;
	   //$pos        =strpos($basename, $userid);
 	  //$files = Storage::disk('local')->exists('user_9');
 	   

      return view('request', compact(['files', 'user']));
 	}

 	public function ftpfile($id = null) 
 	{
		$files = Storage::allFiles('output');

		if (in_array($id, $files)) {
			return Response::download(storage_path()."/app/{$id}");
		}

		return abort(404);
 	}

}






?>