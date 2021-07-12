<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user= User::paginate(5);
        return view('back.category.catcreate',compact('user'));


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
        return view('back.category.catcreate',compact('category'));
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

       $category = Category::firstOrCreate([
            'libelle'=>request('libelle')
        ]);
        $category->save();

        return back()->with('sMsg', $request->libelle );
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
    public function categoryList()
    {
        //
        $category = Category::all();
        $post = Post::with('categories')->orderBy('created_at','desc')->paginate(3);
            if (request('category')) {
            $post = Post::where('category_id',request('category'))->orderBy('created_at','desc')->paginate(10);
            return view('Acceuil',compact('category','post'));
}
return view('pages.category',compact('category','post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view('back.category.catcreate',[
            'category'=>$category
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category)
    {
        //
            $category->update($request->all());
        return redirect()->route('catcreate')->with('SuccessMsg', 'Modifiaction réussi' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return back()->with('dMsg', $category->libelle );

    }
}
