<?php

namespace App\Http\Controllers\Admin;

use App\Models\Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TableRequest;

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pivot = Table::all();
       return view('admin.table',compact('pivot'));
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
    public function store(TableRequest $request)
    {
        Table::create([

            'name' => $request->name,
            'guest_number' => $request->input('guest_number'),
            'status' => $request->status,
            'location' => $request->location
        ]);

        return redirect()->back()->with('success', 'Menu updated successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $pvedit = Table::find($id);


       return view('admin.tables.tabledit',compact('pvedit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TableRequest  $request, string $id)
    {
        $pvtable = Table::findOrFail($id);

        $pvtable->update($request->validated());


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     
        $tabledel = Table::find($id);
        
        $tabledel->delete();

        return redirect()->back();

    }
}