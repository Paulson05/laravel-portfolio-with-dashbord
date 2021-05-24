@extends('templetes.defaults')
@section('title', '| about')
@section('content')
<div class="">
    @include('templetes.partials.headerpanel')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">About page</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">Add user</a>
                        </div>
                        <div class="modal" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Creat header Post</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="{{route('about.store')}}" method="post" enctype= "multipart/form-data" >
                                            @csrf

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>Name</strong>
                                                        <input type="text" name="name" class="form-control" placeholder="name">

                                                    </div>

                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>email</strong>
                                                        <input type="text" name="email" class="form-control" placeholder="email">

                                                    </div>

                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>profile</strong>
                                                        <input type="text" name="profile" class="form-control" placeholder="profile">

                                                    </div>

                                                </div>



                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>phone_number</strong>
                                                            <input type="text" name="phone_number" class="form-control" placeholder="phone number">

                                                        </div>

                                                    </div>


                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <strong>about me</strong>
                                                       <textarea cols="10" rows="5" placeholder="about me" class="form-control" name="about_me"></textarea>

                                                    </div>

                                                </div>



                                                <div class="col-xs-12 col-sm-12 col-md-12 text-left">
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
                                Name
                            </th>
                            <th>
                              profile
                            </th>
                            <th>
                                email
                            </th>
                            <th>
                                phone-number
                            </th>
                            <th>
                               About me
                            </th>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($abouts as $about)
                                <td>
                                   {{$about->id}}
                                </td>
                                <td>
                                   {{$about->name}}
                                </td>
                                <td>
                                  {{$about->profile}}
                                </td>
                                <td>
                                    {{$about->email}}
                                </td>
                                    <td>
                                        {{$about->phone_number}}
                                    </td>
                                    <td>
                                        {{$about->about_me}}
                                    </td>
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
                                @endforeach
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
