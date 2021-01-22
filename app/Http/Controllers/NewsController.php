<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($id, $name)
    {
        return "Страница вывода новости $name из категории $id";
    }

}
