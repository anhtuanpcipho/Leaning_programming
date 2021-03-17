function makeArrayConsecutive2($statues) {
    sort($statues);
    $n = count($statues);
    return $statues[$n-1]-$statues[0]+1-$n;
}