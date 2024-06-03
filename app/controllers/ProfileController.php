<?php
class ProfileController extends Basecontroller{

	public function user($username){
		$user=User::where('username','=',$username);
		if($user->count()){
			$user=$user->first();
			return View::make('profile.user')
	        ->with('user',$user);//user page and $user is object to display info in user.blade.php ie{{$user->username}}
	   }
		return App::abort(404);
	}

	  public function index()
    {
        $users = User::all();
 
        return View::make('profile.user', ['username' => $users]);
    }
    public function members(){
    	$users = User::all();

        return View::make('profile.members', ['users' => $users]);
    	

    }
      public function addmemberspost(){
    	//$users = User::all();
     Author::create (array(
        'title'=>Input::get('name'),
        'body'=>Input::get('bio')    

       ) );
        
    return Redirect::route('add-members')
      ->with('message','Successfully added!');
    	

    }
 
  public function addmembersget(){
    	//$users = User::all();

        return View::make('profile.add');
    	

    }


}