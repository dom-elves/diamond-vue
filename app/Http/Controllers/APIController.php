<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{

    public function index()
    {
        return view('/home');
    }

    public function buildPlayerList(Request $request)
    {
        $players_array = [];

        $players_array[] = $request->input('player-1');
        $players_array[] = $request->input('player-2');
        $players_array[] = $request->input('player-3');
        $players_array[] = $request->input('player-4');
        $players_array[] = $request->input('player-5');
        $players_array[] = $request->input('player-6');

        //casting to object so it can be looped through
        $players = (object) $players_array;

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
         
         //to find out how many cards are required for players
         $count = count($players_array);

         $total_player_cards = $count * 4;
         
         //slicing required board cards off the "end" of the deck
         $remaining_cards = array_slice($deck, $total_player_cards);

        //slicing the cards for the players
         $dealt_player_cards = array_slice($deck, 0, $total_player_cards);
         
         //created hands, will need to figure out how to do this for anything between 0 and 6 at some point
         $hands = array_chunk($dealt_player_cards, 4);
         
         $hand_1 = $hands[0];
         $hand_2 = $hands[1];
         $hand_3 = $hands[2];
         $hand_4 = $hands[3];
         $hand_5 = $hands[4];
         $hand_6 = $hands[5];
        
         return view('/table')->with(['players' => $players_array, 
                                      'hand_1' => $hand_1, 
                                      'hand_2' => $hand_2, 
                                      'hand_3' => $hand_3, 
                                      'hand_4' => $hand_4, 
                                      'hand_5' => $hand_5, 
                                      'hand_6' => $hand_6,
                                      'deck' => $remaining_cards]);
   
    }

}
