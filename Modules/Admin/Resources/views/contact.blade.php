@extends('admin::layouts.master')

@section('title', 'Contact')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="table-data__tool">
                            <h3 class="title-5 m-b-35 table-data__tool-left">Contact</h3>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2018-09-29 05:57</td>
                                    <td>Product_cate</td>
                                    <td>Product_cate</td>
                                    <td>
                                        <span class="status--process">Processed</span>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary">Status</a>
                                        <a href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2018-09-29 05:57</td>
                                    <td>Product_cate</td>
                                    <td>Product_cate</td>
                                    <td>
                                        <span class="status--denied">Denied</span>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary">Status</a>
                                        <a href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>2018-09-29 05:57</td>
                                    <td>Product_cate</td>
                                    <td>Product_cate</td>
                                    <td>
                                        <span class="status--denied">Denied</span>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary">Status</a>
                                        <a href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>2018-09-29 05:57</td>
                                    <td>Product_cate</td>
                                    <td>Product_cate</td>
                                    <td>
                                        <span class="status--denied">Denied</span>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary">Status</a>
                                        <a href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
