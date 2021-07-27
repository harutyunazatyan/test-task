<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blockSize = 2;
        $page = 1;
        $offset = ($page - 1 ) * $blockSize;
        $items = Item::where('isActive', 1)->offset($offset)->limit($blockSize)->get();
        $item_count = Item::get()->count();
        $page_count = round($item_count/2);

        return view('item',compact(['items', 'page_count']));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paginate(Request $request){

        $blockSize = 2;
        $page = intval($request->post('page'));
        if ($page<1){
            $page = 1;
        }

        $offset = ($page - 1 ) * $blockSize;
        if($request->post('data_sort') && $request->post('sort_type')){
            $items = Item::where('isActive', 1)->offset($offset)->limit($blockSize)->orderBy($request->post('data_sort'), $request->post('sort_type'))->get();
        }else{
            $items = Item::where('isActive', 1)->offset($offset)->limit($blockSize)->get();
        }

        return view('ajax_response', compact('items'));
    }
}
