@extends('layouts.app')
@section('title','Reports')

@section('style')


@endsection

@section('content')

    <div class="wrapper border-bottom white-bg page-heading">
        <div class="col-md-3">
            <div class="row">
                <h1 class="module_heading">
                <span>
                    Reports
                </span>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> Reports</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>

<div class="w3-container">
<br><br><br><br><br><br><br><br><br><br><br><br>
 &nbsp;&nbsp;<a href="{{ url('report1') }}">
  <button class="button">Reports</button></a>&nbsp;&nbsp;<a href="abc"> <button class="button">Report Center</button></a>&nbsp;&nbsp;<a href="{{ url('searchreport') }}" ><button class="button" >Search</button></a>
&nbsp;&nbsp;<a href="{{ url('uploadcsv') }}" ><button class="button" >Upload CSV</button></a>
&nbsp;&nbsp;<a href="{{ url('largecsv') }}" ><button class="button" >Large CSV</button></a>
&nbsp;&nbsp;<a href="{{ url('reportFTP') }}" ><button class="button" >Report FTPs</button></a>
 </div>
 @endsection

  <style>
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #075f98;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>  

@section('scripts')
    <script>
$(document).ready(function() {

 });

    </script>
@endsection
