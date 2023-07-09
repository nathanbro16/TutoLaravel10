<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/blog')->name('blog.')->group(function () {

    Route::get('/', function (Request $request) {
        /*
        $post = new \App\Models\Post();
        $post->title = 'Mon second article';
        $post->slug = 'mon-second-article';
        $post->content = 'Mon contenu';
        $post->save();
         ou
         
        $post = \App\Models\Post::create([
            'title' => 'Mon nouveau titre', 
            'slug' => 'nouveau-titre-test', 
            'content' => 'nouveau content'
        ]);

        return $post;
        */

       //$posts = \App\Models\Post::paginate(3, ['id', 'title']);
       //$posts = \App\Models\Post::where('id', '>', 1)->limit(1)->get();

        /*
        $post = \App\Models\Post::find(1);
        $post->title = 'Mon second article-new';
        $post->save();
        */
        


        //dd($posts);
       // return $posts;
        /*
        return [
             "link" => \route('blog.show', ['slug' => 'article',  'id' => 13])
        ]; 
        */

        return \App\Models\Post::paginate(25);
     })->name('index');
     
     Route::get('/{slug}-{id}', function (string $slug, string $id, Request $request) {
       
     })->where([
         'id' => '[0-9]+',
         'slug' => '[A-Za-z0-9\-]+'
     ])->name('show'); 
    
});

