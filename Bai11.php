function isLucky($n) {
    $str = strval($n); 
    $arr = str_split($str);
    $s1 = 0; $s2 = 0;
    for($i = 0; $i <= count($arr)/2-1; $i++)
    {
        $s1 = $s1+$arr[$i];
    }
    
    for($i = count($arr)/2; $i <= count($arr)-1; $i++)
    {
        $s2 = $s2+$arr[$i];
    }
    if($s1==$s2) return true;
    else return false;
}