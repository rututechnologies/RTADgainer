(function($){
    $(function( ){

        $('body').on('click', '.genURL', function(){

            var info = this.id.split("_");

            var ktype = $(this).attr('ktype');

            var camp = info[1];

            var URL_TYPE = $(this).attr('rel');

            var AG_URL = 'http://adgainersolutions.com/adgainer/index.php/incomingdata/PPCserver?AGurl=';

            var kw = "{keyword}";
            var term = "{keyword}";

            if ($('#yahoo' + URL_TYPE).is(':checked') == true) {
                var kw = "{OVKEY}";
                var term = "{OVRAW}";
            }

            var PPC_URL_ = $('#PPC_URL_' + camp + URL_TYPE).val();
            var PPC_SOURCE_ = $('#PPC_SOURCE_' + camp + URL_TYPE).val();
            var PPC_CAMPAIGN_ = $('#PPC_CAMPAIGN_' + camp + URL_TYPE).val();
            var PPC_MEDIUM_ = $('#PPC_MEDIUM_' + camp + URL_TYPE).val();
            var PPC_CONTENT_ = $('#PPC_CONTENT_' + camp + URL_TYPE).val();
            var PPC_CUSTOM1N_ = $('#PPC_CUSTOM1N_' + camp + URL_TYPE).val();
            var PPC_CUSTOM1V_ = $('#PPC_CUSTOM1V_' + camp + URL_TYPE).val();
            var PPC_CUSTOM2N_ = $('#PPC_CUSTOM2N_' + camp + URL_TYPE).val();
            var PPC_CUSTOM2V_ = $('#PPC_CUSTOM2V_' + camp + URL_TYPE).val();
            var PPC_CUSTOM3N_ = $('#PPC_CUSTOM3N_' + camp + URL_TYPE).val();
            var PPC_CUSTOM3V_ = $('#PPC_CUSTOM3V_' + camp + URL_TYPE).val();

            QR_URL = PPC_URL_ + '?qr_id=' + camp.substr(0, 16);

            PPC_URL_ = encodeURIComponent(PPC_URL_);
            PPC_SOURCE_ = encodeURIComponent(PPC_SOURCE_);
            PPC_CAMPAIGN_ = encodeURIComponent(PPC_CAMPAIGN_);
            PPC_CONTENT_ = encodeURIComponent(PPC_CONTENT_);
            PPC_MEDIUM_ = encodeURIComponent(PPC_MEDIUM_);
            PPC_CUSTOM1N_ = encodeURIComponent(PPC_CUSTOM1N_);
            PPC_CUSTOM1V_ = encodeURIComponent(PPC_CUSTOM1V_);
            PPC_CUSTOM2N_ = encodeURIComponent(PPC_CUSTOM2N_);
            PPC_CUSTOM2V_ = encodeURIComponent(PPC_CUSTOM2V_);
            PPC_CUSTOM3N_ = encodeURIComponent(PPC_CUSTOM3N_);
            PPC_CUSTOM3V_ = encodeURIComponent(PPC_CUSTOM3V_);

            if (URL_TYPE == "_D") {
                var FINAL_URL = AG_URL + PPC_URL_ + '&display_ad_id=' + camp + '&' + ktype + '=' + kw + '&utm_source=' + PPC_SOURCE_ + '&utm_medium=' + PPC_MEDIUM_ + '&utm_campaign=' + PPC_CAMPAIGN_ + '&utm_term=' + term + '&utm_content=' + PPC_CONTENT_ + '&source=' + PPC_SOURCE_ + '&' + PPC_CUSTOM1N_ + '=' + PPC_CUSTOM1V_ + '&' + PPC_CUSTOM1N_ + '=' + PPC_CUSTOM1V_ + '&' + PPC_CUSTOM1N_ + '=' + PPC_CUSTOM1V_ + '&matchtype={matchtype}&network={network}';

            } else {
                var FINAL_URL = AG_URL + PPC_URL_ + '&url_campaign_id=' + camp + '&' + ktype + '=' + kw + '&utm_source=' + PPC_SOURCE_ + '&utm_medium=' + PPC_MEDIUM_ + '&utm_campaign=' + PPC_CAMPAIGN_ + '&utm_term=' + term + '&utm_content=' + PPC_CONTENT_ + '&source=' + PPC_SOURCE_ + '&' + PPC_CUSTOM1N_ + '=' + PPC_CUSTOM1V_ + '&' + PPC_CUSTOM1N_ + '=' + PPC_CUSTOM1V_ + '&' + PPC_CUSTOM1N_ + '=' + PPC_CUSTOM1V_ + '&matchtype={matchtype}&network={network}';

            }

            $('#QRCODE_' + camp + URL_TYPE).html('');
            $('#QRCODE_' + camp + URL_TYPE).qrcode({
                render: 'div',
                color: '#3a3',
                text: QR_URL
            });

            $('#PPC_RESULT_' + camp + URL_TYPE).html(FINAL_URL);

        });

    });
}(jQuery));