<?php
    function pierw($a)
    {
        if($a < 2)
            {
                return false;
            };
        for($i = 2; $i < $a; $i++)
            {
                if($a % $i == 0)
                    {
                        return false;
                    }
            };
        return true;
    };

    function NWD($a, $b)
    {
        while($a != $b)
            {
                if($a < $b)
                    $b = $b - $a;
                else
                    $a = $a - $b;
            };
        return $a;
    }

    function Delta($a, $b, $c)
    {
        return ($b*$b) - (4 * $a * $c);

    }

    
?>