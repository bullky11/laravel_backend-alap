<?php

namespace App\Http\Controllers;

use App\Models\Bakelit;
use Illuminate\Http\Request;
class BackController extends Controller
{
    public function index() {
        $bakelits = response()->json(Bakelit::all()); 
        return $bakelits; 
    } 
 
    public function show($id){ 
        $bakelit = response()->json(Bakelit::find($id)); 
        return $bakelit; 
    } 
 
    public function store(Request $request){ 
        $bakelit = new Bakelit(); 

        $bakelit->id = $request->id; 
        $bakelit->user_id = $request->user_id; 
        $bakelit->band = $request->band; 
        $bakelit->created_at = $request->created_at; 
        $bakelit->updated_at= $request->updated_at; 
        $bakelit->save(); 
    } 
 
    public function update(Request $request, $id){ 
        $bakelit = Bakelit::find($id);  
        $bakelit->id = $request->id; 
        $bakelit->user_id = $request->user_id; 
        $bakelit->band = $request->band; 
        $bakelit->created_at = $request->created_at; 
        $bakelit->updated_at= $request->updated_at; 

        $bakelit->save(); 
    } 
}
