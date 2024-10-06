<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;
//use Illuminate\Contracts\View\Factory as ViewFactory;
class MessagesController extends Controller
{
   protected $messages;
 //   protected $view;
 //   protected $redirect;

 //   public function __construct(Messages $messages, ViewFactory $view, Redirector $redirect)
 public function __construct()
 {
     //  $this->messages = $messages;
   /*     $this->view = $view;
        $this->redirect = $redirect;
        $this->middleware('auth', ['except' => ['create', 'store']]);
    */ }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $messages = $this->messages->getPaginated();
$messages=DB::table('messages')->get();
return view('messages.index',compact('messages'));
      //  return $this->view->make('messages.index', compact('messages'));
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
                "mensaje" => $request->input('mensaje'),  // Corrected syntax
                "created_at" => Carbon::now(),     // Corrected syntax
                "updated_at" => Carbon::now() // Corrected syntax

            ]);


            // Return a success message or redirect
            return redirect()->route('mensajes.index')->with('info', 'Your message has been sent!');

        // return redirect()->route('mensajes.create')->with('info', 'Your message has been sent!');
   //return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $message=DB::table('messages')->where('id',$id)->first();
        //
        return view('messages.show',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $message=DB::table('messages')->where('id',$id)->first();

        return view('messages.edit',compact('message'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateMessageRequest $request, string $id)
    {
        $data = $request->validated();

        //
        $message=DB::table('messages')->where('id',$id)->update(
            [
                "nombre" => $request->input('nombre'),   // Corrected syntax
                "email" => $request->input('email'),     // Corrected syntax
                "mensaje" => $request->input('mensaje'),  // Corrected syntax
                "updated_at" => Carbon::now() // Corrected syntax

            ]
        );

        return redirect()->route('mensajes.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('messages')->where('id',$id)->delete();
        return redirect()->route('mensajes.index');

        //
    }
}
