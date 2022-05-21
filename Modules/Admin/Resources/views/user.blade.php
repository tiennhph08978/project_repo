@extends('admin::layouts.master')

@section('title', 'User')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <div class="table-data__tool">
                            <h3 class="title-5 m-b-35 table-data__tool-left">User</h3>
                        </div>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tien 234</td>
                                    <td>tien@gmail.com</td>
                                    <td>039214555</td>
                                    <td>HN</td>
                                    <td>
                                        <a href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Tien 234</td>
                                    <td>tien@gmail.com</td>
                                    <td>039214555</td>
                                    <td>HN</td>
                                    <td>
                                        <a href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tien 234</td>
                                    <td>tien@gmail.com</td>
                                    <td>039214555</td>
                                    <td>HN</td>
                                    <td>
                                        <a href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Tien 234</td>
                                    <td>tien@gmail.com</td>
                                    <td>039214555</td>
                                    <td>HN</td>
                                    <td>
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
