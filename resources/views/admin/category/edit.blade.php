@extends('admin.empty')

@section('title')

@endsection

@section('content')

    <form method="post" action="{{route('cat.update',$cat->id)}}">
        @csrf
        <input type="hidden" value="{{$cat->id}}">
        <div class="form-group">
            <label for="exampleInputEmail1">Category Name </label>
            <input type="text" class="form-control" name="name" value="{{$cat->name}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
