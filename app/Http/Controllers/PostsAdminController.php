<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Posts;

use App\Tags;

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
        //dd($tagsIDs);
    	$nposts = $this->posts->create($request->all());
        $nposts->tags()->sync($this->getTagsIds($request->tags));
    	return redirect()->route('admin.posts.index');
    }

    public function edit($id){
    	$post = $this->posts->find($id);
    	return view('admin.posts.edit',compact('post'));
    }

    public function update($id,PostRequest $request){
    	$this->posts->find($id)->update($request->all());
        $post = $this->posts->find($id);
        $post->tags()->sync($this->getTagsIds($request->tags));
    	return redirect()->route('admin.posts.index');
    }

    public function destroy($id){
    	$this->posts->find($id)->delete();
    	return redirect()->route('admin.posts.index');
    }

    private function getTagsIds($tags){
        $tagList = array_filter(array_map('trim',explode(',',$tags)));
        $tagsIDs = [];
        foreach ($tagList as $tagname){
            $tagsIDs[] = Tags::firstOrCreate(['name'=>$tagname])->id;
        }
        return $tagsIDs;
    }
}
