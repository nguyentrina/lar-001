<?php
/**
 * Created by: TriNQ
 * Date: 16-03-2018
 * Time: 10:36 AM
 */
?>
@extends('admin/layouts/app')
@section('title','Thêm sản phẩm mới')
@section('title-page','Thêm sản phẩm mới')
@section('content')
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title"></h3>
            <form action="{{action('admin\ProductsController@store')}}" enctype="multipart/form-data" method="post">
                @csrf
            <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label">Tên sản phẩm</label>
                        <input class="form-control" type="text" name="product_name" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Giá</label>
                        <input class="form-control" type="text" name="product_price" placeholder="Nhập giá sản phẩm">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Ảnh sản phẩm</label>
                        <input class="form-control" name="product_images" type="file" placeholder="Chọn ảnh sản phẩm">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Danh mục</label>
                        <select name="product_category" class="form-control">
                            @foreach($cate as $item)
                                <option value="{{$item->id}}">{{$item->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tình trạng sản phẩm</label>
                        <select name="product_status" class="form-control">
                            <option value="1">Còn hàng</option>
                            <option value="2">Hết hàng</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Mô tả</label>
                        <textarea class="form-control" name="product_content" rows="4" ></textarea>
                    </div>
            </div>
            <div class="tile-footer">
                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm sản phẩm</button>
            </div>
            </form>
        </div>
    </div>

@endsection

