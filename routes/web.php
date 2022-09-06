<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LaravelCrud;
use Illuminate\Support\Str;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/search', function () {
    // Categories to search by for dropdown tab
    $categories = DB::table('categories')->get();
    return view('search', ['categories'=>$categories]);
});

// Options of tos or privacy for legal page
Route::get('/legal/{subsection}', function ($subsection) {
    return view('legal', ['subsection' => $subsection]);
})->where('subsection', '(tos|privacy)');


// Use the / to display home page
Route::get('/', function () {
    // The 5 latest blogs
    $posts = DB::table('blog_posts')->orderByDesc('created')->orderByDesc('id')->limit(5)->get();
    // Categories to search by for dropdown tab
    $categories = DB::table('categories')->get();
    return view('home', ['posts' => $posts], ['categories'=>$categories]);
});
// Use the /home to display home page
Route::get('/home', function () {
    // The 5 latest blogs
    $posts = DB::table('blog_posts')->orderByDesc('created')->orderByDesc('id')->limit(5)->get();
    // Categories to search by for dropdown tab
    $categories = DB::table('categories')->get();
    return view('home', ['posts' => $posts], ['categories'=>$categories]);
});

Route::get('/all_blog_posts', function () {
    // Display all from latest blogs
    $posts = DB::table('blog_posts')->orderByDesc('created')->orderByDesc('id')->get();
    return view('all_blog_posts', ['posts' => $posts]);
});

// Search for a specific ID in the database that returns a result
Route::get('/article/{id}', function ($id) {
    $posts = DB::table('blog_posts')->where('id', '=', $id)->get();
    return view('article', ['posts' => $posts]);
});

// SLUG SEARCH - Search for a specific category in the database that returns a result
Route::get('/category/{category}', function ($slug_title_search) {
    // Un slug the url with replace function
    $un_slug_title = Str::replace('-', ' ', $slug_title_search);
    $posts = DB::table('blog_posts')->where('category', 'LIKE', '%'.$un_slug_title.'%')->orderByDesc('created')->orderByDesc('id')->get();
    return view('category', ['posts' => $posts]);
});

// Search for a specific tag in the database that returns a result
Route::get('/tag/{tag}', function ($tag_search) {
    $posts = DB::table('blog_posts')->where('tags', 'LIKE', '%'.$tag_search.'%')->orderByDesc('created')->orderByDesc('id')->get();
    return view('tag', ['posts' => $posts]);
});

// Search for a specific tag in the database that returns a result
Route::get('/tag_view', function () {
    $tag_search = $_POST['tag_search'];
    $tags = DB::table('blog_posts')->where('tags', 'LIKE', '%'.$tag_search.'%')->get();
    return view('tagView', ['tags' => $tags]);
});

// Write an article to the database
Route::get('write_articles', [LaravelCrud::class, 'writeArticles']);
Route::post('addArticle', [LaravelCrud::class, "addArticle"]);
Route::post('addCategory', [LaravelCrud::class, "addCategory"]);


// Search by category
Route::get('searchView', [LaravelCrud::class, 'searchCategory']);
Route::post('searchView', [LaravelCrud::class, 'searchCategory']);
Route::post('searchCategory', [LaravelCrud::class, 'searchCategory']);

// Search by tag
Route::get('searchView', [LaravelCrud::class, 'searchTag']);
Route::post('searchView', [LaravelCrud::class, 'searchTag']);
Route::post('searchTag', [LaravelCrud::class, 'searchTag']);

// Search by id
Route::get('searchView', [LaravelCrud::class, 'searchId']);
Route::post('searchView', [LaravelCrud::class, 'searchId']);
Route::post('searchId', [LaravelCrud::class, 'searchId']);