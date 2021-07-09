<!DOCTYPE html>
<html>
<body>

    <?php
    function divide($a, $b) {
    if($b == 0) {
        throw new Exception("Division by zero");
    }
    return $a / $b;
    }

    try {
    echo divide(5, 0);
    } catch(Exception $e) {
    echo "Unable to divide.";
    }
    ?>

</body>
</html>
