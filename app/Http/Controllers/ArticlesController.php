<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Http\Request;
use Faker;


use App\Http\Requests;

class ArticlesController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        $articles = Article::where('publish', 1)->with(
            array('User' => function ($query) {
                $query->select('id', 'name');
            })
        )->orderBy('updated_at', 'desc')->paginate(5);;

        return view('articles.articles', compact('articles'));
    }

    public function admin($adminId)
    {

        //опубликовано
        if ($adminId == 1) {

            $articles = Article::where('publish', 1)->with(
                array('User' => function ($query) {
                    $query->select('id', 'name');
                })
            )->orderBy('updated_at', 'desc')->paginate(5);
            return view('admin.admin1', compact('articles'));
        }
        //Неопубликовано
        if ($adminId == 2) {

            $articles = Article::where('publish', 0)->with(
                array('User' => function ($query) {
                    $query->select('id', 'name');
                })
            )->orderBy('updated_at', 'desc')->paginate(5);
            return view('admin.admin2', compact('articles'));
        }

    }

    public function destroy($articleId)
    {
        Article::destroy($articleId);
        return redirect()->back();
    }

    public function update($articleId)
    {
        $article = Article::find($articleId);
        $article->publish = 1;
        $article->save();
        return redirect()->back();
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2',
            'body' => 'required|min:8'
        ]);

        $faker = Faker\Factory::create();
        $user = User::firstOrCreate(['name' => $request->name,
            'email' => $faker->email,
            'password' => bcrypt('pass')]);

        Article::create(['body' => $request->body,
            'user_id' => $user->id,
            'publish' => 0
        ]);

        return view('articles.succes',
            ['message' => 'Ваша статья будет добавлдена после проверки администратором']
        );

    }

}
