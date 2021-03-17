function sortByHeight($a) {
    $people = array(); $k = 0;
    for($i=0; $i <= count($a)-1; $i++) if($a[$i]!=-1) {
            $people[$k] = $a[$i];
            $k++;
        }
    sort($people); $k = 0;
    for($i=0; $i <= count($a)-1; $i++) if($a[$i]!=-1) {
            $a[$i] = $people[$k];
            $k++;
        }
    return $a;
}