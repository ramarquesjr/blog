<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Posts;

use App\Http\Requests\PostRequest;

class PostsAdminController extends Controller
{
	private $posts;
	public function __construct(Posts $posts){
		$this->posts = $posts;
	}
	public function index(){
		$postss = $this->posts->paginate(10);
    	return view('admin.posts.index',compact('postss'));
    }

    public function create(){
    	return view('admin.posts.create');
    }

    public function store(PostRequest $request){
    	//dd($request->all());
    	$this->posts->create($request->all());
    	return redirect()->route('admin.posts.index');
    }

    public function edit($id){
    	$post = $this->posts->find($id);
    	return view('admin.posts.edit',compact('post'));
    }

    public function update($id,PostRequest $request){
    	$post = $this->posts->find($id)->update($request->all());
    	return redirect()->route('admin.posts.index');
    }
}
