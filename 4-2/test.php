<?php
    $date = "2022-06-24";
check_param($date);
function check_param($date) {
  $pattern="#^\d{4}([/-]?)\d{2}\\1\d{2}$#";
    if(preg_match($pattern,$date,$match)){
      print date("Y-m-d",strtotime($date));
      print 'は正しい日付である';
    }else{
      print "は日付ではありません";
    }
}

// function checking_date($date) {
//   $pattern="#^\d{4}([/-]?)\d{2}\\1\d{2}$#";
//     print $date.'は';
//     if(preg_match($pattern,$date,$match)){
//       date("Y-m-d",strtotime($date));
//       print '正しい日付である';
//     }else{
//       print "日付ではありません<br>";
//     }
// }

$date_array=["2020-02-14","2019/01/15","1990516",//問題なくマッチ
    "2010/8/17","2022020180","2005/09-32","xxxx-yy-zz",//エラー
    "0000-00-00","9999-99-99" //極端な数字でもマッチ
    ];
    check_array($date_array);
/* おかしなパターンを拾うのでいかに修正 */
function check_array($date_array) {
  $pattern="#^\d{4}([/-]?)\d{2}\\1\d{2}$#";
  foreach ($date_array as $judged_date){
    if(preg_match($pattern,$judged_date,$match)){
      print date("Y-m-d",strtotime($judged_date));
      print 'は正しい日付である<br>';
    }else{
      print $judged_date."は日付ではありません<br>";
    }
  }
}
  