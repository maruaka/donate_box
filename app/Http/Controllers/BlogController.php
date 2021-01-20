<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Validator;
use App\Models\Blog;
use App\Models\Donation;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $blogs = DB::table('blogs')->get();
        
        // // ddd($blogs);
        //  return view('blog.index',[
        //     'blogs'=> $blogs
        //     ]);
        
          //  $points = Donation::selectRaw('sum(point) as blog_id')
        //           ->groupByRaw('blog_id')
        //           ->get();
        
        $points = DB::table('donations')
                     ->select('blog_id',DB::raw('SUM(point) as points'))
                     ->groupBy('blog_id');
                    //  ->get();
        //  ddd($points);
        //  
        //  $points = Donation::where('blog_id','24')->sum('point');
        
         $blogs = DB::table('blogs')
                    ->leftJoinSub($points,'points',function($join){
                        $join->on('blogs.id','=','points.blog_id')
                        ->orderBy('blogs.created_at','desc');
                    })->get(); 
                    // ->get();
        // $blogs = DB::table('blogs')->get();
        //  ddd($blogs);
         
        return view('blog.index',[
            'blogs'=> $blogs
            ]);
           
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);
        // ddd($request['subtitle']);
            //   バリデーション
       $validator = Validator::make($request->all(), [
        'title' => 'required | max:191',
        'text_one' => 'required',
    ]);
    // バリデーション:エラー
    if ($validator->fails()) {
        return redirect()
        ->route('blog.create')
        ->withInput()
        ->withErrors($validator);
        }
        
        //   ddd($request->file('image_one'));
        $image_one = request()->file('image_one')->getClientOriginalName();
        $image_twe = request()->file('image_twe')->getClientOriginalName();
        $image_three = request()->file('image_three')->getClientOriginalName();
        
        $image_path_one = request()->file('image_one')->storeAs('public/storage/images/one',$image_one);
        // ddd($image_path_one);
         $image_path_twe = request()->file('image_twe')->storeAs('public/storage/images/twe',$image_twe);
    //   ddd($image_path_twe);
         $image_path_three = request()->file('image_three')->storeAs('public/storage/images/three',$image_three);

        
        
        $user_id = Auth::id();
        $user_name = Auth::user()->name;
        
        // ddd($user_id);
        
        
        $blog = Blog::create([
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'title'=>$request['title'],
            'subtitle'=>$request['subtitle'],
            'text_one'=>$request['text_one'],
            'text_twe'=>$request['text_twe'],
            'text_three'=>$request['text_three'],
            'file_name_one'=>$image_one,
            'file_path_one'=>$image_path_one,
            'file_name_twe'=>$image_twe,
            'file_path_twe'=>$image_path_twe,
            'file_name_three'=>$image_three,
            'file_path_three'=>$image_path_three
        ]);
        // ddd($blog);
  
    // ルーティング「todo.index」にリクエスト送信（一覧ページに移動）
    return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // $blog = Blog::find($id);
       
        // ddd($blog->points);
        // return view('blog.show',['blog'=>$blog]);
       
        $points = DB::table('donations')
                     ->select('blog_id',DB::raw('SUM(point) as points'))
                     ->groupBy('blog_id');
        // ddd($points);
        //   $blog= new stdClass();
          $show = DB::table('blogs')
                    // ->where('blog_id',$id)
                    ->leftJoinSub($points,'points',function($join){
                        $join->on('blogs.id','=','points.blog_id');
                    })->find($id); 
                    
                    // ddd($show);
        return view('blog.show',[
            'show'=> $show
            ]);
        // return view('blog.show',[
        //     'blog'=>$blog,
        //     'points' =>$points
        //     ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Blog::find($id)->delete();
  return redirect()->route('blog.index');
    }
}
