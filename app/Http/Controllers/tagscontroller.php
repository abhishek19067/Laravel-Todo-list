<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tags;
use App\Models\item;

class tagscontroller extends Controller
{   function  index(){
    $data = Tags::all();
    return view('tags', compact('data'));
    
}
   
   public function store(Request $request)
   {
       $tags = new Tags();
       $tags->tags = $request->tag;
       $tags->user_id = auth::id();
       $tags->save();
       return redirect()->route('tags');
   }
    public function destroy($id)
    {
        $store = tags::find($id);
        if (!$store) {
            return redirect()->route('tags')->with('error', 'Data not found!');
        }
        $store->delete();
        return redirect()->route('tags')->with('success', 'Tag deleted successfully!');
    }
    
    public function edit($id)
    {
        $store = tags::find($id);
        if (!$store) {
            return redirect()->route('tags')->with('error', 'Data not found!');
        }
        return view('edittags', compact('store'));
    }
    
    public function update(Request $request, $id)
    {
        $store = tags::find($id);
        if (!$store) {
            return redirect()->route('tags')->with('error', 'Item not found!');
        }
        $store->tags = $request->input('text');
        $store->save();
    
        return redirect('tags')->with('success', 'Tag updated successfully!');
    }

    public function stores(Request $request)
{
    
    $data = new Data();
    $data->text = $request->input('text');
    $data->timer = $request->input('timer_value');
    $data->save();

    
    if ($request->has('tags')) {
        $tags = $request->input('tags')[$data->id];
        $data->tags()->sync($tags); 
    }

    return redirect()->back()->with('success', 'Data stored successfully with tags.');
}

}
