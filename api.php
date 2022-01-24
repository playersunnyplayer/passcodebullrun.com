<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$curl = curl_init();
$name=$_POST['fname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$source=$_POST['source'];
/*$project=$_POST['project'];
$projectname=$_POST['projectname'];
$form_message = $_POST['message'];
$sqlQueryAdd = "INSERT INTO `msp_enquiry_sidebar` (`projectname`,`name`,`mobile`,`email`,`message`)VALUES ('$project','$name','$mobile','$email','$form_message')";
$sqlRes = $CMS->dbquery($sqlQueryAdd) or die("Err : ");*/
$exid=date('Ymdhms');
$ldate=date('Y-m-d h:m:s');
$data=array(
  "customerName"=>$name,
  "customerEmail"=> $email,
  "customerMobile"=> $mobile,
  "interestedIn"=> '',
  "customerBudget"=> '',
  "customerSource"=>$source,
  "campaignName"=> "",
  "registrationDate"=> $ldate,
  "website"=> "https://theguardians.net/",
  "creative"=> '',
  "property"=> 'Veena Bhoomi',
  "utm_content"=> '',
  "utm_medium"=> 'BrandRSA',
  "utm_source"=> 'GoogleSearch'
);
//$new[]=$data;
$data2=json_encode($data);
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://theguardians.sotsuite.com/wp-admin/admin-ajax.php?action=external_contact",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data2,
  CURLOPT_HTTPHEADER => array(
     "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: 82072165-0f3f-4456-a2f5-1a59eb52402f",
    "x-api-key: C59C3C275563C9FFE7AD2007FD48C"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

}
?>