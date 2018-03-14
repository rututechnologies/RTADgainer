@extends('layouts.app')
@section('title',' ')

@section('style')


@endsection

@section('content')

<div class="wrapper border-bottom white-bg page-heading" style="margin-bottom: 30px;">
    <h1 class="module_heading">
        <span>Autoissue</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><strong><i class="fa fa-list"></i> Autoissue</strong></li>
    </ol>
</div>

<div class="container w3-container">

    <a href="{{ url('autoissue/transfer-setting') }}" class="btn btn-primary btn-lg" style="margin-right: 10px;">新規番号発番</a>
    <a href="{{ url('autoissue/change-client-number') }}" class="btn btn-primary btn-lg" style="margin-right: 10px;">転送先変更</a>
    <a href="{{ url('autoissue/schedule') }}" class="btn btn-primary btn-lg" style="margin-right: 10px;">時間外転送設定</a>
    <a href="{{ url('autoissue/intec-client') }}" class="btn btn-primary btn-lg" style="margin-right: 10px;">クライアント情報登録</a>

</div>

@endsection

@section('scripts')
<script>
    (function($){
        $(function( ){

            

        });
    }(jQuery));
</script>
@endsection