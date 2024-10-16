<?php
namespace App\Http\Controllers;

use App\Models\Article; // Assuming you have an Article model
use Illuminate\Http\Request;    

class ArticleController extends Controller
{
    public function show($id)
    {
        // Fetch the article by ID (you could also use slug if you prefer)
        $article = Article::findOrFail($id);

        // Pass the article to the view
        return view('article', ['article' => $article]);
    }
}
