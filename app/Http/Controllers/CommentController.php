<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request,[

            'description'=>'required',
        ]);

        $input=$request->all();
        $input['user_id']=auth()->user()->id;

        $comments=Comment::create($input);
        return back();


    }

}
