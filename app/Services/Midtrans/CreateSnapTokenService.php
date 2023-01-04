<?php
 
namespace App\Services\Midtrans;
 
use Midtrans\Snap;
 
class CreateSnapTokenService extends Midtrans
{
    protected $order;
 
    public function __construct($order)
    {
        parent::__construct();
 
        $this->order = $order;
    }
 
    public function getSnapToken()
    {
        $params = [
            'order_details' => [
                'order_id' => $this->order->number,
                'product_id' => $this->product->product_id->number,
                'product_color_id' => $this->product->product_color_id->number,
                'quantity' => $this->product->number,
                'price'  => $this->order->total_price,
            ],
            'item_details' => [
                [
                    'id' => 1,
                    'price' => '150000',
                    'quantity' => 1,
                    'name' => 'Gamis Dewasa',
                ],
                [
                    'id' => 2,
                    'price' => '60000',
                    'quantity' => 2,
                    'name' => 'Dress Anak',
                ],
            ],
            'customer_details' => [
                'first_name' => 'Nolaa',
                'email' => 'reziyananola@gmail.com',
                'phone' => '083181411325',
            ]
        ];
 
        $snapToken = Snap::getSnapToken($params);
 
        return $snapToken;
    }
}