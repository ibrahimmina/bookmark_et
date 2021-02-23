<?php

namespace App\Notifications;

use App\Product;
use App\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Log;
use File;

class ProductCreateNotification extends Notification
{
    use Queueable;
    protected $product;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        //
        $this->product = $product;
        Log::debug($this->product);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $address = Address::find($this->product->seller_address_id);
        $images = File::allFiles("/bitnami/bookmarket/public/productimages/" . $this->product->id); 

        return (new MailMessage)
            ->from('info@bookmarket.com', 'Admin')
            ->greeting('New Product Added to Bookmark_et')
            ->subject('New Product - Here is the Details')
            ->action('View Product Details', url('/') . '/products/' . $this->product->id)
            ->markdown('mail.productcreate', ['Product' => $this->product, 'Address' => $address, 'Images' => $images]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
