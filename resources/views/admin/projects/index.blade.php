@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="header-page d-flex justify-content-between align-items-center mb-5">
            <h2>Progetti</h2>
            <div>
                <button class="btn btn-primary">Crea nuovo progetto</button>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="col-1">#</th>
                    <th scope="col" class="col-7">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.projects.show', $project->id) }}" as="button"
                                    class="btn btn-info"><i class="fa-solid fa-magnifying-glass"></i></a>
                                <a href="#" as="button" class="btn btn-warning"><i
                                        class="fa-solid fa-pencil"></i></a>
                                <a href="#" as="button" class="btn btn-danger"><i
                                        class="fa-solid fa-trash-can"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
