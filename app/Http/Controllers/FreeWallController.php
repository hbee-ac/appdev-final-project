<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FreeWall;

class FreeWallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $posts = $request->user()->freeWalls;
        return response()->json($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'post' => 'required',
        ]);

        $freeWall = $request->user()->freeWalls()->create($validated);

        return response()->json(['message' => 'Post created successfully.', 'data' => $freeWall]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = FreeWall::findOrFail($id);
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'post' => 'required',
        ]);

        $post = FreeWall::findOrFail($id);
        $post->update($validated);

        return response()->json(['message' => 'Post updated successfully.', 'data' => $post]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = FreeWall::findOrFail($id);
        $post->delete();

        return response()->json(['message' => 'Post deleted successfully.']);
    }
}
