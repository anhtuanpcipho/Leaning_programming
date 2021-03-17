function reverseInParentheses($inputString) {
    do {
        $k = 0; $pair = 0; $k1 = 0; $k2 =0;
        $N = strlen($inputString);
        $chk = str_split($inputString);
        for($i=0; $i <$N-1; $i++) if($chk[$i]=="(") for($j=$i+1; $j <= $N-1; $j++) {
                if($chk[$j]=="(") break;
                if($chk[$j]==")") {
                    $op[$k] = $i; $cl[$k] = $j;
                    $k++; break;
                }
            }    
        if($k>0) for($i=0; $i <= $k-1; $i++) {
                    $str1 = substr($inputString,$op[$i]-$i*2,$cl[$i]-$op[$i]+1);
                    $str2 = substr($inputString,$op[$i]+1-$i*2,$cl[$i]-$op[$i]-1);
                    $str2 = strrev($str2);
                    $inputString = str_replace($str1,$str2,$inputString);
        }
        $pair = $k;
    } while($pair!=0);
    $inputString = str_replace("(","",$inputString);
    $inputString = str_replace(")","",$inputString);
    return $inputString;
}
