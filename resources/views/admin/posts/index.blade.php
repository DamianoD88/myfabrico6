{{-- creiamo la visualizzazione dei nostri post --}}
{{-- estendiamo il layout --}}
@extends('layouts.app')

@section('content')
    {{-- qui vederemo tutto i nostri dati --}}
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Codice</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
              <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">Show</a>
                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                    <form action="" method="post" class="d-inline-block">
                        {{-- per la questione di sicurezza aggiungo il csrf --}}
                        @csrf
                        {{-- aggiungo anche il metodo --}}
                        @method('DELETE')
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                </td>
            @endforeach
              </tr>
            </tbody>
          </table>
    </div>
@endsection