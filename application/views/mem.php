<?php
foreach ($res as $res){
    echo $res['USERID'];
    echo $res['username'];
    echo $res['email'];
    if($res['verified']==1){
        echo "verified";
    }else{
        echo "Not Verified";
    }
    
   // $d=strtotime($res['addtime']);
   // echo date("Y/m/d",$d); 
    echo $res['addtime'];

     if($res['status']==1){
        echo "Active";
    }else{
        echo "Not Active";
    }
   
    echo "<br/>";
}


?>

