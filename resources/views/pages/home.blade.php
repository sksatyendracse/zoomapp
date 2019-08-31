@extends('layouts.frontadmin')

@section('content')
<form method="POST" action="{{ route('summernoteeditor.post') }}">
{{ csrf_field() }}
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="col-xs-12 col-sm-12 col-md-12">
<center><h1>What would you see in Laravel 5.7 ? </h1>
    <h4>Just share your idea.</h4>
</center>
<div class="form-group">
    <label for="usr">Title of Feature:</label>
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="text" class="form-control" name="feature" value="{{$data->title}}">
</div>

<div class="form-group">
    <strong>Details:</strong>
       <textarea class="form-control summernote" name="detail">
       {{ $data->content}}
       </textarea>
    </div>
 </div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>
@endsection