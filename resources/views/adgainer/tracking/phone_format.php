<?php

if(isset($phone_number_to_assign_)) $phone_number_to_assign = $phone_number_to_assign_;

$phone_number_to_assign = (string) $phone_number_to_assign;

if($have_campaign->country_tracking == "keyword"){					
					
    if($have_campaign->$phone_format == "0"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "$phone1.$phone2.$phone3";

    }

    if($have_campaign->$phone_format == "1"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "$phone1.$phone2.$phone3";

    }
    if($have_campaign->$phone_format == "2"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "$phone1-$phone2-$phone3";	

    }
    if($have_campaign->$phone_format == "3"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "$phone1 $phone2 $phone3";

    }
    
    if($have_campaign->$phone_format == "4"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "($phone1) $phone2-$phone3";

    }
    
    if($have_campaign->$phone_format == "5"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "($phone1) $phone2 $phone3";

    }
    
    if($have_campaign->$phone_format == "6"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "1.$phone1.$phone2.$phone3";

    }
    
    if($have_campaign->$phone_format == "7"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "1-$phone1-$phone2-$phone3";

    }
    
    if($have_campaign->$phone_format == "8"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "1 $phone1 $phone2 $phone3";

    }
    
    if($have_campaign->$phone_format >= "9"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "1 ($phone1) $phone2 $phone3";

    }

}

if($have_campaign->country_tracking == "j_keyword"){
    
    if($have_campaign->$phone_format == "1"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "$phone1.$phone2.$phone3";

    }
    if($have_campaign->$phone_format == "2"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "$phone1-$phone2-$phone3";	

    }
    if($have_campaign->$phone_format == "3"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "$phone1 $phone2 $phone3";

    }
    
    if($have_campaign->$phone_format == "4"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "($phone1) $phone2-$phone3";

    }
    
    if($have_campaign->$phone_format >= "5" && $have_campaign->$phone_format < 10){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,3);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "($phone1) $phone2 $phone3";

    }					

    if($have_campaign->$phone_format == "10"){
            $phone1 = substr($phone_number_to_assign,0,4);
            $phone2 = substr($phone_number_to_assign,4,3);
            $phone3 = substr($phone_number_to_assign,7,$last);
            $phone_number_to_assign = "$phone1-$phone2-$phone3";

    }
    
    if($have_campaign->$phone_format == "11"){
            $phone1 = substr($phone_number_to_assign,0,4);
            $phone2 = substr($phone_number_to_assign,4,2);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "$phone1-$phone2-$phone3";

    }
    
    
    if($have_campaign->$phone_format == "12"){
            $phone1 = substr($phone_number_to_assign,0,4);
            $phone2 = substr($phone_number_to_assign,4,3);
            $phone3 = substr($phone_number_to_assign,7,$last);
            $phone_number_to_assign = "$phone1-$phone2-$phone3";

    }
    
    if($have_campaign->$phone_format == "13"){
            $phone1 = substr($phone_number_to_assign,0,2);
            $phone2 = substr($phone_number_to_assign,2,4);
            $phone3 = substr($phone_number_to_assign,6,$last);
            $phone_number_to_assign = "$phone1-$phone2-$phone3";

    }
                                                    
    if($have_campaign->$phone_format == "14"){
            $phone1 = substr($phone_number_to_assign,0,3);
            $phone2 = substr($phone_number_to_assign,3,4);
            $phone3 = substr($phone_number_to_assign,7,$last);
            $phone_number_to_assign = "$phone1-$phone2-$phone3";

    }
    
    if($have_campaign->$phone_format == "15"){
            $phone1 = substr($phone_number_to_assign,0,4);
            $phone2 = substr($phone_number_to_assign,4,4);
            $phone3 = substr($phone_number_to_assign,8,$last);
            $phone_number_to_assign = "$phone1-$phone2-$phone3";

    }

}

if($have_campaign->country_tracking == "k_keyword" || $have_campaign->country_tracking == "ch_keyword"){
    
    
    if($have_campaign->$phone_format == "1"){
            $phone1 = substr($phone_number_to_assign,0,2);
            $phone2 = substr($phone_number_to_assign,2,3);
            $phone3 = substr($phone_number_to_assign,5,$last);
            $phone_number_to_assign = "$phone1.$phone2.$phone3";

    }
    if($have_campaign->$phone_format == "2"){
            $phone1 = substr($phone_number_to_assign,0,2);
            $phone2 = substr($phone_number_to_assign,2,3);
            $phone3 = substr($phone_number_to_assign,5,$last);
            $phone_number_to_assign = "$phone1-$phone2-$phone3";	

    }
    if($have_campaign->$phone_format == "3"){
            $phone1 = substr($phone_number_to_assign,0,2);
            $phone2 = substr($phone_number_to_assign,2,3);
            $phone3 = substr($phone_number_to_assign,5,$last);
            $phone_number_to_assign = "$phone1 $phone2 $phone3";

    }
    
    if($have_campaign->$phone_format == "4"){
            $phone1 = substr($phone_number_to_assign,0,2);
            $phone2 = substr($phone_number_to_assign,2,3);
            $phone3 = substr($phone_number_to_assign,5,$last);
            $phone_number_to_assign = "($phone1) $phone2-$phone3";

    }
    
    if($have_campaign->$phone_format >= "5"){
            $phone1 = substr($phone_number_to_assign,0,2);
            $phone2 = substr($phone_number_to_assign,2,3);
            $phone3 = substr($phone_number_to_assign,5,$last);
            $phone_number_to_assign = "($phone1) $phone2 $phone3";

    }
            
            
}

if(isset($phone_number_to_assign_)) $phone_number_to_assign_ = $phone_number_to_assign;
                                        
?>