<?php

namespace App\Http\Controllers;

use App\Models\Rifa;
use App\Models\User;
use App\Models\view;
use Illuminate\Http\Request;

class RifaController extends Controller
{
    private $rifa;
    public function __construct(Rifa $rifa)
    {
        $this->rifa = $rifa;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Rifa::latest()->get();
        return view('admin.pages.rifa.index', compact('data'));
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
    public function store(Request $request)
    {
        Rifa::factory()->count(50)->hasPosts(1)->create();
    }

    /**
     * Display the specified resource.
     */
    public function show(Rifa $rifa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rifa $rifa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rifa $rifa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rifa $rifa)
    {
        //
    }
}
