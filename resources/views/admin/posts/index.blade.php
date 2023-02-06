@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success_delete'))
            <div class="alert alert-warning" role="alert">
                Il post con ID {{(session('success_delete')->id)}} è stato eliminato
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Tag</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            @if ($post->category)
                            {{-- <a href="{{ route('admin.categories.show', ['category' => $post->category]) }}"> --}}
                            {{ $post->category->name }}</a>
                            @endif
                        </td>
                        <td>
                            @foreach ($post->tags as $tag)
                                {{ $tag->name }}{{ $loop->last ? '': ', ' }}
                            @endforeach

                        </td>

                        <td>
                            <a href="{{ route ('admin.posts.show', ['post' => $post])}}" class="btn btn-primary text-white">Visita</a>
                        </td>
                        <td>
                            <a href="{{ route ('admin.posts.edit', ['post' => $post])}}" class="btn btn-warning">Edita</a>
                        </td>
                        <td>
                            <form action="{{ route ('admin.posts.destroy', ['post' => $post])}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-delete-me">Elimina</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>


@endsection
