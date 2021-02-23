<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use App\AcceptPayment;
use Log;

class GetAcceptPaymentOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:acceptpaymentorder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cron Command to get Accept Payment Orders & Fill in Table in the db';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //Step. 1: Authentication

        // Set the authentication URL

        $authentication_url = "https://accept.paymobsolutions.com/api/auth/tokens";

        // Fill in request Body

        $post_request_body_array = array("username" => "msibrahim", "password" => "Godbewithme1!");                                                                    
        $post_request_body_json = json_encode($post_request_body_array);

        // Fill in request Header
        $post_request_header_array = array('Content-Type: application/json', 'Content-Length: ' . strlen($post_request_body_json));

        // Create New Curl Post Request

        $authentication = curl_init();

        curl_setopt($authentication, CURLOPT_URL, $authentication_url);
        curl_setopt($authentication, CURLOPT_POST, 1);
        curl_setopt($authentication, CURLOPT_POSTFIELDS, $post_request_body_json);
        curl_setopt($authentication, CURLOPT_HTTPHEADER, $post_request_header_array);  
        curl_setopt($authentication, CURLOPT_RETURNTRANSFER, true);

        // Get Output

        $authentication_output_json = curl_exec($authentication);

        // Close Session
        curl_close ($authentication);

        //Decode Authentication Output JSON to array
        $authentication_output_array = json_decode($authentication_output_json);
        
        //var_dump($authentication_output_array);

        //Step. 3: Get the New Orders & Fill in Table

        // Create URL
        $get_order_url = "https://accept.paymobsolutions.com/api/ecommerce/orders?token=" . $authentication_output_array->token;

        // Create Header
        $get_request_header_array = array('Content-Type: application/json');

        // Create New Curl Get Request
        $get_orders = curl_init();

        curl_setopt($get_orders, CURLOPT_URL,$get_order_url);
        curl_setopt($get_orders, CURLOPT_HTTPHEADER, $get_request_header_array); 
        curl_setopt($get_orders, CURLOPT_RETURNTRANSFER, true);

        $get_orders_output = curl_exec($get_orders);

        curl_close ($get_orders);

        $get_orders_output_array = json_decode($get_orders_output);

        //var_dump($get_orders_output_array);
        
        //Get Last Order ID from Table

        if (AcceptPayment::orderBy('id', 'DESC')->first() != null){
            $last_order_id = AcceptPayment::orderBy('id', 'DESC')->first()->accept_payment_order_id;
        }else{
            $last_order_id = 0;
        }


        foreach ($get_orders_output_array->results as $order){
            $accept_shipping_data_email = $order->shipping_data->email;
            
            $User = User::where('email', $accept_shipping_data_email )->first();
            
            if ( $User != null){
                if ( AcceptPayment::where('accept_payment_order_id',$order->id)->get()->first() == null){
                    $AcceptPayment = new AcceptPayment;
                    $AcceptPayment->user_id = $User->id;
                    $AcceptPayment->accept_payment_order_id = $order->id;
                    $AcceptPayment->accept_payment_created_at = $order->created_at;
                    $AcceptPayment->delivery_needed = $order->delivery_needed;           
                    $AcceptPayment->amount_cents = $order->amount_cents;
                    $AcceptPayment->currency = $order->currency;
                    $AcceptPayment->is_payment_locked = $order->is_payment_locked;
                    $AcceptPayment->is_return = $order->is_return;
                    $AcceptPayment->is_cancel = $order->is_cancel;
                    $AcceptPayment->is_returned = $order->is_returned;
                    $AcceptPayment->is_canceled = $order->is_canceled;
                    $AcceptPayment->merchant_order_id = $order->merchant_order_id;
                    $AcceptPayment->wallet_notification = $order->wallet_notification;
                    $AcceptPayment->paid_amount_cents = $order->paid_amount_cents;
                    $AcceptPayment->notify_user_with_email = $order->notify_user_with_email;
                    $AcceptPayment->items_name = (string) $order->items[0]->name;
                    //$AcceptPayment->items_description = $order->items[0]->description;
                    $AcceptPayment->items_amount_cents = (int) $order->items[0]->amount_cents;
                    $AcceptPayment->items_quantity = (int) $order->items[0]->quantity;
                    $AcceptPayment->order_url = $order->order_url;
                    $AcceptPayment->commission_fees = $order->commission_fees;
                    $AcceptPayment->delivery_fees_cents = $order->delivery_fees_cents;
                    $AcceptPayment->delivery_vat_cents = $order->delivery_vat_cents;
                    $AcceptPayment->payment_method = $order->payment_method;
                    $AcceptPayment->merchant_staff_tag = $order->merchant_staff_tag;
                    $AcceptPayment->api_source = $order->api_source;
                    $AcceptPayment->pickup_data = $order->pickup_data;
                    //$AcceptPayment->delivery_status = $order->delivery_status;
                    
                    //var_dump($AcceptPayment);
                    $AcceptPayment->save();

                    $User->coin += $AcceptPayment->items_quantity;
                    $User->save();

                }
            }else{
                // log error
                Log::error('Couldnt Find User for Record, Order ID: ' . $order->id .'User Email: ' . $order->shipping_data[0]->email);
            }

        }

    }
}
