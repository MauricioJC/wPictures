<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;
use App\Picture;

class PictureController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        return Picture::get();
    }

    public function search(){

    }

    public function mylist(){

    }

    public function create()
    {
        return view("picture.create");
    }

    public function rules(){
        return [
            'title'       => 'required|max:40',
            'tags'        => 'required',
            'description' => 'required|max:200'
        ];
    }

    public function store(Request $request)
    {
        $rules = $this->rules();
        $request->validate(Arr::set($rules,'image','required'));
        
        $picture = Picture::create($request->all());
        if($request->file('image')){
            $path = Storage::disk('public')->put('pictures', $request->file('image'));
            $picture->fill(['path'=>$path])->save();
        }
        return redirect()->route('picture.index');
    }

    public function show(Picture $picture)
    {
        return $picture;
    }

    public function edit(Picture $picture)
    {
        return view('picture.edit', compact('picture'));   
    }

    public function update(Request $request, Picture $picture)
    {
        $request->validate($this->rules());
        $picture->fill($request->all())->save();
        return redirect()->route('picture.index');
    }

    public function destroy(Picture $picture)
    {

    }
}
