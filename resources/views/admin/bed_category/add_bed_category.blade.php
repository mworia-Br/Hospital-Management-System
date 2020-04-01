@extends('layouts.app')
@section('title') Bed Category | HMS @endsection
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><b>Bed Category</b></h3>
            </div>
        </div>
        <a href="{{url('bed_category')}}">
            <button style="margin-left: 461px;" class="btn btn-round btn-primary btn-sm">Bed Category List</button>
        </a>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Bed Category</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <form class="form-horizontal form-label-left" method="POST" action="{{route('bed_category.store')}}">
                            @csrf

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="bed_category_name">Bed Category <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="bed_category_name" class="form-control" name="bed_category_name" placeholder="Enter Bed Category" type="text" value="{{ old('bed_category_name') }}">
                                    <p class="text-danger">{{$errors->first('bed_category_name')}}</p>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="bed_category_details">Details <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" id="bed_category_details" name="bed_category_details" class="form-control" placeholder="Enter Details" value="{{ old('bed_category_details') }}">
                                    <p class="text-danger">{{$errors->first('bed_category_details')}}</p>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 offset-md-3">
                                    <button type="reset" class="btn btn-primary btn-sm">Reset</button>
                                    <button type="submit" class="btn btn-success btn-sm submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection