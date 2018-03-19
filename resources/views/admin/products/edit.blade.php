<?php
/**
 * Created by: TriNQ
 * Date: 19-03-2018
 * Time: 14:45 PM
 */
?>
@extends('admin/layouts/app')
@section('title','Sửa sản phẩm')
@section('title-page','Sửa sản phẩm')
@section('content')
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title"></h3>
            <form action="{{action('admin\ProductsController@update',$data->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label">Tên sản phẩm</label>
                        <input class="form-control" type="text" name="product_name" value="{{$data->product_name}}" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Giá</label>
                        <input class="form-control" type="text" name="product_price" value="{{$data->product_price}}" placeholder="Nhập giá sản phẩm">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Ảnh sản phẩm</label>
                        <img class="img img-thumbnail form-control" src="{{asset('storage/upload/'.$data->product_images)}}" style="width: 20%;">
                        <input class="form-control" name="product_images" type="file" placeholder="Chọn ảnh sản phẩm">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Danh mục</label>
                        <select name="product_category" class="form-control">
                            @foreach($cate as $item)
                                <option value="{{$item->id}}" @if($item->id == $data->product_category) selected @endif>{{$item->category_name}}</option>
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
                        <textarea class="form-control" name="product_content" rows="4">{{$data->product_content}}</textarea>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Thêm sản phẩm</button>
                </div>
            </form>
        </div>
    </div>

@endsection
