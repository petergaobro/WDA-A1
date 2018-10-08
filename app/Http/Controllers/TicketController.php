<?php

namespace App\Http\Controllers;

use App\UserDetails;
use App\Models\Ticket;
use App\CommentDetails;
use Illuminate\Http\Request;


class TicketController extends Controller
{
    public function create()
    {
        return view('ticket.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'Email' => 'required| between:5,100 | email',
            'First_name' => 'required',
            'Last_name' => 'required',
            'Operating_system_be_used' => 'required',
            'Software_issue' => 'required',
            'Description' => 'required',

        ]);


//        $rules = array(
//            'Email' => 'required|  between:5,100 | email ',
//        );
//        $input = Input::all();
//        $validation = Validator::make($input, $rules);
//
//
//        if ($validation->fails()){
//            //validation fails to send response with validation errors
//            // print $validator object to see each validation errors and display validation errors in your views
//            return Redirect::to('signup')->withErrors($validator);
//        }


        $allRequest = $request->all();
        $user_details = new UserDetails();
        $user_details->id = $user_details->id;
        $user_details->Email = $allRequest['Email'];
        $user_details->First_name = $allRequest['First_name'];
        $user_details->Last_name = $allRequest['Last_name'];
        $user_details->save();


        $tickets = new Ticket();

        $tickets->Operating_system_be_used = $allRequest['Operating_system_be_used'];
        $tickets->Software_issue = $allRequest['Software_issue'];
        $tickets->Description = $allRequest['Description'];
        $tickets->Status = 'Pending';
        $tickets->User_id = $user_details->id;
        $tickets->save();


        /*
         * Using sessions
         * */
        $request->session()->put('userDetails', $user_details);

        $request->session()->put('ticketDetails', $tickets);

        return redirect()->route('thankyou');

    }
}
