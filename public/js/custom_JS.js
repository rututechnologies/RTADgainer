$("#Loader").click(function () {


        // if(($('#common__modal_box').hasClass('in')))
        // {
        //     alert($('#common__modal_box').hasClass('in'));
        //     $(this).html("Creaet");
        // }
        // else{
        //     alert($('#common__modal_box').hasClass('in'));
        //     $(this).html("Loading<i class='fa fa-spinner' aria-hidden='true'></i>");
        // }
     console.log($('#common__modal_box').is(':visible'));
});

$(document).ready(function () {
    $("#logSelect").change(function () {
        $("#displayText").html($(this).val());
        $value=$(this).val();
        if($value==1){
          alert($value);
            $("#tab-8").show();
        }
        else{
          console.log($value);
        }
    });
});

// $(this).find(':selected').data('#tab-1')

$("#e_Log #tab-1").show();
function load_logData(value){
    $("#e_Log .tab-pane ").hide();

    $("#tab-"+value).show();
}



