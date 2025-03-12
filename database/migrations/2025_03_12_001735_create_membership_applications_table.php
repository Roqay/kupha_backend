<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->string('address');
            $table->enum('gender', ['male', 'female']);
            $table->string('phone');
            $table->string('email');
            $table->string('work_address');
            $table->string('work_type');
            $table->string('work_phone');
            $table->string('education');
            $table->string('degree_file')->nullable();
            $table->string('certificate_file')->nullable();
            $table->text('previous_work');
            $table->text('references')->nullable();
            $table->text('professional_behavior_notes')->nullable();
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
        Schema::dropIfExists('membership_applications');
    }
}
