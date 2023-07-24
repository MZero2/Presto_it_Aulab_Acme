<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class RevisorController extends Controller
{
    public function index()
    {
        $item_to_check = Item::where('is_accepted', null)->first();
        $last_accepted_or_rejected_item = Session::get('last_accepted_or_rejected_item');

        return view('revisors.index', compact('item_to_check', 'last_accepted_or_rejected_item'));
    }

    
    public function acceptItem(Item $item)
    {
        $item->setAccepted(true);
        Session::put('last_accepted_or_rejected_item', $item);
        return redirect()->back()->with('message', "Hai approvato l'annuncio '{$item->name}'");
    }

    
    public function rejectItem(Item $item)
    {
        $item->setAccepted(false);
        Session::put('last_accepted_or_rejected_item', $item);
        File::deleteDirectory(storage_path('/app/public/items/' . $item->id));
        
        $item->delete();
        return redirect()->back()->with('message', "Hai rifiutato l'annuncio '{$item->name}");
    }

    public function undoAction()
    {
        $last_accepted_or_rejected_item = Session::get('last_accepted_or_rejected_item');

        if ($last_accepted_or_rejected_item) {
            $last_accepted_or_rejected_item->setAccepted(null);
            Session::forget('last_accepted_or_rejected_item');
        }

        return redirect()->back()->with('message', 'Ultima azione annullata con successo');
    }


    public function becomeRevisor(Request $request){
        $message =  $request->input('message');
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(), $message));

        return redirect('/')->with('message', 'La tua richiesta di diventare revisore è stata inviata');
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('message', 'Hai aggiunto un revisore');
    }

    public function formRevisor() {
        $user=Auth::user();
        if(Auth::user()->is_revisor){
            return redirect('/')->with('access.denied', 'Sei già Revisore!');
    } return view('mail.form_revisor',compact('user'));
}


}
