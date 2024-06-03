<?php 
public function showarticle($id){

	$post=Post::find($id);
	return View::make('show.article')
	->with('post',$post);
}