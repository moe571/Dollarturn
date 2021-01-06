<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class contactController extends Controller
{
    public function index(Category $category)
    {
      return view("blog.contact");
    }
}
