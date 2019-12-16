<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Detail;

class DetailController extends Controller
{
    
    public function index()
    {
    	$detail = Detail::all();
    	return view('detail.detail', ['detail' => $detail]);
    }
    public function delete($id)
    {

      $detail = Detail::find($id);
      $detail ->delete();
      return redirect('/home/detail');
    }
}