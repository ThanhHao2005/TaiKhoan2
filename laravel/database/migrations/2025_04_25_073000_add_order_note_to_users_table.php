<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('order_notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade'); // Liên kết với đơn hàng
            $table->text('note'); // Cột để lưu ghi chú
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_notes');
    }


};
