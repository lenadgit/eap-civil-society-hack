<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::published()->paginate(9);

        return view('blog.index', compact('articles'));
    }

    public function detailed($slug)
    {
        $article = Article::with('categories')->FindBySlug($slug)->first();
        if (!$article) {
            $article = Article::FindBySlugLocale($slug)->first();
            if (!$article) {
                abort(404);
            }
        }

        return view('blog.detailed', compact('article'));
    }

    public function category($slug)
    {
        $category = ArticleCategory::FindBySlug($slug)->first();
        if (!$category) {
            $category = ArticleCategory::FindBySlugLocale($slug)->first();
            if (!$category) {
                abort(404);
            }
        }

        $articles = Article::published()->whereHas('categories', function ($query) use ($category) {
            $query->where('article_category.category_id', $category->id);
        })->paginate(9);


        return view('blog.index', compact('articles', 'category'));
    }

}
