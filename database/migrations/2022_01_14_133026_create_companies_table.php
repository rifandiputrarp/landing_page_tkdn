<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name')->nullable();
            $table->string('business_capital')->nullable();
            $table->string('email');
            $table->string('npwp');
            $table->string('person_in_charge')->nullable();
            $table->string('phone_in_charge')->nullable();
            $table->string('npwp_file_path')->nullable();
            $table->string('iui_file_path')->nullable();
            $table->string('note')->nullable();
            $table->longText('others_file_path')->nullable();
            $table->enum('status', ['new', 'review', 'complete'])->default('new');
            $table->string('approved_by')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
