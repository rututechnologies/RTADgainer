function replacePhoneNumbers(elementValue, trackingNumber){
    var children = jQuery("body").find("*");
    var replaceNumbers = elementValue.split(",");
    var allReplaceNumbers = replaceNumbers.length;
    var limit = allReplaceNumbers - 1;
    if (limit == -1 && replaceNumbers[0] != "") {
        limit = 0;
    }

    for (x = 0; x <= limit; x++) {
        findNum = replaceNumbers[x];
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
                var vanityFind = "' . $have_campaign->vanity_to_replace . '";
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
//' . $newBody . '

    if (typeof agCallback === "function") {
        agCallback(trackingNumber);
    }

}