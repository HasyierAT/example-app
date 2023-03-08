<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = DB::table('animals')->get();
        return view('CRUD', ['animals' => $animals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CRUDCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        DB::table('animals')->insert([
            'name' => $request->nama,
            'species' => $request->species,
        ]);

        return redirect('/crud')->with('message', 'Create Data Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detailAnimal = DB::table('animals')->where('id', $id)->get();

        return view('CRUDShow', ['detailAnimal' => $detailAnimal]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detailAnimal = DB::table('animals')->where('id', $id)->get();

        return view('CRUDEdit', ['detailAnimal' => $detailAnimal]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('animals')->where('id', $id)->update([
            'name' => $request->updateName,
            'species' => $request->updateSpecies,
        ]);

        return redirect('/crud')->with('message', 'Update Data Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('animals')->where('id', $id)->delete();

        return redirect('/crud')->with('message', 'Delete Data Success');
    }
}
