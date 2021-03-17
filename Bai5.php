function shapeArea($n) {
    $Area = 1;
    for($i = 2; $i <=$n; $i++)
    {
        $Area = ($i-1)*4 + $Area;
    }
    return $Area;
}