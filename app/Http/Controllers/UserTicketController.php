<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class UserTicketController extends Controller
{
    public function index($user_id)
    {
        $ticket = Ticket::get()->where('user_id', $user_id);
        if (is_null($ticket))
            return response()->json('Data not found', 404);
        return response()->json($ticket);
    }
}
