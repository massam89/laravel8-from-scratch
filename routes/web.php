<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
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

    $posts = Post::all();

    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('posts/{post}', function($slug){
//neat way

return view('post', ['post' => Post::find($slug)]);

//ugly way
    // if(!file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html")){
    //     return redirect('/');
    //     // abort(404);
    // }
    //                                         //we can add number in second
    // $post = cache()->remember("posts.{slug}", now()->addSecond(5), function() use ($path){
    //     var_dump('file_get_content');
    //     return file_get_contents($path);
    // });  

    // return view('posts', [
    //     'post' => $post
    // ]);
})->where('post', '[A-z_/-]+');

