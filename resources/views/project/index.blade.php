@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">All the Projects</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($project as $project)
                            <li class="list-group-item">
                                <a title="Show details" href="/project/{{ $project->id }}">Project: {{ $project->name }}</a>
                                <p class="mb-0">Customer: {{ $project->customer->name }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="mt-2">
            <a href="/project/create" class="btn btn-success btn-sm">Create new project</a>
            </div>

        </div>
    </div>
</div>
@endsection