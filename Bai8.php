function matrixElementsSum($matrix) {
    $nx = count($matrix);
    $ny = count($matrix[0]);
    $S = 0;
    for($i = 0; $i <= $nx-1; $i++)
    {
        for($j = 0; $j <= $ny-1; $j++)
        {
            if($matrix[$i][$j]==0) $matrix[$i+1][$j] = 0;
        }
    }
    
    for($i = 0; $i <= $nx-1; $i++)
    {
        for($j = 0; $j <= $ny-1; $j++)
        {
            $S = $S + $matrix[$i][$j];
        }
    }
    return $S;
}