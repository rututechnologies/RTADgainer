(function($){
    $(function( ){

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

        function replaceText(oldText, newText, node, element, allElements){
            node = node || document.body; // base node 

            var childs = node.childNodes, i = 0;

            //oldText 8005551212
            //newText 877.123.4567	  
            //newText 1.877.123.4567	  

            var textNewNum = newText.replace(/\D/g, ''); 				// 8771234567		18771234567	 
            var textNewNoOne = newText.substring(1, newText.length); 			// 77.123.4567		877.123.4567	 

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
            for (var x in format) {
                try {
                    var numToReplace = content.replace(/\D/g, '');
                    var toFind = findNum.replace(/\D/g, '');
                    var n = content.match(format[x]);
                    var y = toFind.match(format[x]);
                    if (n !== null && numToReplace == toFind) {
                        content = content.replace(n, trackingNumber);
                        return content;
                        break;
                    }

                } catch (e) {
                }

            }
            return false;

        }

        var numberToReplace = '050-5834-8600';
        var numberToReplace = '05058348600';
        var trackingNumber = '123456798';
        var replaceNumbers = numberToReplace.split(",");
        for (var x = 0; x < replaceNumbers.length; x++) {
            var replaceNumber = replaceNumbers[x];

            $("body").find("*").each(function(){
                var el = $(this);
                if(el.prop("tagName") == 'SCRIPT'){
                    return true;
                }
                // replace text
                var newText = replaceText(replaceNumber, trackingNumber, this, this);
                if (newText === true) {
                    $(this).addClass("track_ag_click");
                }
                // replace name
                if (el.attr('name')) {
                    var newVal = replaceAttributes(trackingNumber, el.attr('name'), replaceNumber);
                    $(this).attr("name", newVal).addClass("track_ag_click");
                }
                // replace href
                if (el.attr('href')) {
                    var newVal = replaceAttributes(trackingNumber, el.attr('href'), replaceNumber);
                    $(this).attr("href", newVal).addClass("track_ag_click");
                }
                // replace title
                if (el.attr('title')) {
                    var newVal = replaceAttributes(trackingNumber, el.attr('title'), replaceNumber);
                    $(this).attr("title", newVal).addClass("track_ag_click");
                }
                // replace src
                if (el.attr('src')) {
                    var newVal = replaceAttributes(trackingNumber, el.attr('src'), replaceNumber);
                    $(this).attr("src", newVal).addClass("track_ag_click");
                }
                // replace onclick
                if (el.attr('onclick')) {
                    var newVal = replaceAttributes(trackingNumber, el.attr('onclick'), numberToReplace);
                    $(this).attr("onclick", newVal).addClass("track_ag_click");
                }
            });

        }

    });
    
}(jQuery));