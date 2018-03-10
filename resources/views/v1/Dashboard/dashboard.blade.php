@extends('layouts.app')

@section('title','Dashboard :: ADgainer Solutions')

@section('style')
    <style>
    .height-300px{
            height:320px
    }
    </style>
@endsection
@section('content')
   <div class="col-lg-3">
        <div class="widget style1 navy-bg">
            <a href="{{url('abc')}}" style="color:#fff;"><div class="row">
            	<div class="col-xs-4">
                    <i class="fa fa-dashboard fa-5x"></i>
                </div>
	            <div class="col-xs-8 text-right">
	                <h3 class="font-bold">Center</h3>
	            </div>
        	</div></a>
    	</div>
    </div>
     <div class="col-lg-3">
        <div class="widget style1 yellow-bg">
            <a href="{{url('accounts')}}" style="color:#fff;"><div class="row">
            	<div class="col-xs-4">
                    <i class="fa fa-lock fa-5x"></i>
                </div>
	            <div class="col-xs-8 text-right">
	                <h3 class="font-bold">Accounts</h3>
	            </div>
        	</div>
    	</div>
    </div>
     <div class="col-lg-3">
        <div class="widget style1 btn-success">
             <a href="{{url('salesList')}}" style="color:#fff;"><div class="row">
            	<div class="col-xs-4">
                    <i class="fa fa-inr fa-5x"></i>
                </div>
	            <div class="col-xs-8 text-right">
	                <h3 class="font-bold">Sales</h3>
	            </div>
        	</div></a>
    	</div>
    </div>
     <div class="col-lg-3">
        <div class="widget style1 lazur-bg ">
            <a href="{{url('accounting')}}" style="color:#fff;"><div class="row">
            	<div class="col-xs-4">
                    <i class="fa fa-money fa-5x"></i>
                </div>
	            <div class="col-xs-8 text-right">
	                <h3 class="font-bold">Accounting</h3>
	            </div>
        	</div></a>
    	</div>
    </div>
       <div class="col-lg-3">
        <div class="widget style1 btn-success">
            <a href="{{url('campaign')}}" style="color:#fff;"><div class="row">
            	<div class="col-xs-4">
                    <i class="fa fa-inr fa-5x"></i>
                </div>
	            <div class="col-xs-8 text-right">
	             <h3 class="font-bold">    Campaign Tools</h3>
	            </div>
        	</div></a>
    	</div>
    </div>
    <div class="col-lg-3">
        <div class="widget style1 lazur-bg ">
             <a href="{{url('MyCampaign')}}" style="color:#fff;"><div class="row">
            	<div class="col-xs-4">
                    <i class="fa fa-money fa-5x"></i>
                </div>
	            <div class="col-xs-8 text-right">
	                <h3 class="font-bold">My Campaign</h3>
	            </div>
        	</div></a>
    	</div>
    </div>
     <div class="col-lg-3">
        <div class="widget style1 btn-danger">
           <a href="{{url('chatlist')}}" style="color:#fff;"> <div class="row">
            	<div class="col-xs-4">
                    <i class="fa fa-commenting fa-5x"></i>
                </div>
	            <div class="col-xs-8 text-right">
	                <h3 class="font-bold">Message Center</h3>
	            </div>
        	</div></a>
    	</div>
    </div>
     <div class="col-lg-3">
        <div class="widget style1 btn-warning">
            <div class="row">
            	<div class="col-xs-4">
                    <i class="fa fa-lock fa-5x"></i>
                </div>
	            <div class="col-xs-8 text-right">
	                <h3 class="font-bold">PPC Management</h3>
	            </div>
        	</div>
    	</div>
    </div>
     <div class="col-lg-3">
        <div class="widget style1 btn-default">
             <a href="{{url('agencyd')}}" style="color:#fff;"><div class="row">
            	<div class="col-xs-4">
                    <i class="fa fa-user-secret fa-5x"></i>
                </div>
	            <div class="col-xs-8 text-right">
	                <h3 class="font-bold">Agency</h3>
	            </div>
        	</div></a>
    	</div>
    </div>
    <div class="col-lg-3">
        <div class="widget style1 navy-bg">
            <a href="{{url('reportsList')}}" style="color:#fff;"><div class="row">
            	<div class="col-xs-4">
                    <i class="fa fa-file fa-5x"></i>
                </div>
	            <div class="col-xs-8 text-right">
	                <h3 class="font-bold">Reports</h3>
	            </div>
        	</div></a>
    	</div>
    </div>
@endsection

@section('scripts')
    
@endsection