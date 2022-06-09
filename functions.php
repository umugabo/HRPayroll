<?php



function generetor($param){
	
    $code=$param;
    $stage1=str_ireplace("EMP/","", $code);
    $stage2=str_ireplace("/2020","", $stage1);
    $solution=$stage2+1;
    if(strlen($solution)==1){
        return "EMP/".'000'.$solution."/".Date('Y');
    }elseif(strlen($solution)==2){
        return "EMP/".'00'.$solution."/".Date('Y');
    }elseif(strlen($solution)==3){
        return "EMP/".'0'.$solution."/".Date('Y');
    }elseif(strlen($solution)==4){
        return "EMP/".$solution."/".Date('Y');
    }
}

// this function is having a problems of years
//echo generetor("EMP/0000/2020");

?>