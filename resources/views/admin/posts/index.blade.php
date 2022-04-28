@extends('admin.empty')

@section('title')

@endsection

@section('content')


    <div class="row">
        <div class="container-fluid">
            <a href="{{route('post.create')}}" class="btn btn-outline-primary">ADD Post</a>
        </div>
        <div class="col-xl-12 mb-30">

            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 20px;height: 20px">image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>category</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i=1;
                            ?>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$i++}}</td>
                                <td style="width: 20px;height: 20px"><img src="{{asset('uploads/'.$post->img)}}"></td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->desc}}</td>
                                <td>{{$post->cat->name}}</td>
                                <td>
                                    <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('post.delete',$post->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
