<?php

use App\GeneralSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('site_title');
            $table->string('location');
            $table->string('email');
            $table->string('phone');
            $table->string('copyright_text');
            $table->string('logo');
            $table->string('fav');
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();
            $table->integer('updated_by')->nullable()->default(1)->unsigned();
            $table->timestamps();
        });

        $general_setting = new GeneralSetting();
        $general_setting->site_name = 'Blood Donation';
        $general_setting->site_title = "Blood Donation";
        $general_setting->location = '1234 Hamill Avenue California, CA 02110';
        $general_setting->email = 'admin@gmail.com';
        $general_setting->phone = '858-384-7554';
        $general_setting->copyright_text = 'Copyright © 2020. All rights reserved to Blood Donation';
        $general_setting->logo = 'backend/uploads/logo/logo.jpg';
        $general_setting->fav = 'backend/uploads/logo/fav.png';
        $general_setting->save(); 
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_settings');
    }
}