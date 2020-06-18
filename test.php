<?php
foreach ($invoices as $i_key => $i_value) { 

foreach ($award_numbers as $a_key => $a_value) { 
  $check_method = $awardType[$a_value['type']]['rule']; 

  $single_bonus = 0; //用來存放此筆發票的中獎金額

  //如檢查方法為check_all 則呼叫check_all()
  if($awardType[$a_value['type']]['rule'] == "check_all"){
    $single_bonus = check_all($a_value['number'], $i_value['number'], $a_value['type'], $awardRule);
  }
  //如檢查方法為check_part 則呼叫check_part()
  if($awardType[$a_value['type']]['rule'] == "check_all"){
    $single_bonus = check_part($a_value['number'], $i_value['number'], $a_value['type'], $awardRule);
  }

  
  //如果此筆發票的中獎金額大於0 
  if($single_bonus > 0){
    $totalBonus += $single_bonus;
    array_push($awardList, $i_value['number']);
  }
}
}


function plus_minus_conversion($number = 0){
    return ~$number + 1;
  }


  function check_all($award,$your_invoice_number, $type, $awardRule){

    $digit = mb_strlen($award); //取得開獎號碼的位數，3位數或8位數
  
    $bonus = 0; //用來計算檢查結果所得的獎金金額
  
    //如果 開獎號碼 和 你的發票末幾碼完全吻合的話
    if($award == substr($your_invoice_number, plus_minus_conversion($digit), $digit)){
      switch ($digit) {
        case 3:  //如果是3碼->增開六獎
          $bonus = $awardRule['check_all'][$digit]; //取得獎項規則check_all、3位數對應的獎金
          break;
        case 8:  //如果是8碼->特別獎、特獎
          $bonus = $awardRule['check_all'][$digit][$type];//取得獎項規則check_all、8位數、type對應的獎金
          break;
        default:
          
          break;
      }
    }
    return $bonus; //回傳檢查後的獎金金額
  }
?>