<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InterwitchPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interswitch_payments', function(Blueprint $table){
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('transaction_reference');//This reference is generated by this package
            $table->string('payment_reference')->nullable();//This reference is generated by interswitch after successful payment
            $table->string('retrieval_reference_number')->nullable();
            $table->string('environment');
            $table->bigInteger('amount_in_kobo');
            $table->string('confirmed')->default('N');//This column is actually useless
            $table->string('response_code')->nullable();
            $table->string('response_text')->nullable();
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
        //
    }
}
