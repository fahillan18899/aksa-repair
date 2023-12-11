<?php

namespace App\Helper;

class Helper
{
  public function send_notification_FCM($notification_id, $title, $message, $id, $type)
  {

    $accesstoken = env('FCM_KEY');

    $URL = 'https://fcm.googleapis.com/fcm/send';


    $post_data = '{
            "registration_ids" : ["d_wrPayK7qI:APA91bH3rtzqDf_vJ6GvpmwVZgRT6PTi9AFqd91v0Nm64bRXV_eoJge0_luBqAHjUJCj3GDkyIZerKgk53ppkS033b7j0eyXzY9fa27cTZK1zJ6iMvnqE4i4XUGhQY-6oolXcbCTkWn0"],
            "data" : {
              "body" : "",
              "title" : "' . $title . '",
              "type" : "' . $type . '",
              "id" : "' . $id . '",
              "message" : "' . $message . '",
            },
            "notification" : {
                 "body" : "' . $message . '",
                 "title" : "' . $title . '",
                  "type" : "' . $type . '",
                 "id" : "' . $id . '",
                 "message" : "' . $message . '",
                "icon" : "new",
                "sound" : "default"
                },
 
          }';
    // print_r($post_data);die;

    $crl = curl_init();

    $headr = array();
    $headr[] = 'Content-type: application/json';
    $headr[] = 'Authorization: ' . $accesstoken;
    curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($crl, CURLOPT_URL, $URL);
    curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);

    curl_setopt($crl, CURLOPT_POST, true);
    curl_setopt($crl, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);

    $rest = curl_exec($crl);

    if ($rest === false) {
      // throw new Exception('Curl error: ' . curl_error($crl));
      //print_r('Curl error: ' . curl_error($crl));
      $result_noti = 0;
    } else {

      $result_noti = 1;
    }

    //curl_close($crl);
    //print_r($result_noti);die;
    return $result_noti;
  }

  public function sendPushNotification($title, $message, $topic, $clickActionUrl)
  {
    define('SERVER_API_KEY', 'AAAA655-gzI:APA91bGRVjsxkopYiQp_v1nQjASeYsyjBEhXKRkRC766APSytX9Evc6d5Noz1seTF3irwqi5rzbIDE2utWgld_Yr3Or1IZI67WPurKfvU9epaoaZg8v0fDspsXu5HicWWdJjVvf-YPAl');

    $header = [
      'Authorization: Key=' . SERVER_API_KEY,
      'Content-Type: Application/json'
    ];


    $msg = [
      'title' => $title,
      'body' => $message,
      'sound' => 'default',
      'icon' => '/999.png',
      'click_action' => $clickActionUrl
    ];

    $payload = [
      'condition' => "'$topic' in topics",
      'data' => $msg
    ];

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($payload),
      CURLOPT_HTTPHEADER => $header
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      "cURL Error #:" . $err;
    } else {
      $response;
    }
  }

  // public function notifyUser(Request $request)
  // {

  //     $user = User::where('user_id', '1')->first();

  //     $notification_id =
  //         'd_wrPayK7qI:APA91bH3rtzqDf_vJ6GvpmwVZgRT6PTi9AFqd91v0Nm64bRXV_eoJge0_luBqAHjUJCj3GDkyIZerKgk53ppkS033b7j0eyXzY9fa27cTZK1zJ6iMvnqE4i4XUGhQY-6oolXcbCTkWn0';
  //     $title = "Greeting Notification";
  //     $message = "Have good day!";
  //     $id = $user->user_id;
  //     $type = "basic";

  //     $res = $this->send_notification_FCM($notification_id, $title, $message, $id, $type);

  //     if ($res == 1) {
  //     } else {

  //         // fail code
  //     }
  // }

  public static function instance()
  {
    return new Helper();
  }
}
