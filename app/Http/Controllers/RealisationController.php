<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Realisation;


class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $realisation = Realisation::all();
        return view('index_1', compact('realisation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          
        return view('create_20');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $storeData = $request->validate([
            'fileTitle' => 'required|max:255',
            'fileName' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);
        $realisation = Realisation::create($storeData);

        return redirect('/realisations')->with('completed', 'Realisation has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $realisation = Realisation::findOrFail($id);
        return view('edit', compact('realisation'));
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
        
        $updateData = $request->validate([
            'fileTitle' => 'required|max:255',
            'fileName' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);
        Realisation::whereId($id)->update($updateData);
        return redirect('/realisations')->with('completed', 'Realisation has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $realisation = Realisation::findOrFail($id);
        $realisation->delete();

        return redirect('/realisations')->with('completed', 'Realisation has been deleted');
    }
    
}