<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function Create()
    {
        return view('admin.tags.create');
    }

    public function Store(Request $request)
    {
        Tag::create([
            'tag_name' =>$request->tag_name,
        ]);
        return back();
    }



}
