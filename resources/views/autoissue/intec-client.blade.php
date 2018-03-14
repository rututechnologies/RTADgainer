@extends('layouts.app')
@section('title',' ')

@section('style')
<style>
    .form-group{
        margin-bottom: 30px;
    }
</style>

@endsection

@section('content')

<div class="wrapper border-bottom white-bg page-heading" style="margin-bottom: 30px;">
    <h1 class="module_heading">
        <span>Intec Client</span>
    </h1>
    <ol class="breadcrumb" style="padding-bottom: 20px;">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{url('/autoissue')}}">Autoissue</a></li>
        <li class="active"><strong>Intec Client</strong></li>
    </ol>
</div>

<div class="container-fluid w3-container">
    <div class="panel">
        <div class="panel-body">

            <div class="form-group">
                <label>払出会社（※現在はインテックのみ）</label>
                <div>
                    <label class="radio-inline"><input type="radio" name="corp" value="intec" checked="checked">インテック</label>
                    <label class="radio-inline"><input type="radio" name="corp" value="comsquare" disabled="disabled">コムスクェア</label>
                    <label class="radio-inline"><input type="radio" name="corp" value="twilio" disabled="disabled">Twilio</label>
                </div>
            </div>
            <div class="form-group">
                <label>機能</label>
                <div>
                    <label class="radio-inline">
                        <input type="radio" name="func" value="050">
                        050</label>
                    <label class="radio-inline">
                        <input type="radio" name="func" value="050rec">
                        050 録音機能付き</label>
                    <label class="radio-inline">
                        <input type="radio" name="func" value="050ivr">
                        050 IVR機能付き</label>
                    <label class="radio-inline">
                        <input type="radio" name="func" value="0800">
                        0800</label>
                    <label class="radio-inline">
                        <input type="radio" name="func" value="0800rec">
                        0800 録音機能付き</label>
                    <label class="radio-inline">
                        <input type="radio" name="func" value="0120">
                        0120</label>
                    <label class="radio-inline">
                        <input type="radio" name="func" value="0120rec">
                        0120 録音機能付き</label>
                </div>
            </div>

            <div class="form-group">
                <label for="csvfile">CSVファイル指定</label>
                <input type="file" id="csvfile" name="csvfile">
            </div>

            <button type="button" class="btn btn-primary">　登録　</button>
        </div>
    </div>

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