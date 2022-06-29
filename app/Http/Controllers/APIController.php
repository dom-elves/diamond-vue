<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function request()
    {
         //inital request
         $response = Http::get('https://deckofcardsapi.com/api/deck/new/shuffle/?deck_count=1');

         $deck = json_decode($response->body());
         //making sure this sticks with the same deck, creates a deck ID that can be used to draw cards
         $unique_deck = $deck->deck_id;
 
         //base uri for next request
         $base = 'https://deckofcardsapi.com/api/deck/';
 
         $draw = '/draw/?count=52';
 
         //built new uri with unique deck
         $all_cards = $base . $unique_deck . $draw;
 
         
         //rebuilding the query
         $response = Http::get($all_cards);
 
         //cards finally accessible in get request, does appear to randomise on refresh
         $deck = json_decode($response->body());
 
         //getting the cards actually out of the deck because the api is weird/removes uneccessary stuff
         $deck = $deck->cards;
         
         //API creates 10s as 0 e.g. 0H instead of 10h, loop through each card to replace 0s with 10s
         foreach ($deck as $card) {
             
             //get the code
             $code = $card->code;
 
             //remove last character, the suit 
             $suit = substr($code, -1);
             
             //check if the code contains a 0 (no others do)
             if (str_contains( $code, '0')) {
 
                 //new card code using suit 
                 $card->code = '10' . $suit;        
             } 
         }

         dd($deck);
    }
}
