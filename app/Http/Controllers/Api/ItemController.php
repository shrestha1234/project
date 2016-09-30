<?php

namespace Lost\Http\Controllers\Api;

use Illuminate\Http\Request;

use Lost\Http\Requests;
use Lost\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function getCategory()
    {
        return Category::all();
    }
}
