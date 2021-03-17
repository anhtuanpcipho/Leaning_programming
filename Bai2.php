function centuryFromYear($year) {
    if(!($year % 100)) return $year/100;
    else return ($year-($year % 100))/100+1;
}
