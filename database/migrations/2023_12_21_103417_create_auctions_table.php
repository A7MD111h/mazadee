<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('sub_category_id')->nullable()->constrained('sub__categories')->cascadeOnDelete();
            $table->string('quality');
            $table->double('budjet');
            $table->string('city');
            $table->integer('quantity');
            $table->text('description');
            $table->enum('status',['active','pending','finished','canceled'])->default('active');
            $table->double('company_price')->nullable();
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
        Schema::dropIfExists('auctions');
    }
};
