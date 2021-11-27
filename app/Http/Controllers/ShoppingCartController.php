<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Book;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{
    public function addBook(Request $req){

        $id = Auth::user()->id;
        $shoppingCart = new ShoppingCart();


        //return dd($curBook);
        if($shoppingCart->where('userID', $id)
            ->where('bookID', $req->input('id'))
            ->exists())
        {
            $curBook = $shoppingCart->where('userID', $id)
                ->where('bookID', $req->input('id'))->first();
            //return(dd($curBook));

            $curBook->bookCount = $curBook->bookCount + $req->input('count');
            $curBook->save();
        }
        else{
            $shoppingCart->userID = $id;
            $shoppingCart->bookId = $req->input('id');
            $shoppingCart->bookCount = $req->input('count');

            $shoppingCart->save();
        }

        return redirect()->route('userBooks');

    }

    public function deleteBook(Request $req){
        $id = Auth::user()->id;
        $shoppingCart = new ShoppingCart();

        $curBook = $shoppingCart->where('userID', $id)
            ->where('bookID', $req->input('id'))->first();

        $curBook->delete();

        return redirect()->route('userBooks');
    }

    public function userBooks(){

        $books = Book::whereIn('id', function ($query){
            $query->select('bookId')
                ->from('shopping_carts')
                ->where('userID', Auth::user()->id)
                ->get();
        })->get();

        $shoppingCart = ShoppingCart::where('userID', Auth::user()->id)->get();

        for($i = 0; $i < count($books); $i+=1){
            $books[$i]->bookCount = $shoppingCart[$i]->bookCount;
        }
        //return dd($books);
        return view('userBooks', ['books' => $books]);
    }

}
