<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{

    public function index()
    {
        $offers = Offer::all();
        return view('offers.index', compact('offers'));
    }

    public function show(Offer $offer)
    {
        return view('offers.show', compact('offer'));
    }

    public function create()
    {
        return view('offers.create');
    }
}
