<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Store;
use App\Models\tags;

class StoreController extends Controller
{
    public function index()
    {
        $userId = auth()->id(); 
        $tags = Tags::where('user_id', $userId)->get();
        $data = Store::with(['items.tags'])
                     ->where('user_id', $userId) 
                     ->get(); 
    
        return view('home', compact('data', 'tags'));
    }
    



    public function store(Request $request)
    {
        $validated = $request->validate([
            'text' => 'required|string|max:255',
            'timer_value' => 'required|string', 
        ]);
    
        $store = new Store();
        $store->text = $validated['text'];
        $store->timer = $validated['timer_value'];
      
        $store->user_id = Auth::id();   
        $store->save();
    
        return redirect()->route('home')->with('success', 'Data saved successfully!');
    }

    public function destroy($id)
    {
        $store = Store::find($id);
        if (!$store) {
            return redirect()->route('home')->with('error', 'Data not found!');
        }
        $store->delete();
        return redirect()->route('home')->with('success', 'Data deleted successfully!');
    }

    public function edit($id)
    {
        $store = Store::find($id);
        if (!$store) {
            return redirect()->route('home')->with('error', 'Data not found!');
        }
        $timer = "00:00";
        return view('edit', compact('store', 'timer'));
    }
    
    public function update(Request $request, $id)
    {
        $store = Store::find($id);
        if (!$store) {
            return redirect()->route('home')->with('error', 'Item not found!');
        }
    
        $store->text = $request->input('text');
        $store->timer = $request->input('timer');
        $store->save();
    
        return redirect()->route('home')->with('success', 'Item updated successfully!');
    }
    

public function deleteMultiple(Request $request)
{
    $request->validate([
        'ids' => 'required|array|min:1',
        'ids.*' => 'exists:store,id', 
    ]);
    Store::whereIn('id', $request->ids)->delete();
    return redirect()->back()->with('success', 'Selected records have been deleted.');
}
}
