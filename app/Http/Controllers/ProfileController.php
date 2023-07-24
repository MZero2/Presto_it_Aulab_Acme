<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ProfileController extends Controller

{
    public function profile(Request $request) {
        $item_to_check = Item::where('is_accepted', null)->get()->sortByDesc('created_at');

        $currentItemId = $request->input('item');
        $item = $item_to_check->firstWhere('id', $currentItemId);

        return view('user.profile', compact('item_to_check', 'item'));
    }
    public function acceptItem(Item $item) {
        $item->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai approvato l\'annuncio');
        
    }
    
    public function rejectItem(Item $item) {
        $item->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti, hai rifiutato l\'annuncio');
        
    }
}