<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Tags;
use App\Models\item;

class tagscontroller extends Controller
{  
    function  index(){
        $userId = auth()->id(); 
        $tags = DB::table('tags')->where('user_id', $userId)->get();
        return view('tags', compact('tags'));
    
}
   
   public function store(Request $request)
   {
       $tags = new Tags();
       $tags->name = $request->tag;
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
        $store->name = $request->input('text');
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

public function storeTags(Request $request)
{
    $itemId = $request->input('item_id');
    $tagIds = $request->input('tags'); 
    foreach ($tagIds as $tagId) {
        $tag = DB::table('tags')->where('id', $tagId)->first();

        if ($tag) {
            DB::table('item_tag')->insert([
                'item_id' => $itemId,
                'tag_id' => $tagId,
                'tag_name' => $tag->name, 
            ]);
        } else {
            return redirect()->back()->with('error', "Tag with ID $tagId does not exist.");
        }
    }

    return redirect()->back()->with('success', 'Tags assigned successfully!');
}

public function delete($id) {
    $item = Item::find($id);

    if (!$item) {
        return response()->json(['error' => 'Item not found!'], 404);
    }

    $item->delete();
    return response()->json(['success' => 'Item deleted successfully!']);
}
}



