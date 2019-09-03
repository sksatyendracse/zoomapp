@extends('layouts.frontadmin')

@section('content')
<form method="POST" action="{{ route('summernoteeditor.post') }}">
{{ csrf_field() }}
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <label for="usr">Title of Feature:</label>
    <input type="hidden" name="id" value="{{($data!=null)?$data->id:''}}">
    <input type="text" class="form-control" name="feature" value="{{($data!=null)?$data->title:''}}">
</div>

<div class="form-group">
    <strong>Details:</strong>
       <textarea class="form-control summernote" name="detail">
       {{($data!=null)?$data->content:''}}
       </textarea>
    </div>
 </div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>
@endsection