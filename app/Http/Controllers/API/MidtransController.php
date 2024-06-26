<?php

namespace App\Http\Controllers;

use Midtrans\Config;
use Midtrans\Notification;
use App\Models\Transaction;
use Illuminate\Http\Request;

class MidtransController extends Controller
{
    public function callback(){
        // Set Konfigurasi Midtrans
        Config::$serverKey=config("services.midtrans.serverKey");
        Config::$isProduction=config("services.midtrans.isProduction");
        Config::$isSanitized=config("services.midtrans.isSanitized");
        Config::$is3ds=config("services.midtrans.is3ds");

        // Buat Instance Notification
        $notification=new Notification();

        // Assign ke variable untuk memudahkan kodingan
        $status=$notification->transaction_status;
        $type=$notification->payment_type;
        $fraud=$notification->fraud_status;
        $order_id=$notification->order_id;

        // Get Tranasaction id
        $order=explode('-',$order_id);

        // Cari transaksi berdasarkan id
        $transaction=Transaction::findOrFail($order[1]);

        // Handle notifications status midtrans
        if($status == "capture"){
            if($type == "credit_card"){
                if($fraud == "challenge"){
                    $transaction->status="PENDING";
                }else{
                    $transaction->status="SUCCESS";
                }
            }
        }else if($status == "settlement"){
            $transaction->status="SUCCESS";
        }else if($status == "pending"){
            $transaction->status="PENDING";
        }else if($status == "deny"){
            $transaction->status="PENDING";
        }else if($status == "expire"){
            $transaction->status="CANCELED";
        }else if($status == "cancel"){
            $transaction->status="CANCELED";
        }

        // Simpan transaksi
        $transaction->save();

        // Return response untuk midtrans
        return response()->json([
            "meta" => [
                "code" => 200,
                "message" => "Midtrans Notification Success!"
            ]
        ]);
        // 
    }
}
