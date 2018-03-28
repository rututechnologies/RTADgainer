@extends('layouts.app')
@section('title','Campaign Detail ')

@section('style')


@endsection

@section('content')

<div class="wrapper border-bottom white-bg page-heading">
    <h1 class="module_heading">
        <!--TODO: campaign name here-->
        <span>Campaign Details - Campaign Name Here</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/app/accounts')}}"><i class="fa fa-list"></i> Account List</a></li>
        <li class="active"><strong>Campaign Details</strong></li>
    </ol>
</div>

<div class="container-fluid">
    <!--TODO: Display campaign details-->
    <div class="alert alert-info">Under construction</div>

</div>

@endsection

@section('scripts')

@endsection