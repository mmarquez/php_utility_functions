<?php

/**
 * Checks if a mail is correct. It checks if the passed domain is real.
 */
function checkAndValidateEmail($mail){
    if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        list($user,$domaine)=split("@",$mail,2);
        if(!checkdnsrr($domaine,"MX")&& !checkdnsrr($domaine,"A"))
            return false;
        else
            return true;
    }
    else
        return false;
}
