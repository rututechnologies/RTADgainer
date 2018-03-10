	{!! HTML::script('assets/js/jquery-1.11.3.min.js') !!}
	{!! HTML::script('assets/js/bootstrap.min.js') !!} 
	{!! HTML::script('assets/js/jquery.validate.min.js') !!}
	{!! HTML::script('assets/js/textAvatar.js') !!}
	{!! HTML::script('assets/js/sidemenu.js') !!}
	{!! HTML::script('assets/third/toastr/toastr.min.js') !!}
	{!! HTML::script('assets/third/sortable/sortable.min.js') !!}
	{!! HTML::script('assets/js/jquery.knob.min.js') !!}
	@include('notification')
	{!! HTML::script('assets/js/bootbox.js') !!}
	{!! HTML::script('assets/third/slimscroll/jquery.slimscroll.min.js') !!}
    @if(in_array('calendar',$assets))
	{!! HTML::script('assets/third/fullcalendar/moment.min.js') !!}
	{!! HTML::script('assets/third/fullcalendar/fullcalendar.min.js') !!}
	{!! HTML::script('assets/third/fullcalendar/lang-all.js') !!}
	@endif
    @if(in_array('graph',$assets))
	{!! HTML::script('https://www.gstatic.com/charts/loader.js') !!}
	@endif
    @if(in_array('rte',$assets))
	{!! HTML::script('assets/third/summernote/summernote.js') !!}
	@endif
    @if(in_array('timepicker',$assets))
	{!! HTML::script('assets/third/timepicker/bootstrap-clockpicker.min.js') !!}
	@endif
    @if(in_array('tour',$assets))
	{!! HTML::script('assets/third/bootstrap-tour/bootstrap-tour.min.js') !!}
	@endif
	{!! HTML::script('assets/third/jquery-ui/jquery-ui.min.js') !!}
	{!! HTML::script('assets/third/select2/js/select2.min.js') !!}
	{!! HTML::script('assets/third/datatable/datatables.min.js') !!}
	{!! HTML::script('assets/third/nifty-modal/js/classie.js') !!}
	{!! HTML::script('assets/third/nifty-modal/js/modalEffects.js') !!}
	{!! HTML::script('assets/third/select/bootstrap-select.min.js') !!}
	{!! HTML::script('assets/third/input/bootstrap.file-input.js') !!}
	{!! HTML::script('assets/third/datepicker/js/bootstrap-datepicker.js') !!}
	{!! HTML::script('assets/third/icheck/icheck.min.js') !!}

    @if(config('lang.'.session('lang').'.datepicker') != 'en')
	{!! HTML::script('assets/third/datepicker/locale/bootstrap-datepicker.'.config('lang.'.session('lang').'.datepicker').'.js',array('charset' => 'UTF-8')) !!}
    @endif

    @if(in_array('datetimepicker',$assets) || in_array('timepicker',$assets))
	{!! HTML::script('assets/third/datetimepicker/bootstrap-datetimepicker.js') !!}
	@if(config('lang.'.session('lang').'.datetimepicker') != 'en')
	{!! HTML::script('assets/third/datetimepicker/locale/bootstrap-datetimepicker.'.config('lang.'.session('lang').'.datetimepicker').'.js',array('charset' => 'UTF-8')) !!}
	@endif
    @endif

    @if(config('lang.'.session('lang').'.validation') != 'en')
	{!! HTML::script('assets/js/validation-localization/messages_'.config('lang.'.session('lang').'.validation').'.js',array('charset' => 'UTF-8')) !!}
    @endif
	{!! HTML::script('assets/js/validation-form.js') !!}

	{!! HTML::script('assets/js/wmlab.js') !!}
	</body>
</html>