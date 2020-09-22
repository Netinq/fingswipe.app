<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;

class ScoreController extends Controller
{

    public function getAll()
    {
        $scores = Score::orderBy('score', 'DESC')->get();
        return response()->json(compact('scores'));
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $score = Score::where('username', request('username'))->first();
        if ($score != null) {
            if (request('score') > $score->score)
            {
                $score->score = request('score');
                $score->save();
            }
        } else {
            $score = new Score();
            $score->score = request('score');
            $score->username = request('username');
            $score->save();
        }
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
