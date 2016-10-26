<?php

namespace Lost\Http\Controllers\Api;

use Illuminate\Http\Request;

use Lost\Http\Requests;
use Lost\Http\Controllers\Controller;
use Lost\Models\Found;
use Lost\Models\ItemType;

class ItemController extends Controller
{

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getCategory()
    {
        return ItemType::all();
    }
    public function getFoundItem()
    {
        return Found::all();
    }
}
