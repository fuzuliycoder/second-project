<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Http\Requests\MessageUpdateRequest;
class MessageController extends Controller
{
    // public function index(Request $request)
    // {
    //     dd($request->all());
    // }
    public function index(Request $request)
    {
        //$message=New Message();
        //$message->fill($request->all());
        // Message::create($request->all());
        
        // return back()->with('message', 'Saved');
        //     $data=[
        //         'name'=>$request->input('name'),
        //         'email'=>$request->input('email'),
        //         'subject'=>$request->input('subject'),
        //         'message'=>$request->input('message')
        //     ];
        //  Message::insert($data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MessageUpdateRequest $request)
    {
        Message::create($request->all());
        
        return back()->with('message', 'Saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        $infos=Message::paginate(2);
        return view('admin.info', compact('infos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Message::find($id);
        
        return view('admin.editmessage', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item = Message::find($id);
        $item->name = $request->name;
        $item->email = $request->email;
        $item->subject = $request->subject;
        $item->message = $request->message;
        $item->save();
        return redirect('showmessages');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $item = Message::find($id);
        $item->delete();
        return redirect()->back();
    }
}
