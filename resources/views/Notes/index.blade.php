@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Notes</div>

                <div class="panel-body">

                @foreach ($notes as $note)

                    <div class="panel panel-default">
                        <div class="panel-heading"><strong> {{$note->title}} </strong></div>

                        <div class="panel-body">

                            {{ $note->body }}

                            <form class="form-inline" method="POST" action="{{ route('Notes.destroy', $note->id) }}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}

                                <hr>
                                <a href="{{ route('Notes.edit', $note->id) }}" class=" btn btn-default">Update</a>

                                <button type="submit" class="btn-danger btn">Delete</button>
                            </form>
                        </div>
                    </div>

                @endforeach

                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <div class="text-center">
                    {{ $notes->links()}}
                </div>
            </div>  

        </div>
    </div>
</div>
@endsection
