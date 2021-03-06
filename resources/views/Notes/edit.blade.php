@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Notes</div>

                <div class="panel-body">
                    <form class="form-inline" method="POST" action="{{ route('Notes.update', $notes->id) }}" enctype="multipart/form-data">

                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}

                        <div class="form-group col-md-5">
                            <label for="title">Title :</label>
                            <input type="text" class="form-control" name="title" value="{{ $notes->title }}">
                        </div>

                        <div class="form-group col-md-5">
                            <label for="body">Body :</label>
                            <input type="text" class="form-control" name="body" value="{{ $notes->body }}">
                        </div>

                        <button type="submit" class="btn-success btn col-md-2">Post</button>
                        
                    </form>

                </div>
                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
