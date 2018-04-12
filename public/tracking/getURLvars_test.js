function getURLvars () {
	
        var allVars;
        var currentURL = document.referrer;
        var varsArray = currentURL.split("?");
        if (varsArray[1]){
				allVars = encodeURIComponent(varsArray[1]);
        }else{
                allVars = "";
        }
               
        return allVars;
    }   


	

    var vars =  getURLvars();
    
    var referrer = document.referrer;
    
    if(referrer.search("://") > 0){
		var referrerSplit = referrer.split("://");
		var referrerURLSplit = referrerSplit[1].split("/");
		var referrer = referrerURLSplit[0];
	}
	
    if(vars == "" || vars == "undefined" || vars == null){
		
		var allVars;
        var currentURL = window.location.href;
        var varsArray = currentURL.split("?");
        if (varsArray[1]){
                allVars = encodeURIComponent(varsArray[1]);
        }else{
                allVars = "";
        }
        vars = allVars;
    }
