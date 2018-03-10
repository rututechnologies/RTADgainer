@extends('layouts.app')
@section('title','FAQ List')
@section('your_css')
@endsection

@section('content')
	<div class="row wrapper border-bottom white-bg page-heading">
		<div class="col-lg-3 col-xs-3 col-sm-3 col-md-3">
			<div class="row">
				<h1 style="font-size: 24px !important;">
                <span>
                    FAQ
                </span>
				</h1>
				<ol class="breadcrumb">
					<li>
						<a href="{{url('/dashboard')}}"><i
									class="fa fa-dashboard"></i> Dashboard</a>
					</li>
					<li class="active">
						<strong><i class="fa fa-question-circle"></i> FAQ</strong>
					</li>
				</ol>
			</div>
		</div>
	</div>
<!-- Main content -->
<section class="content">
    <div class="box-body" id="page-lists-content">
	    <div class="row">
	       <div class="col-md-2"></div>
	        <div class="col-md-8">
	            <div class="box box-primary" style="width: 60% !important;">
	            <h1 id="header"></h1> 
					<div class="bs-example">
					    <div class="panel-group" id="accordion">
					         @foreach(array_combine($faq_questions,$faq_ans) as $question=>$answer)
					        <div class="panel panel-default">
					        @for($i=1;$i<=count($question);$i++)
					            <div class="panel-heading" style="background-color: #91d6ff !important;">
					                <h4 class="panel-title ">
					                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse_{{$loop->index}}"><span class="glyphicon glyphicon-plus"></span> {{$question}}</a>
					                </h4>
					            </div>
					            <div id="collapse_{{$loop->index}}" class="panel-collapse collapse">
					                <div class="panel-body">
					                    <p>{{$answer}}</p>
					                </div>
					            </div>
					            @endfor
					        </div>
					        @endforeach
					    </div>
					</div>
				</div> 
			</div>
	       	<div class="col-md-2"></div>
		</div>
	</div>
</section>
@endsection

@section('your_js')
@endsection