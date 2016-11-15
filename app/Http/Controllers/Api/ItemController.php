<?php

namespace Lost\Http\Controllers\Api;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Lost\Http\Requests;
use Lost\Http\Controllers\Controller;
use Lost\Models\Found;
use Lost\Models\ItemType;
use Lost\Models\Lost;

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
        /*return Found::all()->toArray()*/
        $founditems = DB::table('found')
            ->join('item_type', 'found.item_type_id', '=', 'item_type.id')
            ->select('found.*', 'item_type.name')
            ->orderby('date', 'DESC')
            /*->where('item_type.name', 'like', 'E%')*/
            ->take(5)->get()->toArray();
        return $founditems;
    }

    public function getLostItem()
    {

        $lostitems = DB::table('lost')
            ->join('item_type', 'lost.item_type_id', '=', 'item_type.id')
            ->select('lost.*', 'item_type.name')
            ->orderby('date', 'DESC')
            ->take(5)->get()->toArray();
        return $lostitems;
    }

    public function getFound()
    {
        $founditems = DB::table('found')
            ->join('item_type', 'found.item_type_id', '=', 'item_type.id')
            ->select('found.*', 'item_type.name')
            ->orderby('date', 'DESC')->get()->toArray();
        return $founditems;
    }

    public function getLost()
    {
        $lostitems = DB::table('lost')
            ->join('item_type', 'lost.item_type_id', '=', 'item_type.id')
            ->select('lost.*', 'item_type.name')
            ->orderby('date', 'DESC')->get()->toArray();
        return $lostitems;
    }

    public function getLostdetail(Request $request)
    {
        $id = $request->id;
        $lostitems = DB::table('lost')
            ->join('item_type', 'lost.item_type_id', '=', 'item_type.id')
            ->select('lost.*', 'item_type.name')
            ->where("id", 'LIKE', "%$id%")
            ->orderby('date', 'DESC')->get()->toArray();
        return $lostitems;
    }

    public function getSearchLost(Request $request)
    {
        $keywords = $request->keyword;
        $category = $request->category;
        $search = DB::table('lost')
            ->join('item_type', 'lost.item_type_id', '=', 'item_type.id')
            ->select('lost.*', 'item_type.name')
            ->where("item_type.id", '=', "$category")
            ->where("title", 'LIKE', "%$keywords%")
//                ->orwhere("model",'LIKE',"%$keywords%")
//                ->orwhere("title",'LIKE',"%$keywords%")
            ->orderby('date', 'DESC')->get()->toArray();

        return $search;
    }

    public function getSearchFound(Request $request)
    {
        $keywords = $request->keyword;
        $category = $request->category;
        $search = DB::table('found')
            ->join('item_type', 'found.item_type_id', '=', 'item_type.id')
            ->select('found.*', 'item_type.name')
            ->where("item_type.id", '=', "$category")
            /*->where("description",'LIKE',"%$keywords%")
            ->orwhere("model",'LIKE',"%$keywords%")*/
            ->orwhere("title", 'LIKE', "%$keywords%")
            ->orderby('date', 'DESC')->get()->toArray();

        return $search;
    }

    public function getLostDetailView($id)
    {
        $search = DB::table('lost')
            ->join('item_type', 'lost.item_type_id', '=', 'item_type.id')
            ->select('lost.*', 'item_type.name')
            ->where('lost.id', '=', $id)
            ->get()->toArray();
        return $search;
    }

    public function getFoundDetailView($id)
    {
        $search = DB::table('found')
            ->join('item_type', 'found.item_type_id', '=', 'item_type.id')
            ->select('found.*', 'item_type.name')
            ->where('found.id', '=', $id)
            ->get()->toArray();
        return $search;
    }

    public function getAI($id)
    {

        $userlost = DB::table('lost')
            ->select('lost.item_type_id')
            ->where("lost.user_id", '=', "$id")
            ->get()->toArray();
        $item_ids=array();
        foreach($userlost as $lostitem)
        {
            $item_ids[]=$lostitem->item_type_id;
        }

        $ai=DB::table('lost')

            ->join('item_type', 'lost.item_type_id', '=', 'item_type.id')
           ->select('lost.*','item_type.name')
            ->whereIn("item_type_id",$item_ids)
            ->where('user_id','<>',$id)
            ->take(5)
            ->get()->toArray();
        return $ai;
    }
}
