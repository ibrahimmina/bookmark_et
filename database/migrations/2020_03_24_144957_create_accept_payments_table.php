<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcceptPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accept_payments', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('accept_payment_order_id')->nullable();
            $table->dateTime('accept_payment_created_at')->nullable();
            $table->boolean('delivery_needed')->nullable();
            $table->Integer('amount_cents')->nullable();
            $table->string('currency')->nullable();
            $table->boolean('is_payment_locked')->nullable();
            $table->boolean('is_return')->nullable();
            $table->boolean('is_cancel')->nullable();
            $table->boolean('is_returned')->nullable();
            $table->boolean('is_canceled')->nullable();
            $table->string('merchant_order_id')->nullable();
            $table->string('wallet_notification')->nullable();
            $table->Integer('paid_amount_cents')->nullable();
            $table->boolean('notify_user_with_email')->nullable();
            $table->string('items_name')->nullable();
            $table->string('items_description')->nullable();
            $table->Integer('items_amount_cents')->nullable();
            $table->Integer('items_quantity')->nullable();
            $table->string('order_url')->nullable();
            $table->Integer('commission_fees')->nullable();
            $table->Integer('delivery_fees_cents')->nullable();
            $table->Integer('delivery_vat_cents')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('merchant_staff_tag')->nullable();
            $table->string('api_source')->nullable();
            $table->string('pickup_data')->nullable();
            $table->string('delivery_status')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accept_payments');
    }
}
