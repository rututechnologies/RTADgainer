(function($){
    $(function(){
        if ($('.existing_cust_phone').length > 0) {

            var account_id = $('#account_id_client').val();
            var campaign_id = $('#campaign_id_client').val();

            $.post('/api/adgainer/campaign/getMultiPhoneNumbers', {
                campaign_id: campaign_id,
                account_id: account_id
            }, function(data){

                $('.existing_cust_phone').html(data);

            });

            $('body').on('change', '.existing_cust_phone', function(){

                var thisId = this.id;
                var info = this.id.split("_");
                if ($(this).val() != "") {
                    var forward_to = $('#' + thisId + ' option:selected').attr('forward');
                    var phone_name = $('#' + thisId + ' option:selected').attr('name');
                    $('#FORWARD_' + info[1]).val(forward_to).attr('readonly', 'readonly').removeClass('inValid');
                    $('#PHONE_' + info[1]).val($(this).val()).attr('readonly', 'readonly').removeClass('inValid');
                    $('#NAME_' + info[1]).val(phone_name).removeClass('inValid');
                } else {
                    $('#FORWARD_' + info[1]).removeAttr('readonly').val('');
                    $('#PHONE_' + info[1]).removeAttr('readonly').val('');
                    $('#NAME_' + info[1]).val('');
                }

            });

        }
    });
}(jQuery))
