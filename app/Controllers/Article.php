<?php

namespace App\Controllers;

class Article extends BaseController
{
    public function index()
    {
        return view('article');
    }

    public function getArticle()
    {
    }
}
