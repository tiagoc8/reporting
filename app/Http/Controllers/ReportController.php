<?php

namespace App\Http\Controllers;

use App\Report;
use App\Answer;
use App\Project;
use App\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers = Answer::all();

        $average1 = Answer::avg('question3');
        $average2 = Answer::avg('question4');
        $average3 = Answer::avg('question5');

        $projects = Answer::count('id');

        $clients = Customer::with('projects.answer')->get();

        /*foreach($clients as $client){
        print_r('<pre>');
        print_r($client->name);
        print_r($client->projects->count());
        print_r('</pre>');
        }

        dd();*/

        /*$clientanswer =  Customer::with(array('projects.answers'=>function($query){
            $query->select('question3');
        }))->get();*/

        /*$clientsAnswer1 = Customer::with('projects.answers:answers.question3')->get();

        dd($clientsAnswer1);*/

        $clientsAnswers = Customer::with('projects.answers')->get();

        //$clientsAnswer1 = $clientsAnswer2;

        //Médias das respostas
        
        /*foreach($clientsAnswer2 as $project){
            print_r('<pre>');
            print_r($project->name);
            //print_r($project->answers->pluck('question3'));
            print_r($project->answers->pluck('question3')->avg());
            print_r('</pre>');
            print_r('------');
        }

        dd();*/

        return view('report.index')->with(compact('answers', 'average1', 'average2', 'average3', 'projects', 'clients', 'clientsAnswers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
