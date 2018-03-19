<?php
/**
 * Created by: TriNQ
 * Date: 15-03-2018
 * Time: 10:26 AM
 */
?>

<div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{asset('images/secret-smile-icon.png')}}" alt="User Image">
    <div>
        <p class="app-sidebar__user-name">Nguyễn Trị</p>
        <p class="app-sidebar__user-designation">Frontend Developer</p>
    </div>
</div>
<ul class="app-menu">
    <li><a class="app-menu__item active" href=""><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Sản phẩm</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{action('admin\ProductsController@index')}}"><i class="icon fa fa-circle-o"></i>Danh sách sản phẩm</a></li>
            <li><a class="treeview-item" href="{{action('admin\ProductsController@create')}}"><i class="icon fa fa-circle-o"></i>Thêm sản phẩm</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Danh mục sản phẩm</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{action('admin\ProCategoriesController@index')}}"><i class="icon fa fa-circle-o"></i>Danh mục sản phẩm</a></li>
            <li><a class="treeview-item" href="{{action('admin\ProCategoriesController@create')}}"><i class="icon fa fa-circle-o"></i>Thêm danh mục sản phẩm</a></li>
        </ul>
    </li>
    <li><a class="app-menu__item" href="l"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>

