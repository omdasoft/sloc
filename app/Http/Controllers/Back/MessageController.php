<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\MydemoMil;
use App\Models\Message;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::latest()->paginate(15);
        
        return view('back.messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::findOrFail($id);

        return view('back.messages.view', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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

    public function reply(Request $request) {
        $email= $request->email;
        $id = $request->id;
        $details = [
            'title' => 'الرخصة السودانية لتشغيل الحاسوب - الدعم الفني',
            'reply' => $request->reply,
            'url'   => 'http://sloc.gov.sd'
        ];

        Mail::to($email)->send(new MydemoMil($details)); 

        $this->updateMessageStatus($id);


        return redirect()->route('messages.index')->with('success', __('lang.mail_sent'));
    }

    public function updateMessageStatus($id) {
        $message = Message::findOrFail($id);
        $message->replied = 1;
        $message->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return redirect()->route('messages.index')->with('success',__('lang.deleted'));

    }
}
