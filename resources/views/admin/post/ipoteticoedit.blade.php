@extends('layouts.app')

@section('content')
    <form method="POST" class="w-75 m-auto my-3" action="{{route('admin.posts.update', $file->id)}}">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input name="title" type="text" class="form-control " value="{{$file->title}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="body" class="form-control">{{$file->body}}</textarea>
    </div>

    {{--Category --}}

    <div class="my-3">
        <label for="">Category</label>
        <select class="form-control" name="category_id" id="">
            <option value="{{$file->category_id}}">Seleziona la categoria</option>
            @foreach ($categories as $elem )
                <option value="{{ $elem->id}} ">
                    {{$elem->name}}
                </option>
            @endforeach
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Save Changes</button>

    </form>
@endsection
