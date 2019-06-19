<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRakurakusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rakurakus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->comment('お名前');
            $table->string('email', 100)->comment('メールアドレス');
            $table->string('phone', 50)->comment('お電話番号');
            $table->string('address', 200)->comment('人間ドック・検診をお受けになりたいエリアのご希望');
            $table->string('price', 20)->comment('金額のご希望');
            $table->date('visit_start_date')->comment('受診する期間のご希望');
            $table->date('visit_end_date')->comment('受診する期間のご希望');
            $table->string('course_type', 200)->comment('ご希望のコース種別');
            $table->mediumText('message')->comment('ご要望など');
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
        Schema::dropIfExists('rakurakus');
    }
}
