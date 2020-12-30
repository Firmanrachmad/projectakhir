<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use App\Review;

class MasterController extends Controller
{
    
    public function index() {
        $wisatasAll = Wisata::all();
        $wisatasp = \App\Wisata::paginate(3);
        // $wisatas = json_decode(json_encode($wisatasAll));
        // return view('master')->with(compact('wisatasAll'));
        // $value = Cache::rememberForever('wisatas', function(){
        //     return \App\Wisata::all();
        // });

        $reviewsAll = Review::all();
        // $reviews = json_decode(json_encode($reviewsAll));
        return view('master')->with(compact('reviewsAll', 'wisatasAll', 'wisatasp'));
        $value = Cache::rememberForever('reviews', function(){
            return \App\Review::all();
        });
    }
    /*public function getAll(){
        $wisata = Wisata::all();
        return view('master',['wisata=> $wisata']);
    }
    public function getById($id){
        $wisata = Wisata::find($id);
        return view('master',['wisata=> $wisata']);
    }*/
}
