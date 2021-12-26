<?php 

    $filePath = "chatlog.txt";

    $content = file_get_contents($filePath);

    if(filesize($filePath) != 0){
        $lines = explode("\n",$content);

        for($i=0; $i <count($lines)-1 ; $i++){
            $text = explode("#",$lines[$i]);

            echo "<p>
                    <span style='color:#750000'>". $text[0] .':'."<span>
                    <span style='color:#000075'>".$text[1]."<span>
                    <span style='float:right'>".$text[2]."<span>
                </p>";
        }
    }


?>
