<!-- step-4: Use the Rule Engine -->

<?php
   
   include "vitals.php";
   include "validate.php";
   include "rules.php";
   include "scanner.php";

   foreach($patient_vitals as $vitals)
    {
        if($vitals["vital_type"]=="Temperature")
            {
                $res = validateVital($vitals,"checkTemperature");
            }
        elseif($vitals["vital_type"]=="Pulse")
            {
                $res = validateVital($vitals,"checkPulse");
            }
        elseif($vitals["vital_type"]=="BP")
            {
                $res = validateVital($vitals,"checkBloodPressure");
            }

        echo "Patient:  ".$res["patient_name"]."<br>";
        echo "Vital:  ".$res["vital_type"]."<br>";
        echo "Value:  ".$res["value"]."<br>";
        echo "Status:  ".$res["status"]."<br>";
        echo "Message:  ".$res["message"]."<br>";

        echo "-----------------------<br><br>";
    }

    // step-6: call recursive scanner and print it
    
    echo "Project Files: <br><br>";
    scanFolder(__DIR__);   //current file's folder path
?>