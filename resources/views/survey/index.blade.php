@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <b>Questionário</b>
                </div>

            @if(!$already_answer)    
            <form action="http://127.0.0.1:8000/answer" method="post" class="container my-2">
                @csrf 
            
                @foreach ($questions as $question)
                    @if($question->type === 'range')
                        <div class="grouped fields form-check-inline my-1">
                            <label>
                                {{Str::of($question->text)->replace(['{min}', '{max}'], [$question->min, $question->max])}}
                            </label>
                            @for ($i = $question->min; $i <= $question->max; $i++)
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input required type="radio" class="ml-1" value="{{$i}}" name="question[question{{$question->id}}]">
                                    <label>{{$i}}</label>
                                </div>
                            </div>    
                            @endfor    
                        </div>
                    @else
                        <div class="field">
                            <label for="">{{$question->text}}</label>
                            <input required type="textarea" name="question[question{{$question->id}}]">
                        </div>
                    @endif
                @endforeach

                <input type="hidden" name="question[project_id]" value="{{$current_project->id}}">

                <input class="btn btn-primary mb-2" type="submit" value="Enviar questionário">
            </form>
            </div>
            @else
            <p class="text-center mt-2">Já respondeu a este questionário</p>
            @endif
            <div class="mt-2">
                <a href="{{URL::previous()}}" class="btn btn-primary btn-sm">Back</a>
                <a href="/" class="btn btn-primary btn-sm">Menu</a>
            </div>
        </div>
    </div>            
</div>        
@endsection