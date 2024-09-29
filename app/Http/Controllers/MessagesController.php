<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     */

        // Inserting data into the 'messages' table
        public function store(CreateMessageRequest $request)
        {
            // Validating and retrieving the data
            $data = $request->validated();

            // Inserting data into the 'messages' table
            DB::table('messages')->insert([
                "nombre" => $request->input('nombre'),   // Corrected syntax
                "email" => $request->input('email'),     // Corrected syntax
                "mensaje" => $request->input('mensaje')  // Corrected syntax
            ]);

            // Return a success message or redirect
            return redirect()->route('messages.create')->with('info', 'Your message has been sent!');

        // return redirect()->route('messages.create')->with('info', 'Your message has been sent!');
   //return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
