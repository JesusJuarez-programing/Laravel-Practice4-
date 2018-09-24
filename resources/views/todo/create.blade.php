@extends('layout.app')

@section('body')
    <br>
    <a href="/todo" class="btn btn-info">Back</a>
    <div class="col-lg-4 col-lg-offset-4">
    <legend><h1>Create New Item</h1></legend>

        <form class="form-horizontal" action="/todo" method="post">
        {{ csrf_field() }}
  <fieldset>
    <div class="form-group">
      <label for="exampleTextarea">Example textarea</label>
      <textarea class="form-control" id="textArea" name="body" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
    @if (count($errors)>0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif</div>
    </div>
@endsection