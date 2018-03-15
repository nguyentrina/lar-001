<?php
/**
 * Created by: TriNQ
 * Date: 15-03-2018
 * Time: 10:38 AM
 */
?>

@extends('admin.layouts.app')
@section('title','Danh mục sản phẩm')
@section('title-page','Danh sách danh mục sản phẩm')
@section('css')
    <!-- DataTables CSS -->
    <link href="{{asset('css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{asset('css/dataTables.responsive.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr class="odd">
                        <td>{{$item->id}}</td>
                        <td>{{$item->category_name}}</td>
                        <td><a herf="">Sửa</a> | <a href="{{action('admin\ProCategoriesController@destroy',['id'=>$item->id])}}">Xóa</a> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->

@endsection

@section('javascript')
    <!-- DataTables JavaScript -->
    <script src="{{asset('js/jquery.dataTables.min.j')}}s"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/dataTables.responsive.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables').DataTable({
                responsive: true
            });
        });
    </script>
@endsection