<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CommentDetails;
use App\UserDetails;
use App\Models\Ticket;


class CommentController extends Controller
{
    protected $autoCheckFields =false;
    public function create()
    {
        $comments = new CommentDetails;
        return view('its.index');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required',
        ]);

        $allRequest = $request->all();


        $comment_details = new CommentDetails();
        $comment_details->Comment = $allRequest['comment'];
        $comment_details->Ticket_id = $allRequest['ticketid'];
        $comment_details->save();

        return redirect()->route('its.index')->with('success','Comment added successfully');
    }
}
