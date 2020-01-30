<?php

namespace App\Http\Controllers;
use App\Post;
use Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class PostsController extends Controller
{   public function __construct()
    {
        $this->middleware('auth')->except(['show']);
         $this->middleware('subadmin')->except(['show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts',Post::orderBy('created_at','desc')->paginate(3));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'title'=>'required',            
            'image'=>'required|image|max:2024',
            'content'=>'required'
        ]);
        // dd($data);
        $slug=str_slug($data['title']);
        $imagePath=request('image')->storeAs('posts',$slug.'-post.png','public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(750,400);
        $image->save();  
        $post=Post::create([
            'user_id' =>  Auth::id(),
            'title' => $data['title'],
            'content' => $data['content'],
            'image'=>$imagePath,
            'slug' => $slug
        ]);      
        return redirect()->back()->with('success','You successfully created the Post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {   
        $data = $this->validate($request,[
            'title'=>'required',            
            'image'=>'required|image|max:2024',
            'content'=>'required'
        ]);
        $image_paths ='/storage/'.$post->image;  
        unlink(public_path() . $image_paths);
        $slug=str_slug($data['title']);
        $imagePath=request('image')->storeAs('posts',$slug.'-post.png','public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(750,400);
        $image->save();  
        $post->title =$data['title'];
        $post->title =$data['title'];
        $post->content =$data['content'];
        $post->image =$imagePath;
        $post->slug =$slug;
        $post->save();
        return redirect()->route('posts.index')->with('success','You successfully edited the Post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->image){
            $image_path ='/storage/'.$post->image;       
            unlink(public_path() . $image_path);
        }       
        $post->delete();
        return redirect()->back()->with('success','You successfully deleted the post.');
    }
}
