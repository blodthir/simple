<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Item;
use Auth;
class ItemSearchController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth',[
        'except'=>['index','create']
      ]);
    }

    /**
     * items列表
     */
    public function index(Request $request)
    {
        if($request->has('titlesearch')){
            $items = Item::search($request->titlesearch)
                     ->paginate(6);
        }else{
            $items = Item::paginate(6);
        }
        return view('users.item-search',compact('items'));
    }


    /**
     * 创建新的item
     */
    public function create(Request $request)
    {
        $this->validate($request,['title'=>'required']);

        $items = Item::create($request->all());
        return back();
    }
    public function destroy(Item $item)
    {
      $item->delete();
      session()->flash('success','删除成功');
      return back();
    }
}
