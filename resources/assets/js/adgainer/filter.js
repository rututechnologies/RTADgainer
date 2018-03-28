(function($){
    $(function( ){

        // filter account 
        var filterAccountInput = $('#filter_account');
        var accountList = $('#account_list .account-item');
        filterAccountInput.keyup(function(){
            var term = $(this).val().trim().toLowerCase();
            accountList.each(function(){
                var name = $(this).children('.account-name').text().toLowerCase();
                if (name.search(term) === -1) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        });

        // filter campaign
        var filterCampaignInput = $('#filter_campaign');
        var campaignList = $('#campaign_list');
        filterCampaignInput.keyup(function(){
            var term = $(this).val().trim().toLowerCase();
            var items = campaignList.find('.campaign-item');
            items.each(function(){
                var name = $(this).children('.campaign-name').text().toLowerCase();
                if (name.search(term) === -1) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        });

    });
}(jQuery));