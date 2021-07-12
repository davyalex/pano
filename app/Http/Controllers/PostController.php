<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('search','filtre');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
        $category = Category::all();
        $post = Post::with('categories')->orderBy('created_at','desc')->paginate(10);
            if (request('category')) {
            $post = Post::where('category_id',request('category'))->orderBy('created_at','desc')->paginate(3);
            return view('Acceuil',compact('category','post','user'));
}

        return view('Acceuil',compact('category','post'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('pages.post',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $data = $request->validate([
                'nom'=>'required',
                'ville'=>'required',
                'contact'=>'required',
                'genre'=>'required',
               
            ]);


            // $post = Post::create(requet()->all());
          
          if (Auth::check()) {
            $post= Post::FirstOrCreate([
                'nom'=>$request->nom,
                'ville'=>$request->ville,
                'contact'=>$request->contact,
                'genre'=>$request->genre,
                'description'=>$request->description,
                'category_id'=>$request->category_id,
                'user_id'=>$request->user()->id
            ]);
          }
            return back()->with('SuccessMsg','votre poste enregistré avec success');
    }




    public function mesposts(){


        $category = Category::all();
        $user = User::all();
        $post = Auth::user()->posts()->orderBy('updated_at','desc')->paginate(10);
        return view('back.user.mesposts',compact('category','post','user'));

    }

    public function search(Request $request){
        $category = Category::all();
        $user = User::all();
        $post = Post::all();
        $query = $request->input('q');
       $post = Post::select('posts.*')
       ->join('categories', 'posts.category_id', '=', 'categories.id')
       ->where('categories.libelle', 'like', "%$query%")
       ->orWhere('posts.ville', 'like', "%$query%")
       ->orderBy('created_at','asc')->paginate(6);
       return view('Acceuil',compact('category','post','user'));
      
                
            
       
        // $post= Post::join('categories','posts.id', '=' ,'posts.category_id')->where('categories.libelle','like',"%$query%")->select('posts.*')->get();
        //     dd($post);
            //    $post = Post::where('ville','like', "%$query%")->get();
            //    dd($post);
        // $post = Auth::user()->posts()->orderBy('updated_at','desc')->paginate(3);
        // return view('back.user.mesposts',compact('category','post','user'));

    }

    public function filtre(Request $request){
        $category = Category::all();
        $user = User::all();
        $post = Post::all();
        $search = $request->input('search');
        $query = $request->input('q');
       $post = Post::select('posts.*')
       ->join('categories', 'posts.category_id', '=', 'categories.id')
       ->where('categories.libelle', 'like', "%$query%")
       ->where('posts.ville', 'like', "%$search%")
       ->orderBy('created_at','asc')->paginate(6);
       return view('Acceuil',compact('category','post','user'));
      

    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, Category $category)
    {
        $category=Category::all();
         return view('back.user.mesposts',compact('category'),[
             'posts'=>$post,
             'categories'=>$category
         ]);
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
        //
        $data = $request->validate([
            'nom'=>'required',
            'ville'=>'required',
            'contact'=>'required',
            'genre'=>'required',
           
        ]);
        $post->update($request->all());
        return redirect()->route('post.mesposts')->with('SuccessMsg', 'Modifiaction réussi' );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return back()->with('dMsg','Poste supprimé');

    }


   
}
