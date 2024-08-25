<?php
session_start();
require_once '../Config/Config.php';
require_once '../Config/mailHtml.php';
sleep(2);
// $num = (int)$_REQUEST['numpass'] ? (int)$_REQUEST['numpass'] : 1;

$haspay = null; //$_REQUEST['HasonApprove'];
// $travelers = $_REQUEST['travelers'];
// $travelers = json_decode($travelers, true);

header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);
$response = [
  'message' => "something went wrong"
];


// $response = $data;
// echo json_encode($response);


// if (
//   isset($data['key']) &&
//   isset($data['tour']) &&
//   isset($data['terms']) &&
//   isset($data['extra']) &&
//   isset($data['phone']) &&
//   isset($data['startDate']) &&
//   isset($data['alteredDate']) &&
//   isset($data['country']) &&
//   isset($data['type']) &&
//   isset($data['name']) &&
//   isset($data['email']) &&
//   isset($data['paymet']) &&
//   isset($data['extratrain']) &&
//   isset($data['extraroute']) &&
//   isset($data['rental'])
// ) {
//   http_response_code(200);
//   $response = $data;
// } else {
//   http_response_code(400);

//   $response = [
//     'status' => 'error',
//     'message' => 'Datos incompletos'
//   ];
// }



// $data = [
// 'key' => $_REQUEST['key'],
// 'tour' => $_REQUEST['tour'],
// 'terms' => $_REQUEST['terms'],
// 'extra' => $_REQUEST['extra'],
// 'phone' => $_REQUEST['phone'],
// 'startDate' => $_REQUEST['startDate'],
// 'alteredDate' => $_REQUEST['alteredDate'],
// 'country' => $_REQUEST['country'],
// 'type' => $_REQUEST['type'],
// 'name' => $_REQUEST['name'],
// 'email' => $_REQUEST['email'],
// 'paymet' => $_REQUEST['paymet'],
// 'extratrain' => $_REQUEST['extratrain'],
// 'extraroute' => $_REQUEST['extraroute'],
// 'rental' => $_REQUEST['rental'],
// ];


//////////////////////////////////////////////////////////////// cal pricess
// $payme=null;

// $payme= [ 'price'=>$price,
// 'total'=>$price*$num,
// 'deposit'=>$haspay?(($num*$price)/100)*30:'No deposit',
// 'pendiente'=> ($price*$num)-((($num*$price)/100)*30)
// ];

// $_SESSION['payme'];
// array_push($pasajeros,$person);

// print_r(json_encode(['error'=>$details]));
//////////// has validate custom



// if (
//   empty($data['tour']) || empty($data['startDate']) || empty($data['email']) || empty($data['key']) ||
//   empty($data['name']) || empty($data['country'])
// ) {
//   $response = [
//     'status' => 400,
//     'message' => "Datos incompletos"
//   ];

//   http_response_code(400);
//   echo json_encode($response);
//   return false;
//   exit();
// } else {

// Save in database

$template = new HtmlMail();
$mensaje = $template->booking($data, [], null/* payme = null */);

sleep(2);
$SendMail = new Config();
// if($haspay){
// // $passMensaje=$template->templatepass(['tour'=>$data['tour'],'date'=>$data['date']]);
// $SendMail->MailContact($mensaje,$data['tour'],$data['email']);
// }
// sendpass
// $confirmations = $SendMail->MailContact($mensaje, $data['tour'], $data['email']);
$confirmations = $SendMail->MailContact($mensaje, "", "", $data['email']);
if ($confirmations) {
  $response = ['message' => 'successfully', 'status' => 200];
  http_response_code(200);
}
if (!$confirmations) {
  $response = ['message' => 'error', 'status' => 500];
  http_response_code(500);
}
echo json_encode($response);
// }
