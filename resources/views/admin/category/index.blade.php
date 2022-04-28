@extends('admin.empty')

@section('title')

@endsection

@section('content')


    <div class="row">
        <div class="container-fluid">
            <a href="{{route('cat.create')}}" class="btn btn-outline-primary">ADD Category</a>
        </div>
        <div class="col-xl-12 mb-30">

            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i=1;
                            ?>
                            @foreach($cats as $cat)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$cat->name}}</td>
                                <td>{{$cat->created_at}}</td>
                                <td>{{$cat->updated_at}}</td>
                                <td>
                                    <a href="{{route('cat.edit',$cat->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('cat.delete',$cat->id)}}" class="btn btn-danger">Delete</a>
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
