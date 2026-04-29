<!-- step-3: creating clinical rule functions (callbacks) -->

<?php
   
// Accept vital data
   function checkTemperature($vitalData)
   {
       $value = $vitalData["value"];

    //check n/h/l values

    if($value > 99)
        {
           $vitalData["status"]="HIGH";
           $vitalData["message"]="Fever Detected";
        }
    elseif($value < 97)  
        {
           $vitalData["status"]="LOW";
           $vitalData["message"]="Temperature low";
        }
    else
        {
           $vitalData["status"]="NORMAL";
           $vitalData["message"]="Temperature normal";
        }   

        // return updated vital data 
        return $vitalData;
   }

   function checkPulse($vitalData)  
   {
      
    $value = $vitalData["value"];

    if($value > 100)
        {
           $vitalData["status"]="HIGH";
           $vitalData["message"]="Pulse rate high";
        }
    elseif($value < 60)  
        {
           $vitalData["status"]="LOW";
           $vitalData["message"]="Pulse rate low";
        }
    else
        {
           $vitalData["status"]="NORMAL";
           $vitalData["message"]="Pulse rate normal";
        }    
        return $vitalData;
   } 

   function checkBloodPressure($vitalData)
   {
    $value = $vitalData["value"];  //value="120/80"

    $split= explode("/",$value);   //["120","80"]

    $sp = $split[0];    //120
    $dp = $split[1];    //80

    if($sp > 140 || $dp > 90)
        {
           $vitalData["status"]="HIGH";
           $vitalData["message"]="BP high";
        }
    elseif($sp < 90 || $dp < 60)
        {
           $vitalData["status"]="LOW";
           $vitalData["message"]="BP low";
        }
    else
        {
           $vitalData["status"]="NORMAL";
           $vitalData["message"]="BP normal";
        }    
        return $vitalData;
   }

?>