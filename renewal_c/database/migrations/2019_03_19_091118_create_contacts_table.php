<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->string('last_name')->comment(('姓'));
            $table->string('first_name')->comment('名');
            $table->string('email')->comment('メールアドレス');
            $table->integer('contact_reason_opt')->comment('お問い合わせ内容');
            $table->string('contact_reason_text')->comment('お問い合わせ内容');
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
        Schema::dropIfExists('contacts');
    }
}
