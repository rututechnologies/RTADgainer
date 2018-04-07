(function($){
    $(function( ){

        $('body').delegate('#do_search', touchClick, function(){

            var $allInputs = $('#searchForm').find('input,select');

            var allData = new Array();

            $.each($allInputs, function(x, y){

                if (y.value != "") {
                    if (y.type == "radio" && $(this).is(':checked')) {
                        allData[x] = y.name + "::" + y.value;

                    }

                    if (y.type != "radio") {
                        allData[x] = y.name + "::" + y.value;
                    }
                }
            });

            var AUTH_KEY = $('#AUTH_KEY').val();

            $('#showLoadingClock').fadeIn();
            $.post(baseURL + 'twilio/do_searchNumbers', { ALLDATA: allData, key: AUTH_KEY }, function(data){
                $('#showLoadingClock').fadeOut();
                $('#numberResults').html(data);

            });

        });

    });
}(jQuery));