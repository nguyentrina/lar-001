<?php
/**
 * Created by: TriNQ
 * Date: 16-03-2018
 * Time: 7:50 AM
 */
?>
@extends('admin/layouts/app')
@section('title','Sửa danh mục')
@section('title-page','Sửa danh mục')
@section('content')

    <div class="col-md-12">
        <form action="{{action('admin\ProCategoriesController@update',$id)}}" method="POST">
            {{ csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <div class="form-group">
                <label>Tên thư mục</label>
                <input class="form-control" name="category_name" value="{{$cate->category_name}}">
            </div>
            <button type="submit" class="btn btn-default">Sửa thư mục</button>
        </form>
    </div>

@endsection
