@extends('layouts.app')
@section('title','Edit Accounts')

@section('style')


@endsection

@section('content')

<div class="wrapper border-bottom white-bg page-heading">
    <h1 class="module_heading">
        <!--TODO: Account name here-->
        <span>Edit Account - Account Name Here</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/app/accounts')}}"><i class="fa fa-list"></i> Account List</a></li>
        <li class="active"><strong>Edit Account</strong></li>
    </ol>
</div>

<div class="container-fluid">
    
    <!--TODO: Display edit form-->
    <div class="alert alert-info">Under construction</div>

</div>

@endsection

@section('scripts')

@endsection