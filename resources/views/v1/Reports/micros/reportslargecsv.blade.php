@extends('layouts.app')
@section('title','Report largecsv ')

@section('style')


@endsection

@section('content')

    <div class="wrapper border-bottom white-bg page-heading">
        <div class="col-md-3">
            <div class="row">
                <h1 class="module_heading">
                <a href="{{url('reportsList')}}" style="color:black"><span>
                    Reports
                </span></a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i>Large csv</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>

<div class="w3-container">
<div id="da-content-area">


          <div class="clear"></div>

          <div class="grid_3">
            <div class="table-grid">

              <h3 align="center"><label><b>Account Generated Report File</b></label></h3><hr>
              <div class="clear"></div>
<table style="width:50%" align="center">
              <div class="table-header" >
<tr>
                <div class="table-header-column">
                  <td>File Name<br/></td>
                </div>
                <div class="table-header-column">
                  <td>Date Created<br/></td>
                </div>
                <div class="table-header-column">
                  <td>SizeM</td>
                </div>
                <div class="table-header-column">
                  <td>Status</td>
                </div>
                <div class="table-header-column">
                  <td>Download</td>
                </div>
              </div>
</tr>
              <div class="table-data table-data-show">

                
                
              </div>
</table>
            </div>
          </div>
          <div class="clear clearSpace"></div>

          <div class="clear"></div>
<hr>
        </div>

      </div>

    </div>

  </div>

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
