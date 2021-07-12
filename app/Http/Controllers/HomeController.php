<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
        $this->middleware('admin')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        $category = Category::get();
        $post = Post::with('categories')->orderBy('created_at','desc')->paginate(10);
            if (request('category')) {
            $post = Post::where('category_id',request('category'))->orderBy('created_at','desc')->paginate(3);
            return view('Acceuil',compact('category','post','user'));
}

        return view('Acceuil',compact('category','post'));
    }

    public function admin()
    {
        return view('admin');
    }
    public function userlist()
    {
        $user = User::paginate(5);
        return view('back.user.userlist',compact('user'));
    }
    public function useredit(User $user)
    {
        $user = User::all();
        return view('back.user.userlist',[
            'users'=>$user
        ]);
    }
    public function userupdate(Request $request , User $user)
    {
    $user->update($request->all());

        return redirect()->route('userlist')->with('SuccessMsg', 'Modifiaction réussi' );
    }

    public function userdestroy( User $user)
    {
        $user->delete();
        return back()->with('DestroyMsg',  $user->name);
    }





}
