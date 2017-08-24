@extends('layouts.app')


@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                    data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                            class="fa fa-cog"></i></span></button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>

        </div>
        <h4 class="page-title">Dashboard</h4>
    </div>
</div>





<div class="row">
    <!-- feature projects-->
    <div class="col-xs-12 col-lg-12 col-xl-4">

        <div class="card">
            <h3 class="card-header">Feature Projects</h3>
            <div class="card-block">
                <h4 class="card-title">Special title treatment</h4>
                <p class="card-text">With supporting text below as a natural lead-in to
                    additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>


        </div>

        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-20">Sales Statistics</h4>

            <p class="font-600 m-b-5">
                <span class="label label-success">Marketing Team</span>
                <span class="label label-default">Due date:</span> Tuesday, November 11, 2001

                <span class="text-danger pull-right"><b>79%</b></span></p>
            <progress class="progress progress-striped progress-xs progress-danger m-b-0" value="79" max="100">79%
            </progress>
            <hr>
            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="img-circle" alt="" width="10%"></div>
        </div>

    </div>
</div><!-- //feature projects-->


<!-- calendar-->
    <div class="col-xs-12 col-lg-12 col-xl-8">


    </div><!-- //calendar-->




</div>
<!-- end row -->



<!-- end row -->
    @endsection