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
        <div class="tile">
            <div class="tile-body">
                <table width="100%" class="table table-hover table-bordered" id="dataTables">
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
                            <td><a href="{{action('admin\ProCategoriesController@edit',['id'=>$item->id])}}" class="btn btn-primary" style="float: left;">Sửa</a>
                                <form action="{{action('admin\ProCategoriesController@destroy',$item->id)}}" method="post" style="float: left; margin-left:8px; ">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input type="submit" value="Xóa " class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->

@endsection

@section('javascript')
    <!-- DataTables JavaScript -->
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#dataTables').DataTable();</script>
@endsection