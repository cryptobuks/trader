<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\BitcoinBuyerListing;
use App\BitcoinBuyMarket;
use App\BitcoinSellerListing;
use App\BitcoinSellMarket;

class BitcoinController extends Controller
{
    public function index(){
    	$buyers = BitcoinBuyMarket::orderBy('price', 'asc')->paginate(5);
    	$sellers = BitcoinSellMarket::orderBy('price', 'asc')->paginate(5);
    	return view('bitcoin.index', compact('buyers', 'sellers'));
    }

    public function buy(){
    	return view('bitcoin.buy');
    }
    
    public function buypost(Request $request){

    	$this->validate($request, [
            'bitcoin' => 'required|max:20',
            'price' => 'required|max:10',
        ]);

    	
    	//Bitcoin Listing for User
        $listing = new BitcoinBuyerListing;
        $listing->bitcoin = $request->bitcoin;
	    $listing->price = $request->price;
	    $listing->user_id = Auth::user()->id;

	    $listing->save();
	    
	    $market = BitcoinBuyMarket::where('price', $request->price)->first();
	    $seller = BitcoinSellMarket::where('price', '<=', $request->price)->first();

	    if ($seller == !null) {
	    	if ($seller->bitcoin <= $request->bitcoin) {
	    		$marketplus = $request->bitcoin - $seller->bitcoin;
	    		
	    		if ($market == !null) {
	    			$market->bitcoin = $market->bitcoin + $marketplus;
	    			$market->save();
	    		}else{
	    			if ($marketplus == !0) {
	    				$newmarket = new BitcoinBuyMarket;
				    	$newmarket->price = $request->price;
				    	$newmarket->bitcoin = $marketplus;
				    	$newmarket->save();
	    			}
	    			
	    		}
	    		
	    		$seller->delete();

	    	}
	    	else{
	    		$seller->bitcoin = $seller->bitcoin - $request->bitcoin;

	    		if ($seller->bitcoin == 0) {
	    			$seller->delete();
		    	}
		    	else{
		    		$seller->save();
		    	}
	    	}

	    	
	    }

	    elseif ($market == !null) {
	    	$market->bitcoin = $market->bitcoin + $request->bitcoin;
	    	$market->save();
	    } else {
	    	$newmarket = new BitcoinBuyMarket;
	    	$newmarket->price = $request->price;
	    	$newmarket->bitcoin = $request->bitcoin;
	    	$newmarket->save();
	    }

	    return back()->with('status', 'Your Listing Added on Market');
    }

    public function sell(){
    	return view('bitcoin.sell');
    }

    public function sellpost(Request $request){

    	$this->validate($request, [
            'bitcoin' => 'required|max:20',
            'price' => 'required|max:10',
        ]);

    	//Bitcoin Listing for User
        $listing = new BitcoinSellerListing;
        $listing->bitcoin = $request->bitcoin;
	    $listing->price = $request->price;
	    $listing->user_id = Auth::user()->id;

	    $listing->save();

	    $market = BitcoinSellMarket::where('price', $request->price)->first();
	    $buyer = BitcoinBuyMarket::where('price', '<=', $request->price)->first();

	    

	    if ($buyer == !null) {
	    	if ($buyer->bitcoin <= $request->bitcoin) {
	    		$marketplus = $request->bitcoin - $buyer->bitcoin;
	    		
	    		if ($market == !null) {
	    			$market->bitcoin = $market->bitcoin + $marketplus;
	    			$market->save();
	    		}else{
	    			if ($marketplus == !0) {
	    				$newmarket = new BitcoinSellMarket;
				    	$newmarket->price = $request->price;
				    	$newmarket->bitcoin = $marketplus;
				    	$newmarket->save();
	    			}
	    			
	    		}
	    		
	    		$buyer->delete();

	    	}
	    	else{
	    		$buyer->bitcoin = $buyer->bitcoin - $request->bitcoin;

	    		if ($buyer->bitcoin == 0) {
	    			$buyer->delete();
		    	}
		    	else{
		    		$buyer->save();
		    	}
	    	}

	    	
	    }
	    elseif ($market == !null) {
	    	$market->bitcoin = $market->bitcoin + $request->bitcoin;
	    	$market->save();
	    } else {
	    	$newmarket = new BitcoinSellMarket;
	    	$newmarket->price = $request->price;
	    	$newmarket->bitcoin = $request->bitcoin;
	    	$newmarket->save();
	    }

	    return back()->with('status', 'Your Listing Added on Market');
    }
}
