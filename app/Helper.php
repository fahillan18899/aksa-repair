<?php

namespace App\Helper;

class Helper
{
    public static function instance()
    {
        return new Helper;
    }

    public function send_notification_FCM($notification_id, $title, $message, $id, $type)
    {

        $accesstoken = env('SIMRS_FCM_KEY');

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

        $crl = curl_init();

        $headr = [];
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
            $result_noti = 0;
        } else {

            $result_noti = 1;
        }

        return $result_noti;
    }

    public function sendPushNotification($title, $message, $topic, $clickActionUrl)
    {
        $header = [
            'Authorization: Key=' . env('SIMRS_FCM_KEY'),
            'Content-Type: Application/json',
        ];

        $msg = [
            'title' => $title,
            'body' => $message,
            'sound' => 'default',
            'icon' => '/999.png',
            'click_action' => $clickActionUrl,
        ];

        $payload = [
            'condition' => "'{$topic}' in topics",
            'data' => $msg,
        ];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://fcm.googleapis.com/fcm/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_HTTPHEADER => $header,
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            'cURL Error #:' . $err;
        } else {

        }
    }

    public function formatKodeAset(string $kodeAset, string $kodeRs_): string
    {
        $urutan = (int) substr($kodeAset, 15, 16);
        $urutan++;

        $huruf3 = 'U';
        $date3 = date('ymd');
        $kode_aset = $kodeRs_ . $huruf3 . $date3 . sprintf('%04s', $urutan);

        return $kode_aset;
    }

    function hitungPenyusutan($tahunPenyusutan, $harga_perolehan)
    {
        $b = 100 / $tahunPenyusutan;
        $c = $b / 12;
        $nilai = $c / 100 * $harga_perolehan;

        return $nilai;
    }

    public function hitung($tahunPenyusutan, $harga_perolehan)
    {
        $b = 100 / $tahunPenyusutan;
        $c = $b / 12;
        $nilai = $c / 100 * $harga_perolehan;

        return $nilai;
    }

    public function formatKodeKelengkapan($kodeKelengkapan, $kodeRs_)
    {
        $urutanAlat = (int) substr($kodeKelengkapan, 6, 7);
        $urutanAlat++;

        $kode = $kodeRs_ . sprintf('%03s', $urutanAlat);

        return $kode;
    }
}
