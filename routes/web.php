<?php
//------------------ welcome.blade and about.blade and folder tasks -------------//
/*Route::get("/tasks" , 'TasksController@index');

Route::get("/tasks/{task}" , 'TasksController@show');*/

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('about', function () {
    //-------------------------------Send data to views-------------------//
    /* first way*/
/*return view('about' , [
        'name' => 'world'
    ]);*/
/*another way*/
/*return view('about')->with('name' , 'Asmaa');*/
/*$name = '7abibi';
    $age = 21;*/
/*another way*/
/*return view('about' , [
        'name' => $name
    ]);*/
/*another way*/
/*return view('about' , compact('name' , 'age')
    );
});*/
//------------------------- Fetch from database --------------------------------------------------------//
/*First way */
/*Route::get('about', function () {
    $tasks = DB::table('tasks')->latest()->get();
    return view('about' , compact('tasks'));
});*/
/*Another way*/
/*Route::get('/tasks/{id}', function ($id) {
    dd($id);   
    $tasks = DB::table('tasks')->find($id); 
    return view('about' , compact('tasks'));
});*/
/*Another way */
/*Route::get('/tasks/{task}', function ($id) {
    $task = DB::table('tasks')->find($id); 
    dd($task);
    return view('about' , compact('tasks'));
});*/
/*Route::get('/tasks', function () {
    //$tasks = DB::table('tasks')->latest()->get();
    $tasks = App\task::all(); 
    return view('tasks.index' , compact('tasks'));
});
Route::get('/tasks/{task}', function ($id) {
    //$task = DB::table('tasks')->find($id); 
    //$task = App\Task::find($id);
    $task = App\task::find($id);
    return view('tasks.show' , compact('task'));
});*/


//-------------- layout.blade ------------------------//
// Route::get('/', 'PostController@index');
// Route::get('/posts/create', 'PostController@create');
// Route::post('/posts', 'PostController@store');
// Route::get('/posts/{post}' , 'PostController@show');
// Route::post('/posts/{post}/comments', 'CommentsController@store');

// controller => PostsController
// model => Post
//migration => create_posts_table

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts' , 'PostController@index');
Route::get('/posts/create' , 'PostController@create');
Route::post('/posts' , 'PostController@store');
Route::get('/posts/{id}' , 'PostController@show');
Route::get('/posts/{id}/edit' , 'PostController@edit');
Route::put('/posts/{id}' , 'PostController@update');
Route::delete('posts/{id}', 'PostController@destroy');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
