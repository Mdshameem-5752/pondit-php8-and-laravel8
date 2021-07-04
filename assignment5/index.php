<?php 


// question 1
function shortFromOfMonth($month){
$full_month = ['january','february','march','april','may','june','july','august','september','october','november','december'];
$short_month = ['jan','feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dec'];
return str_replace($full_month,$short_month,$month); 

}

echo shortFromOfMonth('january');
 
 
 // question 2
 
 function reverseStr($str){
     return strrev($str);
 }
 echo reverseStr('shameem');
 
 // question 3
  function strLength($str){
     return strlen($str);
 }
 echo strLength('shameem');
 
 
 // question 4
 function middleLetter($str){
     $strLen = strlen($str);
     $middle = $strLen/2;
     if(is_float($middle)){
         $middle = floor($middle);
        return substr($str,$middle,1);
     }else{
         $middle = $middle-1;
        return substr($str,$middle,2);
     }
     
 }
 
 echo middleLetter('shameem');

 
 // quetion 5
 function revArray($data){
     return array_reverse($data);
 }
 
 var_dump(revArray(['1','2','3']));
 
 // quetion 6
 function firstChar($str){
     return $str[0];
 }
 
 echo firstChar('shameem');
 
 
 // question 7
 function accessBuilding($varify){
     $checkingDetails = ['wear a mask','covid negative'];
     $checkingDeg = $varify;
     if(is_numeric($varify)  && $varify < 98){
         return 'You will access';
     }elseif(in_array($varify,$checkingDetails)){
          return 'You will access';
     }else{
         return 'you are forbidden';
     }
 }
 
 echo accessBuilding('99');
 
 
 