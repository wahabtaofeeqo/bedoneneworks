<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Codenixsv\CoinGeckoApi\CoinGeckoClient;

use App\Testimonials;
use App\Newsletter;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $client = new CoinGeckoClient();
        $data = $client->coins()->getMarkets('usd');
        $testimonials = Testimonials::all()->toArray();

        return view('index', compact('data', 'testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
       return "Hello World";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $to = "taofeekolamilekan218@gmail.com";
        $resource = "";
        $error;

        $email = $request->get("email");
        $message = $request->get("message");

        if (!empty($email) && !empty($message)) {
            
            $header = "From: $email";

            try {
                mail($to, "Hello", $message, $header);
                $response = "Email sent. Thank you";
            } catch (Exception $e) {
                $response = "Email not sent: " . $e->getMessage();
            }
        }
        else {

            $response = "Email and Message must be provided";
        }

        return $request->get("message");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    public function subscribe(Request $request) {

        $response;
        $email = $request->get("email");

        if (!empty($email)) {
            
            $obj = new Newsletter;
            
            $obj->email = $email;
            $obj->save();

            $response = "Subscribed. Thank You";
        }
        else {
            $response = "Email not provided";
        }

        return $response;
    }
}
