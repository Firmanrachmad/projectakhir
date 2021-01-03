<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use App\Review;
use Illuminate\Support\Facades\Gate;
Use Storage;
use PDF;

class WisataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        /*$this->middleware(function($request, $next){
            if(Gate::allows('admin')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });*/
    }
    
    public function index() {
        $wisatasAll = Wisata::all();
        $wisatasp = \App\Wisata::paginate(3);
        // $wisatas = json_decode(json_encode($wisatasAll));
        // return view('wisata')->with(compact('wisatasAll'));
        // $value = Cache::rememberForever('wisatas', function(){
        //     return \App\Wisata::all();
        // });

        $reviewsAll = Review::all();
        // $reviews = json_decode(json_encode($reviewsAll));
        return view('wisata')->with(compact('reviewsAll', 'wisatasAll', 'wisatasp'));
        $value = Cache::rememberForever('reviews', function(){
            return \App\Review::all();
        });
        
    }
    public function index1(){
        $wisata = Wisata::all();
        return view('manage',['wisata' => $wisata]);
    }
    public function index2(){
        $review = Review::all();
        return view('managereview',['review' => $review]);
    }
    public function add()
    {
        return view('addwisata');
    }
    public function add1()
    {
        return view('addreview');
    }
    public function addu()
    {
        return view('addreviewu');
    }
    public function create(Request $request)
    {
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
        Wisata::create([
        'title' => $request->title,
        'content' => $request->content,
        'featured_image' => $image_name
        ]);
        return redirect('/manage');
    }
    public function create1(Request $request)
    {
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
        Review::create([
        'title' => $request->title,
        'kategori' => $request->kategori,
        'comment' => $request->comment,
        'featured_image' => $image_name
        ]);
        return redirect('/managereview');
    }
    public function createu(Request $request)
    {
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
        Review::create([
        'title' => $request->title,
        'kategori' => $request->kategori,
        'comment' => $request->comment,
        'featured_image' => $image_name
        ]);
        return redirect('/home');
    }
    public function edit($id)
    {
        $wisata = Wisata::find($id);
        return view('editwisata',['wisata'=>$wisata]);
    }
    public function edit1($id)
    {
        $review = Review::find($id);
        return view('editreview',['review'=>$review]);
    }
    public function update($id, Request $request)
    {
        $wisata = Wisata::find($id);
        if($request->file('image')){
        $wisata->title = $request->title;
        $wisata->content = $request->content;
        if($wisata->featured_image && file_exists(storage_path('app/public/' . $wisata->featured_image)))
        {
            Storage::delete('public/'.$wisata->featured_image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $wisata->featured_image = $image_name;
        $wisata->save();
        }
        return redirect('/manage');

    }
    public function update1($id, Request $request)
    {
        $review = Review::find($id);
        if($request->file('image')){
        $review->title = $request->title;
        $review->kategori = $request->kategori;
        $review->comment = $request->comment;
        if($review->featured_image && file_exists(storage_path('app/public/' . $review->featured_image)))
        {
            Storage::delete('public/'.$review->featured_image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $review->featured_image = $image_name;
        $review->save();
        }
        return redirect('/managereview');

    }
    public function delete($id)
    {
    $wisata = Wisata::find($id);
    $wisata->delete();
    return redirect('/manage');
    }
    public function delete1($id)
    {
    $review = Review::find($id);
    $review->delete();
    return redirect('/managereview');
    }
    public function cetak_pdf(){
        $wisata = Wisata::all();
        $pdf = PDF::loadview('wisata_pdf',['wisata'=>$wisata]);
        return $pdf->stream();
    }
    public function cetak_pdf1(){
        $review = Review::all();
        $pdf = PDF::loadview('review_pdf',['review'=>$review]);
        return $pdf->stream();
    }
    /*public function getAll(){
        $wisata = Wisata::all();
        return view('wisata',['wisata=> $wisata']);
    }
    public function getById($id){
        $wisata = Wisata::find($id);
        return view('wisata',['wisata=> $wisata']);
    }*/
}