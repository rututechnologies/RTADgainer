@extends('layouts.app')
@section('title','Navigation List ')

@section('style')


@endsection

@section('content')

    <div class="wrapper border-bottom white-bg page-heading">
        <div class="col-md-3">
            <div class="row">
                <h1 class="module_heading">
                <span>
                    Navigation
                </span>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> Navigation
                            List</strong>
                    </li>
                </ol>
            </div>
        </div>

        @if(count($navigationList)>0)
            <div class="col-md-7">
                    <div class="row">
                    <div class="col-lg-3 col-xs-3 col-sm-3 col-md-3">
                            <div class="widget style1"
                                 >
                                <div class="row text-center">
                                    <h2>{{count($navigationList)}}</h2>
                                    <label class="label label-warning">Total</label>
                                </div>
                            </div>
                    </div>
                    </div>
            </div>
        @else
        @endif

         
    </div>

<!-- Main content -->

    <div class="wrapper wrapper-content animated fadeInRight wrapper_custom_style">

               
    <div class="row">
        <div class="collapse box_details_create" id="box_ambulance_details">
            <div class="ibox float-e-margins">
                <div class="ibox-title"><strong>Add New</strong> Navigation Link
                    <div class="ibox-tools pull-right">
                        <button class="btn btn-xs btn-primary"
                                data-toggle="collapse"
                                data-target="#box_ambulance_details" aria-expanded="true" style="margin-top: -3px !important;"><i class="fa fa-minus icon"></i>  Hide</button>
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="fullscreen-link">
                            <i class="fa fa-expand"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    @include('v1.Navigation.micros.navigation_add_form')
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
       <!--  <div class="row">
            <div class="col-md-12 collapse" id="box_analytics_details">
                <div class="ibox">
                    <div class="ibox-title"><strong>Analytics</strong>
                        <div class="ibox-tools pull-right">
                            <button class="btn btn-xs btn-primary"
                                    data-toggle="collapse"
                                    data-target="#box_analytics_details" aria-expanded="true" style="margin-top: -3px !important;"><i class="fa fa-minus icon"></i>  Hide</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                   <!--  <div class="ibox-content">

                        Here will be analytics
                    </div> -->
                    <!-- /.box-body -->
            <!--     </div>
            </div>
        </div> -->
   <!--  <div class="row">
        <div class="col-md-12 collapse box_details_search" id="box_ambulance_search_details">
            <div class="ibox float-e-margins">
                <div class="ibox-title"><strong>Search</strong>
                    <div class="ibox-tools pull-right">
                        <button class="btn btn-xs btn-primary"
                                data-toggle="collapse"
                                data-target="#box_ambulance_search_details"
                                aria-expanded="true" style="margin-top: -3px !important;"><i class="fa fa-minus icon"></i>  Hide</button>
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="fullscreen-link">
                            <i class="fa fa-expand"></i>
                        </a>
                    </div>
                </div>
                <!-- /.box-header -->
               <!--  <div class="ibox-content">

                    @include('v1.Navigation.micros.navigation_search_form')
                </div> -->
                <!-- /.box-body -->
           <!--  </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title"><strong>Navigation </strong> List &nbsp;&nbsp;
              <!--   <label>Total </label> : {{count($navigationList)}} -->
                <div class="ibox-tools pull-right">

                   <!--   <button class="btn btn-xs btn-primary m-t-n-xs"
                             data-toggle="collapse"
                             data-target="#box_ambulance_search_details" aria-expanded="true" style="margin-top: -3px !important;"><i class="fa fa-search icon"></i> </button> -->
                     <button class="btn btn-xs btn-success m-t-n-xs"
                             data-toggle="collapse"
                             data-target="#box_ambulance_details" aria-expanded="true" style="margin-top: -3px !important;"><i class="fa fa-plus icon"></i>  </button>
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="fullscreen-link">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
                </div>
            <!-- /.box-header -->
           <div class="ibox-content" id="page-lists-content">
                      @include('v1.Navigation.micros.navigation_list')
         </div>
            <!-- /.box-body -->
        </div>
    </div>
    </div>
    </div>
@endsection

@section('scripts')
    <script>
 function load_datatable(form_action=null,form_name=null){
            $('.list_result_table').DataTable( {
               dom: "<'row'<'col-sm-5 margin-left-10'li><'col-sm-5 pull-right margin-right-10'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-4 margin-left-10'B><'col-sm-6 pull-right margin-right-10'p>>",
        
               buttons: [{
            extend: "print",
            text: '<i class="fa fa-print"></i>',
            title: $(".datatable").attr("data-table-title"),
            exportOptions: {
                columns: ":visible"
             }
                }, {
                    extend: "excel",
                    text: '<i class="fa fa-file-excel-o"></i>',
                    exportOptions: {
                        columns: ":visible"
                    }
                }, {
                    extend: "pdf",
                    text: '<i class="fa fa-file-pdf-o"></i>',
                    title: $(".datatable").attr("data-table-title"),
                    exportOptions: {
                        columns: ":visible"
                    }
                }, {
                    extend: "copy",
                    text: '<i class="fa fa-files-o"></i>',
                    exportOptions: {
                        columns: ":visible"
                    }
                }, {
                    extend: "colvis",
                    text: '<i class="fa fa-columns"></i>'
                }],
                });
            form_action=='show'?'':$("."+form_name).removeClass('in');
        }
        function delete_navigation(nav)
        {
            if (confirm("Are you sure you want to delete?")){
                $.post("{{ url('deleteNavigation')}}",  {_token:'{{csrf_token()}}',nav:nav})
                    .done(function(data) {
                        toastr.error('Navigation deleted successfully');

                        $('#page-lists-content').html(data);
                        load_datatable('hide','box_details_create');
                    });
                return false;
            }else
                return false;
        }
        function edit_navigation(nav) {


            $.post("{{ url('editNavigation')}}",  {_token:'{{csrf_token()}}',nav:nav})
                .done(function(data) {

                    // 'data' is the text returned, you can do any conditions based on that
                    $('#raise_ticket_dialog').dialog(data['content'],
                        data['title']);


//        $( "#raise_ticket_dialog" ).dialog({
//          width:800
//       });


                });

            return false;
        }

         
        $(document).ready(function() {

         load_datatable();
            var $btnSets = $('#responsive'),
                    $btnLinks = $btnSets.find('a');

            $btnLinks.click(function(e) {
                e.preventDefault();
                $(this).siblings('a.active').removeClass("active");
                $(this).addClass("active");
                var index = $(this).index();
                $("div.user-menu>div.user-menu-content").removeClass("active");
                $("div.user-menu>div.user-menu-content").eq(index).addClass("active");
            });
        });

        $( document ).ready(function() {
            $("[rel='tooltip']").tooltip();

            $('.view').hover(
                    function(){
                        $(this).find('.caption').slideDown(250); //.fadeIn(250)
                    },
                    function(){
                        $(this).find('.caption').slideUp(250); //.fadeOut(205)
                    }
            );

            $(document).on('submit', '#navigation_edit_form', function(e) {
                // post the data from the form
                $.post("{{ url('updateNavigation')}}",  $(this).serialize())
                    .done(function(data) {
                                               $('body').dialog('close');

                        toastr.success('Navigation updated successfully');

                        $('#page-lists-content').html(data);
                        load_datatable('hide','box_details_create');
                    });
                return false;
          


            });

            $(document).on('submit', '#save_new_navigation_form', function(e) {


                // post the data from the form
                $.post("{{ url('saveNavigation')}}", $(this).serialize())
                .done(function(data) 
                {

                    // 'data' is the text returned, you can do any conditions based on that
                    if(data)
                    {


                   document.getElementById("save_new_navigation_form").reset();
                                           // $('#raise_ticket_dialog').dialog(close);

                               $('#page-lists-content').html(data);
                                 load_datatable('hide','box_details_create');
                    }

                  });
                  e.preventDefault();
                return false;
              });
           
        });
    </script>
    <script>
        $(function () {
//             $(".select2").select2();

//             $(".select2_required").select2();
        })
        

    </script>
@endsection