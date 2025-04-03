@extends('layout')

@section('content')
    <h2>Song bearbeiten</h2>

    <form class="row" action="/songs/{{$song->id}}" method="post">
      @csrf
      @method('PUT')

      <div class="col-md-6">
          <div class="mb-3">
            <label for="title">Titel</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$song->title}}">
          </div>
          <div class="mb-3">
            <label for="band">Band</label>
            <input class="form-control" type="text" name="band" id="band" value="{{$song->band}}">
          </div>
      </div>

      <div class="col-md-6">
          <div class="mb-3">
            <label for="label">Label</label>
            <select class="form-select" name="labels_id_ref" id="label">
              @foreach ($labels as $label)
                  <option @if ($label->id === $song->labels_id_ref) selected @endif value="{{$label->id}}">{{$label->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="mt-3">
            <button class="btn btn-success" type="submit">Änderung speichern</button>
          </div>
      </div>
    </form>
@endsection
