<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function getSellItems() {
        $items = Item::latest()->with('category', 'user')->get();
        return view('sell', ['items' => $items]);
    }

    public function openRequestSell($id) {
        return view('requestsell', ['item' => Item::findOrFail($id)]);
    }
}
