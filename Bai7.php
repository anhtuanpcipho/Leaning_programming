function almostIncreasingSequence($sequence) {
    $s1 = $sequence; $s2 = $s1; $lg1 = 1; $lg2 = 1;
    for ($i = 0; $i <= count($sequence)-2; $i++)
    {
        if($sequence[$i] >= $sequence[$i+1])
        {

            unset($s1[$i]);
            unset($s2[$i+1]);
            break;
        }
    }
    
    $s1 = array_values($s1);
    $s2 = array_values($s2);
    for ($i = 0; $i <= count($s1)-2; $i++)
    {
        if($s1[$i] >= $s1[$i+1]) 
        {
            $lg1 = 0;
            break;
        }
       
    }
    for ($i = 0; $i <= count($s2)-2; $i++)
    {
        if($s2[$i] >= $s2[$i+1])
        {
            $lg2 = 0;
            break;
        }
    }
    
    if($lg1 || $lg2) return true;
    else return false;
}