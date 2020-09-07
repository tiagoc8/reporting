@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">All the Results</div>

                    <div class="card-body">
                        <div class="card-header">Média Geral</div>
                        <ul class="list-group">
                            <li class="list-group-item">Desempenho médio do gestor de projecto: {{$average1}}</li>
                            <li class="list-group-item">Desempenho médio do account manager: {{$average2}}</li>
                            <li class="list-group-item">Experiência geral no projeto: {{$average3}}</li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="card-header">Média de Respostas por Cliente</div>
                        <div class="card-header text-center">Desempenho do gestor de projecto</div>
                        <ul class="list-group">
                        @foreach($clientsAnswers as $project)
                            <li class="list-group-item">{{$project->name}} - {{$project->answers->pluck('question3')->avg()}}</li>  
                        @endforeach
                        </ul>

                        <div class="card-header text-center">Desempenho do account manager</div>
                        <ul class="list-group">
                        @foreach($clientsAnswers as $project)
                            <li class="list-group-item">{{$project->name}} - {{$project->answers->pluck('question4')->avg()}}</li>  
                        @endforeach
                        </ul>

                        <div class="card-header text-center">Experiência Geral</div>
                        <ul class="list-group">
                        @foreach($clientsAnswers as $project)
                            <li class="list-group-item">{{$project->name}} - {{$project->answers->pluck('question5')->avg()}}</li>  
                        @endforeach
                        </ul>
                    </div>
                    

                    <div class="card-body">
                        <div class="card-header">Melhorias sugeridas para o projeto</div>
                        <ul class="list-group">
                        @foreach($answers as $k=> $v)
                            <li class="list-group-item">{{$v -> question6}}</li>                
                        @endforeach
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="card-header">Melhorias sugeridas para a empresa</div>
                        <ul class="list-group">
                        @foreach($answers as $k=> $v)
                            <li class="list-group-item">{{$v -> question7}}</li>  
                        @endforeach  
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="card-header">Total de projetos</div>
                        <ul class="list-group">
                            <li class="list-group-item">{{$projects}}</li>  
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="card-header">Total de projetos por cliente</div>
                        <ul class="list-group">
                        @foreach($clients as $client)
                            <li class="list-group-item">{{$client->name}} - {{$client->projects->count()}}</li>  
                        @endforeach
                        </ul>
                    </div>



                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection