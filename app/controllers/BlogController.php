<?php

class BlogController extends BaseController {
public function index()
{
	$posts=Post::get();//post is model class name
	//print_r($posts);
return View::make('blog.view')->with('posts',$posts);//posts is column name in db and $posts declared varaible above
//

}

//public function getshowarticle(){
	// return View::make('blog.view');
//}
public function show_articles($id){

	$post=Post::find($id);
	return View::make('show.article')->with('post',$post);

}
  }