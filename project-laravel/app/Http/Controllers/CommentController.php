<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, string $id)
    {
        $request->validate(
            [
                'content' => 'required',
            ],
            [
                'content.required' => 'Comment cannot empty',
            ]
        );

        $idUser = Auth::id();

        $comments = new Comments;

        $comments->content = $request->input('content');
        $comments->point = $request->input('point');
        $comments->users_id = $idUser;
        $comments->film_id = $id;


        $comments->save();


        return redirect('/film/' . $id);
    }
}
