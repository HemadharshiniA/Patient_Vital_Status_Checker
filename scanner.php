<!-- step-5: creating recursive file scanner -->

<?php

     function scanFolder($path)  //$path --> current folder loc
     {
        $lists = scandir($path);

        foreach($lists as $list)
            {
                if($list == "." || $list == "..")  // SKIP : "." --> Current Folder    ".." --> Parent Folder
                 {
                    continue;   //skips it
                 }

                 $completePath = $path. "/" . $list;

                 if(is_dir($completePath))
                    {
                        echo "Folder: ".$list."<br>";
                        scanFolder($completePath);   //recursion
                    }
                 else
                    {
                        echo "File:  ".$list."<br>";
                    }
            }
     }
?>