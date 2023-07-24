<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function welcome() {

        $items = Item::where('is_accepted', true)->take(6)->orderBy('created_at','desc')->get();
        return view('welcome', compact('items'));
    }

    public function categoryShow(Category $category) {
        $items = $category->items->where('is_accepted', true);
        return view('categoryShow', compact('category', 'items'));
    }

    public function searchItems(Request $request) {
        $items = Item::search($request->searched)->where('is_accepted', true)->paginate(10);
        
        return view('items.search', compact('items'));
    }

    public function setLanguage($lang){

        session()->put('locale', $lang);

        return redirect()->back();
    }
}
