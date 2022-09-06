<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelCrud extends Controller
{
    // Display options of categories to choose from
    function writeArticles()
    {
        $categories = DB::table('categories')->get();
        return view('write_articles', ['categories' => $categories]);
    }

    // Capture a new article
    function addArticle(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_main' => 'required',
            'content' => 'required'
        ]);

        $query = DB::table('blog_posts')->insert([
            'title' => $request->input('title'),
            'category' => $request->input('category_main'),
            'tags' => $request->input('tags'),
            'content' => $request->input('content'),

        ]);

        if ($query) {
            return back()->with('success', 'Article is successfully captured');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    // Capture a new category
    function addCategory(Request $request)
    {

        $query = DB::table('categories')->insert([
            'category' => $request->input('add_new_category'),

        ]);

        if ($query) {
            return back()->with('success', 'It is successfully captured');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    // Search by a specific Category
    function searchCategory(Request $request)
    {
        
        $posts = DB::table('blog_posts')->where('category', 'LIKE', '%' . $request->input('category_main') . '%')->orderByDesc('created')->orderByDesc('id')->get();
        return view('searchView', ['posts' => $posts]);
    }

    // Search by a specific Tag
    function searchTag(Request $request)
    {
        $posts = DB::table('blog_posts')->where('tags', 'LIKE', '%' . $request->input('tag_search') . '%')->orderByDesc('created')->orderByDesc('id')->get();
        return view('searchView', ['posts' => $posts]);
    }

     // Search by a specific ID
     function searchId(Request $request)
     {
         $posts = DB::table('blog_posts')->where('id', '=', $request->input('id_search'))->get();
         return view('searchView', ['posts' => $posts]);
     }


}