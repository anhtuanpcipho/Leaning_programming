function adjacentElementsProduct($inputArray) {
    $max = $inputArray[0]*$inputArray[1];
    for($i = 1; $i <= count($inputArray)-1; $i++)
    {
        $max1 = $inputArray[$i-1]*$inputArray[$i];
        if($max1>$max) $max = $max1;
    }
    return $max;
}