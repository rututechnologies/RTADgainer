(function($){
    $(function( ){

        $('body').on('change', '#goal_account_id', function(){
            var account_id = $(this).val();
            $('#goal_campaign_id').html('');
            $.post('/api/adgainer/campaign/getClientCampaigns', { account_id: account_id }, function(data){
                $('#goal_campaign_id').html(data);
                $('#goal_campaign_id').change();
            });
        });

        $('body').on('change', '#goal_campaign_id', function(){
            var campaign_id = $(this).val();
            $('#goal_count').html('');
            $.post('/api/adgainer/campaign/getCampaignGoals', { campaign_id: campaign_id }, function(data){
                $('#goal_count').html(data);
            });
        });

    });
}(jQuery));