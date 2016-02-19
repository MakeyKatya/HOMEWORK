<?php
class Countries extends Explode{

    public function __construct($array){
        parent::arrExplode($array);
    }
    public function set_table($array){
        for ($i=0;$i<count($array);$i++) {
            echo "<tr>";
            echo "<td><a href='http://homework.local/Firm/Fill_request.php?id=$i'>".$array[$i][0]."</a></td>";
            echo "<td>".$array[$i][1]."</td></tr>";
        }
    }
}
