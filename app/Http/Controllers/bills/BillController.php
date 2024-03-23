<?php

namespace App\Http\Controllers\bills;

use App\Http\Controllers\Controller;
use App\Models\Bills;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Bills::all();
        // return 
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bills $bills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bills $bills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bills $bills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bills $bills)
    {
        //
    }
}
