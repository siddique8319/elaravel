@extends('admin_layout')
@section('admin_content')
    <h1 class="display-2 text-center">All Categories Table</h1>
    <hr>
    <h2 class="alert-success">
        <?php
        $msg = Session::get('msg');
        if ($msg) {
            echo $msg;
            Session::put('msg', null);
        }
        ?>
    </h2>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">

        <thead>
        <tr>
            <th>SL</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>

        @php($i=1)
        @foreach($all_category_info as $v_category)

            <tr>
                <td class="center">{{ $i++ }}</td>
                <td class="center">{{ $v_category->category_name }}</td>
                <td class="center">{{ $v_category->category_description }}</td>
                <td class="center">
                    @if($v_category->publication_status==1)
                        <span class="label label-success">Active</span>
                    @else
                        <span class="label label-danger">UnActive</span>
                    @endif
                </td>
                <td class="center">
                    @if($v_category->publication_status==1)
                        <a href="{{URL::to('/unactive_category/'.$v_category->category_id)}}" class="btn btn-danger"><i
                                    class="halflings-icon white thumbs-down"></i></a>
                    @else
                        <a href="{{URL::to('/active_category/'.$v_category->category_id)}}" class="btn btn-success"><i
                                    class="halflings-icon white thumbs-up"></i></a>
                    @endif
                    <a href="{{URL::to('/edit_category/'.$v_category->category_id)}}" class="btn btn-info"><i
                                class="halflings-icon white edit"></i></a>
                    <a href="{{URL::to('/delete_category/'.$v_category->category_id)}}" id="delete" class="btn btn-danger"><i
                                class="halflings-icon white trash"></i></a>

                </td>

            </tr>
        @endforeach
        </tbody>


    </table>
@endsection

