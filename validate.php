<!-- step:2 : creating higher-order validation func -->

<!-- What it should do:
     ---Accept one vital record
     ---Accept a callback function
     ---Call the callback and return the result -->

<?php

  function validateVital($vitalData, $ruleFunction)
  {
        return  $ruleFunction($vitalData);
  }

?>