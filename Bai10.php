function commonCharacterCount($s1, $s2) {
    $cnt1 = array(); $cnt2 = array();
    $arr1 = str_split($s1); $arr2 = str_split($s2);
    sort($arr1); sort($arr2);
    $arr11 = array_unique($arr1); $arr11 = array_values($arr11);
    $arr22 = array_unique($arr2); $arr22 = array_values($arr22);
    
    for($i=0; $i <= count($arr11)-1; $i++)
    {
        $k = 0;
        for($j=0; $j <= count($arr1)-1; $j++)
        {
            if($arr11[$i]==$arr1[$j]) $k++;
        }
        $cnt1[$i] = $k;
    }
    
    for($i=0; $i <= count($arr22)-1; $i++)
    {
        $k = 0;
        for($j=0; $j <= count($arr2)-1; $j++)
        {
            if($arr22[$i]==$arr2[$j]) $k++;
        }
        $cnt2[$i] = $k;
    }
    $k = 0; 
    for($i=0; $i <= count($arr11)-1; $i++)
    {
        for($j=0; $j <= count($arr22)-1; $j++)
        {
            if($arr11[$i]==$arr22[$j])
            {
                $k = $k + min($cnt1[$i],$cnt2[$j]);
                print_r($arr11[$i]);
                print_r($arr22[$j]);
            } 
        }
    }
    return $k;
}