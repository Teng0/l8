<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $id=7;
       // $posts = DB::select('select * from posts where id = ?', [1]);
       // $posts = DB::select('select * from posts where id = :id', ['id'=>5]);
//        $posts = DB::table('posts')
//            ->where('id',$id)
//            ->get();
       // $posts= DB::table('posts')->select('title')->get();
       // dd(now()->subDay());
      //  $posts =DB::table('posts')->where('created_at','=',now()->subDay())->orWhere('title','=','Dr.')->get();
       // $posts =DB::table('posts')->whereBetween('id',[5,20])->get();
     //   $posts=DB::table('posts')->whereNotNull('title')->get();
      // $posts =DB::table('posts')->select('title')->distinct()->get();
       // $posts = DB::table('posts')->orderBy('title','asc')->get();
      //  $posts = DB::table('posts')->oldest()->get();
      //  $posts = DB::table('posts')->inRandomOrder()->get();
       // $posts = DB::table('posts')->find($id);
       // $posts = DB::table('posts')->max('id');
       // $posts = DB::table('posts')->avg('id');
        //$posts = DB::table('posts')->insert(['title'=>'New Post','description'=>'New Body']);
        $posts = DB::table('posts')->where('id','=',21)->delete();

        dd($posts);
        return $posts;
        // Most of Query Methods
    }
}
