@extends('admin.empty')

@section('title')

@endsection

@section('content')

    <form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title </label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Description </label>
            <input type="text" class="form-control" name="desc" value="{{$post->desc}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Category Name </label>
            <select name="cat">
                <option>No Choice</option>
                @foreach($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Post Image </label>
            <img src="{{asset('uploads/'.$post->img)}}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Post Image </label>
            <input type="file" class="form-control" name="img" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
