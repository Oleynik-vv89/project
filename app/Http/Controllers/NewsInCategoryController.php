<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsInCategoryController extends Controller
{
public function index($id)
    {
        return 'Страница вывода новостей по категории '.$id;
    }

}
