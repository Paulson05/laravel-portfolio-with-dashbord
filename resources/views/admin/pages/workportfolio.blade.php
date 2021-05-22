@extends('templetes.defaults')
@section('content')

    <div class="container">
        @include('templetes.partials.headerpanel')
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">workporfolio</h4>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">+</a>
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
                                            <form action="{{route('workportfolio.store')}}" method="post" enctype= "multipart/form-data" >
                                                @csrf

                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>counter</strong>
                                                            <input type="text" name="counter" class="form-control" placeholder="counter">

                                                        </div>

                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>work_completed</strong>
                                                            <input type="text" name="work_completed" class="form-control" placeholder="work completed">

                                                        </div>

                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>years_of_experience</strong>
                                                            <input type="text" name="years_of_experience" class="form-control" placeholder="years of experince">

                                                        </div>

                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>total_client</strong>
                                                            <input type="text" name="total_client" class="form-control" placeholder="total client">

                                                        </div>

                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">
                                                            <strong>certificate</strong>
                                                            <input type="text" name="certificate" class="form-control" placeholder="certificate">

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
                    <div class="card-body">

                        <div class="">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                   counter number
                                </th>
                                <th>
                                 experience
                                </th>
                                <th>
                                    work completed
                                </th>
                                <th>
                                   total client
                                </th>
                                <th>
                                   certificate
                                </th>

                                </thead>
                                <tbody>
                                @foreach($counters as $counter)
                                <tr>
                                    <td>
                                        {{$counter->id}}
                                    </td>
                                    <td>
                                        {{$counter->counter}}
                                    </td>
                                    <td>
                                        {{$counter->work_completed}}
                                    </td>
                                    <td>
                                        {{$counter->years_of_experience}}
                                    </td>
                                    <td>
                                        {{$counter->total_client}}
                                    </td>
                                    <td>
                                        {{$counter->certificate}}
                                    </td>

                                </tr>
                                @endforeach

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
