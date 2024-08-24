<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function start(Request $request) {
        // $message = $request->input('msg');
        return Http::withHeaders([
            'X-Vgai-Key' => '8iaQsGY3hq4kKYWYFVxT41Z78hmnk3', 
            'Content-Type' => 'application/json'
        ])->post('https://studio-api-us.ai.vonage.com/http/init', ['agent_id' => '66c34d29b565b93b7cc20c5b'])->json();
        // return response()->json($response);
    }

    public function send(Request $request) {
        $message = $request->input('msg');
        $session_id = $request->input('session_id');
        $session_token = $request->input('session_token');
        return Http::withHeaders([
            'Authorization' => "Bearer $session_token", 
            'Content-Type' => 'application/json'
        ])->post("https://studio-api-us.ai.vonage.com/http/$session_id/step", ['input' => $message])->json();
        // return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
