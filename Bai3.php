function checkPalindrome($inputString) {
    if($inputString==strrev($inputString)) return true;
    else return false;
}