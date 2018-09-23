<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\Storage;


class PostsController extends Controller
{

   public function __construct()
   {
       $this->middleware('auth',['except'=>['index','show']]);
   }

        public function index()
     {
         //$posts =   Post::orderBy('created_at','desc')->take(1)->get();
     //    $posts =   Post::orderBy('created_at','desc')->get();
     $posts =   Post::orderBy('created_at','desc')->paginate(6);
        //$posts =   DB::select('select * FROM posts');

         return view('posts.index')->with('posts',$posts);
     }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }



      public function store(){
$this->validate(request(),[
    'subject'=>'required',
'body'=>'required',
      'url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

     ]);

 $imageName = time().'.'.request()->url->getClientOriginalExtension();
$post=new Post;
$post->subject = request('subject');
$post->body      = request('body');
$post->user_id      =  auth()->user()->id;
$post->url =  $imageName;


$post->category_id=request('category->id');
$post->save();
   request()->url->move(public_path('upload'), $imageName);
  return redirect('/posts')->with('success', 'Done successfully');
       }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       $post  =   Post::find($id);

       return view('posts.show')->with('post',$post);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post  =   Post::find($id);
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error','Unauthorized');
        }



        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request ,[
            'subject'=>'required',
                  'body'=>'required'
           ]);
  // $path = $request->file('post_image')->storeAs('public/post_image',$fileNameStore);

        $post =   Post::find($id);
        $post->subject   = $request->input('subject');
            $post->body      = $request->input('body');

        $post->save();

                return redirect('/posts')->with('success', 'Done successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =   Post::find($id);
            $post->delete();
        return redirect('/posts')->with('success', 'Done successfully');
    }
}
