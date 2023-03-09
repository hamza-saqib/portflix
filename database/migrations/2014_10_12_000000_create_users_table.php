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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('username')->unique()->nullable();
            $table->string('recovery_email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('tagline')->nullable();
            $table->string('company_name')->default('Your Company');

            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('selected_theme_path')->nullable()->default('ratsaan');

            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->longText('bio')->nullable();
            $table->string('web_url')->nullable();
            $table->string('experiences_summary')->nullable();
            $table->string('educations_summary')->nullable();
            $table->string('skills_summary')->nullable();
            $table->string('blogs_summary')->nullable();

            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();

            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twiter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('fiverr')->nullable();
            $table->string('upwork')->nullable();
            $table->string('pinterest')->nullable();

            $table->foreignId('theme_id')->default(1);

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
