function allLongestStrings($inputArray) {
    $max = 0; $k=0; $outputArray = array();
    for($i = 0; $i <= count($inputArray)-1; $i++)
    {
        if($max < strlen($inputArray[$i])) $max=strlen($inputArray[$i]);
    }
    
    for($j = 0; $j <= count($inputArray)-1; $j++)
    {
        if(strlen($inputArray[$j]) == $max)
        {
            $outputArray[$k]=$inputArray[$j];
            $k++;
        }
    }
    return $outputArray;
}