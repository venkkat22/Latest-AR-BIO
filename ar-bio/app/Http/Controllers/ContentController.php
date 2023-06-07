<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function index()
    {
        $learning_content = Content::all();
        return view ('learning_content.index')->with('learning_content', $learning_content);
    }
    
    public function create()
    {
        return view('learning_content.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Content::create($input);
        return redirect('learning_content')->with('flash_message', 'content Addedd!');  
    }
    
    public function show($id)
    {
        $learning_content = Content::find($id);
        return view('learning_content.show')->with('learning_content', $learning_content);
    }
    
    public function edit($id)
    {
        $learning_content = Content::find($id);
        return view('learning_content.edit')->with('learning_content', $learning_content);
    }
  
    public function update(Request $request, $id)
    {
        $learning_content = Content::find($id);
        $input = $request->all();
        $learning_content->update($input);
        return redirect('learning_content')->with('flash_message', 'Content Updated!');  
    }
  
    public function destroy($id)
    {
        Content::destroy($id);
        return redirect('learning_content')->with('flash_message', 'Content deleted!');  
    }
}