@extends('admin_layout')
@section('admin_content')
    <h1 class="display-2 text-center">All Products Table</h1>
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
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>category Name</th>
            <th>manufacture Name</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>

        @php($i=1)
        @foreach( $all_product_info as $v_product)

            <tr>
                <td class="center">{{ $i++ }}</td>
                <td class="center">{{ $v_product->product_name }}</td>
                <td><img src="{{ URL::to($v_product->product_image)}}" style="height: 80px; width: 80px;"></td>
                <td class="center">{{ $v_product->product_price }}TK</td>
                <td class="center">{{ $v_product->category_name }}</td>
                <td class="center">{{ $v_product->manufacture_name }}</td>
                <td class="center">
                    @if($v_product->publication_status==1)
                        <span class="label label-success">Active</span>
                    @else
                        <span class="label label-danger">UnActive</span>
                    @endif
                </td>
                <td class="center">
                    @if($v_product->publication_status==1)
                        <a href="{{URL::to('/unactive_product/'.$v_product->product_id)}}" class="btn btn-danger"><i
                                    class="halflings-icon white thumbs-down"></i></a>
                    @else
                        <a href="{{URL::to('/active_product/'.$v_product->product_id)}}" class="btn btn-success"><i
                                    class="halflings-icon white thumbs-up"></i></a>
                    @endif
                    <a href="{{URL::to('/edit_product/'.$v_product->product_id)}}" class="btn btn-info"><i
                                class="halflings-icon white edit"></i></a>
                    <a href="{{URL::to('/delete_product/'.$v_product->product_id)}}" id="delete" class="btn btn-danger"><i
                                class="halflings-icon white trash"></i></a>

                </td>

            </tr>
        @endforeach
        </tbody>


    </table>
@endsection

