<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $posts=post::all();
        $posts=post::get();
        return view('posts.index',compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show()
    {
        //using scope
//        $posts=post::Abdo()->first();
//        return $posts;
      $posts =post::onlyTrashed()->get();
      return view('posts.show',compact('posts'));
    }

    public function edit( $id)
    {


        //علشان لو اليوزر دخل اي دي مش موجود نستخدم orfail
//الطريقة دي بيشيك علي ال id فقط
        $post =post::findorfail($id);
//        $post =post::where('id',$id)->first();
        return view('posts.edit',compact('post'));
//        if ($post){
//         return $post;
//        }
//        else{
//            return response("عفوا هذا الرقم غير موجود");
//        }

    }

    public function update(StorePostRequest $request,$id)
    {
        //first
//        $post =post::findorfail($id);
//        $post ->title =$request->title;
//        $post->body=$request->body;
//        $post->save();
//        return redirect()->route('posts.index');
        //secound
        $path= $this->uploadeimage($request,'admins');
        $post =post::findorfail($id);

        $post->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'path'=>$path,
        ]);
        return redirect()->route('posts.index');

    }

    public function destroy($id)
    {
        //first
//        $post =post::findorfail($id);
//        $post->delete();
//        return redirect()->route('posts.index');

        //secound
        post::destroy($id);
        return redirect()->route('posts.index');

    }

    public function restore($id)
    {
        Post::withTrashed()
            ->where('id', $id)
            ->restore();
      //لو عايز ارجع علي نفس الصفحة
     return redirect()->back();
    }
    public function forcedelete($id){
        Post::withTrashed()
            ->where('id', $id)
            ->forceDelete();
        //لو عايز ارجع علي نفس الصفحة
        return redirect()->back();
    }
    public function deletealltrancate(){
        DB::table('posts')->truncate();
        return redirect()->back();
    }
    public function store(StorePostRequest $request)
    {

        $path= $this->uploadeimage($request,'users');
        Post::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'path'=>$path,
        ]);
        return redirect('posts');
    }


//    public function indeximage(){
//        $posts = Post::all();
//        return view('posts/index',compact('posts'));
//    }
}
