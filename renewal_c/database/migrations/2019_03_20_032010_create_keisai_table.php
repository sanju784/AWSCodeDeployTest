<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeisaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keisais', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->string('company_name')->comment('施設名・代理店名');
            $table->string('position')->comment('所属部署・役職');
            $table->string('name')->comment('ご担当者様名');
            $table->string('tel')->comment('連絡先電話番号');
            $table->string('fax')->nullable()->comment('FAX番号');
            $table->string('email')->comment('メールアドレス');
            $table->string('zip1')->comment('郵便番号1');
            $table->string('zip2')->comment('郵便番号2');
            $table->string('prefacture')->comment('都道府県');
            $table->string('district')->comment('市区郡');
            $table->string('street_address')->comment('町村番地');
            $table->string('building')->comment('建物名');
            $table->string('contact_reason_opt')->comment('お問い合わせ内容');
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
        Schema::dropIfExists('keisai');
    }
}
