@extends('layouts.master')

@section('css')
    <!-- Table css -->
    <link href="{{ URL::asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css') }}" rel="stylesheet" type="text/css" media="screen">
@endsection

@section('breadcrumb')
    <div class="col-sm-6">
        <h4 class="page-title text-left">Latetime</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0);">latetime</a></li>
        </ol>
    </div>
@endsection

@section('button')
    <a href="check" class="btn btn-success btn-sm btn-flat"><i class="mdi mdi-plus mr-2"></i>Add New</a>
@endsection
@section('content')
@include('includes.flash')

@endsection
