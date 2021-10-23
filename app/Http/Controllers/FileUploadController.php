<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;

class FileUploadController extends Controller
{


  
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file_upload = FileUpload::all();
        return view('realisation', compact('file_upload'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function create(){
    return view('create_21');
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
       'fileTitle' => 'required',
            'fileName' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048'   
        ]);
        $file_upload = FileUpload::create($storeData);

        return redirect('/file_uploads')->with('completed', 'FileUpload has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file_upload = FileUpload::findOrFail($id);
        return view('edit_1', compact('file_upload'));
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
'fileTitle' => 'required',
            'fileName' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048'             
        ]);
        FileUpload::whereId($id)->update($updateData);
        return redirect('/file_uploads')->with('completed', '   FileUpload has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $file_uplaod = FileUpload::findOrFail($id);
        $file_upload->delete();

        return redirect('/file_uploads')->with('completed', 'FileUpload has been deleted');
    }
   
    
}