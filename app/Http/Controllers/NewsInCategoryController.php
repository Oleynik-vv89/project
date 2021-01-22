<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsInCategoryController extends Controller
{
 public function index()
    {
        return view ('NewsInCategory', ['categoryList' => $this->categories], ['news' => $this->news]);
    }

}


