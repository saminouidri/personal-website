<?php
namespace App\Http\Controllers;

use App\Models\Article; // Assuming you have an Article model

class HomeController extends Controller
{
    public function index()
    {
        // Retrieve all articles from the database
        $articles = Article::all(); // Or you can use pagination if needed
        
        // Pass the articles to the view
        return view('home', ['articles' => $articles]);
    }
}
