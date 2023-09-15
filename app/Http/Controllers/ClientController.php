<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('id', 'asc')->paginate(10);

        return inertia('Client', compact('clients'));
    }
}
