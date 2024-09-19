<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MessageControllerEnglish extends Controller
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
            'X-Vgai-Key' => 'uh2G1xNGR35KjFyUevZDEzP3mJatgZ', 
            'Content-Type' => 'application/json'
        ])->post('https://studio-api-us.ai.vonage.com/http/init', ['agent_id' => '66e98e03d262d7cd9882426b'])->json();
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
