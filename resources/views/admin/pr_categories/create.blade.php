<?php
/**
 * Created by: TriNQ
 * Date: 15-03-2018
 * Time: 15:26 PM
 */
?>
@extends('admin.layouts.app')
@section('title','Thêm danh mục mới')
@section('title-page','Thêm danh mục mới')
@section('content')
    <div class="col-md-12">
        <div class="tile">
            <form action="{{action('admin\ProCategoriesController@store')}}" method="post">
                {{ csrf_field()}}
                <div class="tile-body">
                    <div class="form-group">
                        <label>Tên thư mục</label>
                        <input class="form-control" name="category_name">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm thư mục</button>
                </div>
            </form>
        </div>
    </div>

@endsection