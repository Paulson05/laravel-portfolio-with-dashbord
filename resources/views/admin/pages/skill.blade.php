@extends('templetes.defaults')
@section('content')
    <div class="">
        @include('templetes.partials.headerpanel')
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">skill</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">+</a>
                            </div>
                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Creat skill</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="" method="post" enctype= "multipart/form-data" >
                                                @csrf

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>language</strong>
                                                            <input type="text" name="" class="form-control" placeholder="language">

                                                        </div>

                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>percentage</strong>
                                                            <input type="text" name="percentage" class="form-control" placeholder="percentage">

                                                        </div>

                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>aria-valuenow</strong>
                                                            <input type="text" name="aria_valuenow" class="form-control" placeholder="aria-valuenow">

                                                        </div>

                                                    </div>



                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>aria_valuemax</strong>
                                                            <input type="text" name="aria_valuemax" class="form-control" placeholder="aria_valuemax">

                                                        </div>

                                                    </div>




                                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                        <button type="submit" class="btn btn-primary">Post</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                    </div>

                                </div>




                            </div>

                        </div>
                    </div>
                    <div >

                        <div class="">
                            <table class="table ">
                                <thead class=" text-primary">
                                <th style="font-size: 10px;">
                                    ID
                                </th>
                                <th >
                                    Language
                                </th>
                                <th>
                                  percentage
                                </th>
                                <th>
                                    aria_valuenow
                                </th>
                                <th>
                                    aria_valuemax
                                </th>

                                </thead>
                                <tbody>
                                <tr>
{{--                                    @foreach($abouts as $about)--}}
                                        <td>
{{--                                            {{$about->id}}--}}
                                        </td>
                                        <td>
{{--                                            {{$about->name}}--}}
                                        </td>
                                        <td>
{{--                                            {{$about->profile}}--}}
                                        </td>
                                        <td>
{{--                                            {{$about->email}}--}}
                                        </td>
                                        <td>
{{--                                            {{$about->phone_number}}--}}

                                        <td>
                                            <a href="" title="show">
                                                <i class="btn btn-primary btn-sm fa fa-eye" ></i>
                                            </a>

                                            <a href=""  >
                                                <i class="btn btn-success btn-sm  fa fa-edit" ></i>
                                            </a>

                                            <form style="display: inline-block" method="post" action="" >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger  p-0"><i class="btn btn-danger btn-sm fa fa-trash" ></i></button>
                                            </form>
                                        </td>
{{--                                    @endforeach--}}
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">

                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
