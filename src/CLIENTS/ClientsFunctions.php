<?php
require_once("../SYSTEM/DATABASE.php");

class CLIENTS{
    
    public static function insertNewOrganization($ID_ORG,$ORG_NAME,$ORG_PHONE,$ORG_EMAIL,$ORG_STREET,$ORG_STREET_2,$ORG_ZIP,$ORG_CITY,$ORG_STATE,$ORG_COUNTRY,$ORG_PARENT){
        global $CON;
        
        $query="INSERT INTO tradeassistant.organization_org(ID_ORG,ORG_NAME,ORG_PHONE,ORG_EMAIL,ORG_STREET,ORG_STREET_2,ORG_ZIP,ORG_CITY,ORG_STATE,ORG_COUNTRY,ORG_PARENT) VALUES ('".$ID_ORG."','".$ORG_NAME."','".$ORG_PHONE."','".$ORG_EMAIL."','".$ORG_STREET."','".$ORG_STREET_2."','".$ORG_ZIP."','".$ORG_CITY."','".$ORG_STATE."','".$ORG_COUNTRY."','".$ORG_PARENT."');";
        $data=  mysqli_query($CON, $query);
        
        if($data){
            return true;
        }else{
            return false;
        }
    }
    
}




































?>