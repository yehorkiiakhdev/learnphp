<?php
    function hello() {
        var_dump("Hello!");
    }

    hello();
    hello();

    function square($a) {
        if ($a < 0) {
            return 0;
        }
        return $a * $a;
    }

    $answer = square(4);
    var_dump($answer);
    var_dump(square(5));

?>
