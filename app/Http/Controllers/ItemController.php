<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function indexItem()
    {
        $items = Item::where('is_accepted', true)->orderBy('created_at','desc')->paginate(6);
        return view('items.index', compact('items'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showItem(Item $item)
    {
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Item $item)
    {
        File::deleteDirectory(storage_path('/app/public/items/' . $item->id));
        
        $item->delete();
        
        return redirect ()->route('user.profile')->with('message', 'Annuncio eliminato con successo');
        
    }
}
