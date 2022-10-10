<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;

use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(15);
        return view('back.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $imageName = time().'_'.$request->image->getClientOriginalName();
        $request->image->storeAs('uploads', $imageName, 'public');

        $post->title = $request->title;
        $post->text = $request->text;
        $post->image = $imageName;
        $post->slug = $this->slug($request->title);
        $post->save();

        return redirect()->route('posts.index')->with('success',__('lang.created'));
    }

    public function slug($string, $separator = '-') {
        if (is_null($string)) {
            return "";
        }
    
        $string = trim($string);
    
        $string = mb_strtolower($string, "UTF-8");;
    
        $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);
    
        $string = preg_replace("/[\s-]+/", " ", $string);
    
        $string = preg_replace("/[\s_]/", $separator, $string);
    
        return $string;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('back.posts.view', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('back.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, $id)
    {
        $post = Post::findOrFail($id);

        $imageName = $post->image;
        if($request->image) {
            if(Storage::disk('public')->exists("uploads/$post->image")) {
                Storage::disk('public')->delete("uploads/$post->image");
            }
            $imageName = time().'_'.$request->image->getClientOriginalName();
            $request->image->storeAs('uploads', $imageName, 'public');
        }

        $post->title = $request->title;
        $post->text = $request->text;
        $post->image = $imageName;
        $post->slug = $this->slug($request->title);
        $post->save();

        return redirect()->route('posts.index')->with('success',__('lang.updated'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if(Storage::disk('public')->exists("uploads/$post->image")) {
            Storage::disk('public')->delete("uploads/$post->image");
        }
    
        $post->delete();

        return redirect()->route('posts.index')->with('success',__('lang.deleted'));

        //return to index page with deleted msg
    }
}
