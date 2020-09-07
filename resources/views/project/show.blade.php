@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <b>{{$project->name}}</b>
                </div>

                <div class="card-body"><ul class="list-group">
                    <li class="list-group-item">Customer: {{$project->customer->name}} </li>   
                    <li class="list-group-item"><a href="http://127.0.0.1:8000/survey/{{$project->hash}} ">Questionário</a></li>                  
                </ul></div>
            </div>

            <div class="mt-2">
                <a href="{{URL::previous()}}" class="btn btn-primary btn-sm">Back</a>
                <a href="/" class="btn btn-primary btn-sm">Menu</a>
            </div>

        </div>
    </div>
</div>
@endsection