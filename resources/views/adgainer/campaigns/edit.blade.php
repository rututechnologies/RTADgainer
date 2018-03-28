@extends('layouts.app')
@section('title','Edit Campaign ')

@section('style')


@endsection

@section('content')

<div class="wrapper border-bottom white-bg page-heading">
    <h1 class="module_heading">
        <!--TODO: Campaign name here-->
        <span>Edit Campaign - Campaign Name Here</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/app/accounts')}}"><i class="fa fa-list"></i> Account List</a></li>
        <li class="active"><strong>Edit Campaign</strong></li>
    </ol>
</div>

<div class="container-fluid">
    
    <!--TODO: Display edit form-->
    <div class="alert alert-info">Under construction</div>

</div>

@endsection

@section('scripts')

@endsection