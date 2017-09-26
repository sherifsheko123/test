<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test',function(){
	 'hello word!';
});
//Route::resource('cars', 'CarController');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

/*
* this route will show a form to the user to send a message to us.
*/
Route::get('contactus', function(){
	return view('contactus');
});

/*
* this route will process the message and save it into the database.
*/
Route::post('contactus', function(){
	/*
	*  request()->all() returns all the data sent from the user.
	*/
	//request()->all();

	/*
	kol el data elly byb3tha el user el mafrod enha bt3egy 3an tare2 request()
	f 3shan access el name elly ba3to el user w el email w el messageha3mel keda :
	request()->name .. request()->email and so on
	*/

	$u = new \App\Contactus;
	$u->name = request()->name;
	$u->email = request()->email;
	$u->message = request()->message;

	$u->save();

	//b3d lama asyef el message el mafrod t3mel redirect ll user l nafs el saf7a elly kan feha
	return redirect('contactus');

});

/*
* we will return the form for posting a new post here
*/
Route::get('/post', function(){

	if (auth()->user()->role == 'admin') {
		return view('post');
	}else{
		return redirect('/home');
	}
})->middleware('auth');
/*
* we will process a new post here.
*/
Route::post('/post', function(){

	/*
	* we sent the image in a name called ( image )
	* to store this image, use the function save in the request method like this request()->image->store('path / folder name')
	* the path() function is used to get the path of the image .. and you need this path to save it with the post.
	* store function returns the new path of the image.
	*/

	if (auth()->user()->role == 'admin') {
		$u = new \App\Post;
		$u->content = request()->content;
		$u->image = request()->image->store('images');

		$u->save();
	}else{
		return redirect('/home');
	}

	/*
	3shan asta2bel image elly gaya ma3a erl post el mawdo3 hyb2a mo5talef shwya..
	w8 keda
	*/
})->middleware('auth');


Route::get('/admin/messages', function(){
	if (auth()->user()->role =='admin') {
		return view('messages');
	}else{
		return redirect('/home');
	}
})->middleware('auth');

/*
* we will define aroute here to let the admin reply to the sent messages.
*/

Route::get('/admin/messages/reply/{id}', function($id){
	/*
	* el mafrod lama el admin ydos 3la reply hygy f el route hena, w el {id} da 3bara 3an el id
		bta3 el message elly mafrod yrod 3aleha
	* ana m7tag a3mel pass l 2emet el id dy ll view 3shan el view y2dar ysta5dmo w  tzhar el message ll admin
	w t5aleh yrod 3aleha
	*/

	return view('reply')->with('id',$id);
});
Route::post('/admin/messages/reply', function(){
	/*
	* here we will send the response to the user
	*/

});