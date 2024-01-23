<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;

class CreateSnapTokenService extends Midtrans
{
	protected $peopels;
	public function __construct($peopels)
	{
		parent::__construct();

		$this->peopels = $peopels;
	}
    
	public function getSnapToken()
	{
		 $params = [
                'transaction_details' => [
                    'order_id'      => $this->peopels->order_id,
                    'gross_amount'  => $this->peopels->amount,
                ],
                'customer_details' => [
                    'first_name'    => $this->peopels->nama_pemohon,
                    'email'         => $this->peopels->email,
                    'phone'         => $this->peopels->no_hp,
                    'address'       => $this->peopels->alamat,
                ],
                'item_details' => [
                    [
                        'id'       => $this->peopels->order_id,
                        'price'    => $this->peopels->amount,
                        'phone'         => $this->peopels->no_hp,
                        'address'       => $this->peopels->alamat,
                        'quantity' => 1,
                        'name'     => $this->peopels->tujuan
                    ]
                ]
            ];


		$snapToken = Snap::getSnapToken($params);

		return $snapToken;
	}
}
