<?php

class HomeController extends BaseController {
public function index()
{
	$posts=Post::get();//post is model class name
	//print_r($posts);
return View::make('home')->with('posts',$posts);//posts is column name in db and $posts declared varaible above
//

}
//public function showarticle($id){

	//$post=Post::find($id);
	//return View::make('show.article')->with('post',$post);


}
