<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('answer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('survey.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        $path = resource_path();

        //dd($path);

        $path = resource_path('views\answer\index');

        //dd($request->input('question'));


        $answer = Answer::create(
            $request->input('question'),
            $request->input('project_id'),
        );

        foreach ($request->input('question') as $key => $value) {

        }


    return redirect('answer_index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function show(Answers $answers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function edit(Answers $answers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answers $answers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answers $answers)
    {
        //
    }
}
