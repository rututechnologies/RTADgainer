
// DOMAIN: adgainer
// REF: http://calltrack1.adgainer.co.jp/ 1

//VIEWS: 2
// ref3  
// ref4 /adgainer/index.php/incomingdata?campaign_id=4e1f3f5aef6127908a212d482f82bae9&undefined&currentURL=http://calltrack1.adgainer.co.jp/&referrer=123.com&vars=&=&campaign_id=4e1f3f5aef6127908a212d482f82bae9&undefined=&currentURL=http://calltrack1.adgainer.co.jp/&referrer=&device_id=36b0ad4fa52bdea3d3a2e14e42296e83&t=1523908883805&ga_client_id=1104359776.1523908868&ga_tracking_id=UA-60704094-1 
// ref5  
// ref6  
// ref 123.com 
// getV campaign_id=4e1f3f5aef6127908a212d482f82bae9&undefined=&currentURL=http://calltrack1.adgainer.co.jp/&referrer=123.com&vars=&=&campaign_id=4e1f3f5aef6127908a212d482f82bae9&undefined=&currentURL=http://calltrack1.adgainer.co.jp/&referrer=&device_id=36b0ad4fa52bdea3d3a2e14e42296e83&t=1523908883805&ga_client_id=1104359776.1523908868&ga_tracking_id=UA-60704094-1& 
// currGet &campaign_id=4e1f3f5aef6127908a212d482f82bae9&undefined=&currentURL=http://calltrack1.adgainer.co.jp/&referrer=123.com&vars=&=&campaign_id=4e1f3f5aef6127908a212d482f82bae9&undefined=&currentURL=http://calltrack1.adgainer.co.jp/&referrer=&device_id=36b0ad4fa52bdea3d3a2e14e42296e83&t=1523908883805&ga_client_id=1104359776.1523908868&ga_tracking_id=UA-60704094-1 
// ref2  
// combRef  
// TYPE: 
//KEY: 
// VISITOR: 36.83.84.196 //  /   /  /  
// SOURCE : 
// ENTRY 1// ACTIVE P+D// 563//TYPE: 

// WRITE

if (typeof jQuery === 'undefined') {
    console.log('No jQuery');
}

// PHONE: 05052230738//DEF: 1

// PF 14

jQuery(document).ready(function(){
    jQuery(window).ready(function(){
        replacePhoneNumbers("05058348600", "050-5223-0738");
        var all_HTML_AG_ORIG = jQuery("body").html().length;
        jQuery(document).ajaxComplete(function(){
            var all_HTML_AG = jQuery("body").html().length;
            if (all_HTML_AG != all_HTML_AG_ORIG) {
                replacePhoneNumbers("05058348600", "050-5223-0738");
                all_HTML_AG_ORIG = jQuery("body").html().length;
            }
        });
        if (typeof adg_callback === "function") {
            adg_callback();
        }
        function replacePhoneNumbers(elementValue, trackingNumber){

            var children = jQuery("body").find("*");
            var phoneNumberPattern = new Array();
            var replaceNumbers = elementValue.split(",");
            var allReplaceNumbers = replaceNumbers.length;
            var limit = allReplaceNumbers - 1;

            if (limit == -1 && replaceNumbers[0] != "") {
                limit = 0;
            }

            for (x = 0; x <= limit; x++) {
                findNum = replaceNumbers[x];
                var bodyText = jQuery("body").html();
                var charLength = replaceNumbers[x].length;

                if (charLength > 5) {
                    jQuery.each(children, function(x, y){
                        var name = jQuery(this).attr("name");
                        var href = jQuery(this).attr("href");
                        var title = jQuery(this).attr("title");
                        var src = jQuery(this).attr("src");
                        var onclick = jQuery(this).attr("onclick");
                        // REVIEW: trim
                        var text_ = jQuery(this).html().trim();

                        //replace vanity
                        var vanityFind = "";
                        // REVIEW: replace text
                        if (text_.length > 0 && text_ == findNum) {
                            jQuery(this).html(trackingNumber);
                        }
                        //if (text_.length > 0 && vanityFind == text_ && vanityFind.length > 0) {
                        //	jQuery(this).text(trackingNumber);
                        //}
                        if (name != undefined && name != "") {
                            if (name.replace != undefined) {
                                var newName = replaceAttributes(trackingNumber, name, findNum);
                                if (newName != false) {
                                    try {
                                        jQuery(this).attr("name", newName).addClass("track_ag_click");
                                    } catch (e) {
                                        console.log(e.message);
                                    }
                                }
                            }
                        }

                        if (href != undefined && href != "") {
                            if (href.replace != undefined) {
                                var newHref = replaceAttributes(trackingNumber, href, findNum);
                                if (newHref != false) {
                                    try {
                                        jQuery(this).attr("href", newHref).addClass("track_ag_click");
                                    } catch (e) {
                                        console.log(e.message);
                                    }
                                }
                            }
                        }

                        if (title != undefined && title != "") {
                            if (title.replace != undefined) {
                                var newTitle = replaceAttributes(trackingNumber, title, findNum);
                                if (newTitle != false) {
                                    try {
                                        jQuery(this).attr("title", newTitle).addClass("track_ag_click");
                                    } catch (e) {
                                        console.log(e.message);
                                    }
                                }
                            }
                        }

                        if (src != undefined && src != "") {
                            if (src.replace != undefined) {
                                var srcTrackingNumber = trackingNumber.replace(/[_\s().-]/g, "");
                                var newSrc = src.replace(findNum, srcTrackingNumber);
                                var is_rep = newSrc.search(srcTrackingNumber);
                                if (newSrc != false && is_rep > -1) {
                                    try {
                                        jQuery(this).attr("src", newSrc).addClass("track_ag_click");
                                    } catch (e) {
                                        console.log(e.message);
                                    }
                                }
                            }
                        }

                        if (onclick != undefined && onclick != "") {
                            if (onclick.replace != undefined) {
                                var newOnclick = replaceAttributes(trackingNumber, onclick, findNum);
                                if (newOnclick != false) {
                                    try {
                                        jQuery(this).attr("onclick", newOnclick).addClass("track_ag_click");
                                    } catch (e) {
                                        console.log(e.message);
                                    }
                                }
                            }
                        }
                    });

                    jQuery.each(children, function(x){
                        var result = replaceText(findNum, trackingNumber, this, this);
                        if (result === true) {
                            try {
                                jQuery(this).addClass("track_ag_click");
                            } catch (e) {
                                console.log(e.message);
                            }
                        }
                    });
                }
            }
            //

            if (typeof agCallback === "function") {
                agCallback(trackingNumber);
            }

        }
    });
});

function replaceText(oldText, newText, node, element, allElements){
    node = node || document.body; // base node 

    var childs = node.childNodes, i = 0;

    //oldText 8005551212
    //newText 877.123.4567	  
    //newText 1.877.123.4567	  

    var textNewNum = newText.replace(/\D/g, ''); 				// 8771234567		18771234567	 
    var textNewNoOne = newText.substring(1, newText.length); 			// 77.123.4567		877.123.4567	 

    var format = new Array(
        /[0-9]{11}/g,
        /[0-9]{10}/g,
        /[1][(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}/g,
        /[1][(][0-9]{3}[)][-\s\.][0-9]{3}[-\s\.][0-9]{4}/g,
        /[1][-\s\.][(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}/g,
        /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}/g,
        /[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}/g,
        /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{4}/g,
        /[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{4}/g,
        /[(]{0,1}[0-9]{2}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{4}/g,
        /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{2}[-\s\.]{0,1}[0-9]{4}/g,
        /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{3}/g,
        /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{3}/g,
        /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{2}/g
        );


    while (node = childs[i]) {

        if (node.nodeType == 3) { // text node found, do the replacement
            if (node.textContent && node.textContent.length > 5) {


                var text = node.textContent;				// (800) 555-1212   1(800) 555-1212
                var text_ = text.replace(/\D/g, '');			// 8005551212   	18005551212
                var noOne = text.substring(1, text.length);  //  005551212   	8005551212

                var textOne = '1' + oldText;					//  18005551212  



                if (text.search(newText) > 0 || text.search(textNewNoOne) > 0) {
                    return false;
                } else {

                    if (text_.match(oldText) && text_ != '' && text_.match(newText) === null) {

                        for (var y in format) {
                            var repl = text.match(format[y]);
                            if (repl !== null) {
                                node.textContent = text.replace(repl, newText);

                                return true;
                            }

                        }
                        return false;
                    } else if (text_.match(textOne) && text_ != '') {

                        for (var y in format) {
                            var repl = text.match(format[y]);
                            if (repl !== null) {
                                node.textContent = text.replace(repl, newText);

                                return true;
                            }

                        }
                        return false;
                    }

                }

            } else if (node.nodeValue && node.nodeValue.length > 5) { // support to IE

                var text = node.nodeValue;					// (800) 555-1212   1(800) 555-1212
                var text_ = text.replace(/\D/g, '');			// 8005551212   	18005551212
                var noOne = text.substring(1, text.length);  //  005551212   	8005551212

                var textOne = '1' + oldText;					//  18005551212  

                var oldTextNum = oldText.replace(/\D/g, '');

                if (text.search(newText) > 0 || text.search(textNewNoOne) > 0) {
                    return false;
                } else {

                    if (text_.match(oldText) && text_ != '' && (text_.match(textOne) == null || text_.match(textOne) == '')) {

                        for (var y in format) {
                            var repl = text.match(format[y]);
                            if (repl !== null) {
                                node.nodeValue = text.replace(repl, newText);

                                return true;
                            }

                        }
                        return false;
                    } else if (text_.match(textOne) && text != '') {

                        for (var y in format) {
                            var repl = text.match(format[y]);
                            if (repl !== null) {
                                node.nodeValue = text.replace(repl, newText);

                                return true;
                            }

                        }
                        return false;
                    }
                }


            } else {
                return false;
            }
        } else { // not a text mode, look forward
            replaceText(oldText, newText, node);
        }
        i++;
    }
}


function replaceAttributes(trackingNumber, content, findNum, log)
{

    var format = new Array(
        /[0-9]{11}/g,
        /[0-9]{10}/g,
        /[1][(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}/g,
        /[1][(][0-9]{3}[)][-\s\.][0-9]{3}[-\s\.][0-9]{4}/g,
        /[1][-\s\.][(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}/g,
        /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}/g,
        /[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}/g,
        /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{4}/g,
        /[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{4}/g,
        /[(]{0,1}[0-9]{2}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{4}/g,
        /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{2}[-\s\.]{0,1}[0-9]{4}/g,
        /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{3}/g,
        /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{3}/g,
        /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{2}/g
        );


    for (var x in format) {

        try {

            var numToReplace = content.replace(/\D/g, ''); // if(log == 1) { console.log('N '+numToReplace); }
            var toFind = findNum.replace(/\D/g, ''); // if(log == 1) { console.log('F '+toFind); }

            //if(log == 1 && numToReplace == toFind){ console.log(toFind+' '+numToReplace); }

            var n = content.match(format[x]);
            var y = toFind.match(format[x]);
            if (log == 1) {
                console.log(content + ' [' + n + '] ' + x + ' (' + y + ') ' + toFind + ' ' + numToReplace);
            }



            if (n !== null && numToReplace == toFind) {
                if (log == 1) {
                    console.log(numToReplace + ' n ' + trackingNumber);
                }
                content = content.replace(n, trackingNumber);
                //console.log('inside '+content); 
                return content;
                break;
            }

        } catch (e) {
            //console.log(e.message );  
        }

    }
    return false;

}

// TODO: updatetime				
//			 setInterval(function() {
//		
//					var ip = '36.83.84.196';
//					var id = '';
//					var session_id = '1c897bee2b47b2f0b60f132f6fd9582a';
//					var variable_defined = 1;						
//						jQuery.post('http://rtadgainer.adgainersolutions.com/incomingdata/updatetime?variable='+variable_defined, {ip:ip,session_id:session_id,id:id}, function(data){
//																									
//										//console.log(data);
//												
//						}, 'jsonp');
//					
//				}, 30000); 
//				
//			
// Start Trigger
jQuery(document).ready(function(){
    var url_ = '';
});
// End Trigger


jQuery(document).ready(function(){
    var phone = '050-5223-0738';
    if (jQuery('#phone_number_holder_0').length > 0 && phone != '') {
        jQuery('#phone_number_holder_0').html(phone);
    }
    if (jQuery('#phone_number_holder_1').length > 0 && phone != '') {
        jQuery('#phone_number_holder_1').html(phone);
    }
    if (jQuery('#phone_number_holder_2').length > 0 && phone != '') {
        jQuery('#phone_number_holder_2').html(phone);
    }
    if (jQuery('#phone_number_holder_3').length > 0 && phone != '') {
        jQuery('#phone_number_holder_3').html(phone);
    }
    if (jQuery('#phone_number_holder_4').length > 0 && phone != '') {
        jQuery('#phone_number_holder_4').html(phone);
    }
    if (jQuery('#phone_number_holder_5').length > 0 && phone != '') {
        jQuery('#phone_number_holder_5').html(phone);
    }
    if (jQuery('#phone_number_holder_6').length > 0 && phone != '') {
        jQuery('#phone_number_holder_6').html(phone);
    }
    if (jQuery('#phone_number_holder_7').length > 0 && phone != '') {
        jQuery('#phone_number_holder_7').html(phone);
    }
    if (jQuery('#phone_number_holder_8').length > 0 && phone != '') {
        jQuery('#phone_number_holder_8').html(phone);
    }
    if (jQuery('#phone_number_holder_9').length > 0 && phone != '') {
        jQuery('#phone_number_holder_9').html(phone);
    }
    if (jQuery('#phone_number_holder_10').length > 0 && phone != '') {
        jQuery('#phone_number_holder_10').html(phone);
    }
    if (jQuery('#phone_number_holder_11').length > 0 && phone != '') {
        jQuery('#phone_number_holder_11').html(phone);
    }
    if (jQuery('#phone_number_holder_12').length > 0 && phone != '') {
        jQuery('#phone_number_holder_12').html(phone);
    }
    if (jQuery('#phone_number_holder_13').length > 0 && phone != '') {
        jQuery('#phone_number_holder_13').html(phone);
    }
    if (jQuery('#phone_number_holder_14').length > 0 && phone != '') {
        jQuery('#phone_number_holder_14').html(phone);
    }
    if (jQuery('#phone_number_holder_15').length > 0 && phone != '') {
        jQuery('#phone_number_holder_15').html(phone);
    }
    if (jQuery('.phone_number_holder').length > 0 && phone != '') {
        jQuery('.phone_number_holder').html(phone);
    }
});