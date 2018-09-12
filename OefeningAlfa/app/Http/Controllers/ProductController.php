<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;

class ProductController extends Controller
{
      public function show(Products $id)
    {
      return view('pages.login', compact('id'));
    }
}
