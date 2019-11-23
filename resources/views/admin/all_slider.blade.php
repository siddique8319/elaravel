@extends('admin_layout')
@section('admin_content')
    <h1 class="display-2 text-center">All Slider</h1>
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
            <th>Slider ID</th>
            <th>Slider Image</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>

        @php($i=1)
        @foreach( $all_slider as $v_slider)

            <tr>
                <td class="center">{{ $i++ }}</td>
                <td><img src="{{ URL::to($v_slider->slider_image)}}" style="height: 70px; width: 200px;"></td>

                <td class="center">
                    @if($v_slider->publication_status==1)
                        <span class="label label-success">Active</span>
                    @else
                        <span class="label label-danger">UnActive</span>
                    @endif
                </td>
                <td class="center">
                    @if($v_slider->publication_status==1)
                        <a href="{{URL::to('/unactive_slider/'.$v_slider->slider_id)}}" class="btn btn-danger"><i
                                    class="halflings-icon white thumbs-down"></i></a>
                    @else
                        <a href="{{URL::to('/active_slider/'.$v_slider->slider_id)}}" class="btn btn-success"><i
                                    class="halflings-icon white thumbs-up"></i></a>
                    @endif
                    <a href="{{URL::to('/delete_slider/'.$v_slider->slider_id)}}" id="delete" class="btn btn-danger"><i
                                class="halflings-icon white trash"></i></a>

                </td>

            </tr>
        @endforeach
        </tbody>


    </table>
@endsection

