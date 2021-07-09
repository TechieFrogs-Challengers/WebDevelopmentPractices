<!DOCTYPE html>
<html>
<body>

    <?php
    function divide($a, $b) {
    if($b == 0) {
        throw new Exception("Division by zero", 1);
    }
    return $a / $b;
    }

    try {
    echo divide(5, 0);
    } catch(Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
    $message";
    }
    ?>

</body>
</html>
