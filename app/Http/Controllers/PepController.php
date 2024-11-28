<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::with('admin')->paginate(5);
        return view('users.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'player_name' => 'required',
            'username' => 'required',
            'player_password' => 'required',
            'student_id_number' => 'required',
        ]);

        Player::create($validatedData);
        return redirect()->route('users.index')->with('success', 'Successfully added!');
    }
}