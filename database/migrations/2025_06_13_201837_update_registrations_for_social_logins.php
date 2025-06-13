<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('registrations', function (Blueprint $table) {
        $table->renameColumn('google_id', 'provider_id');
        $table->string('provider')->nullable();
    });
}

public function down()
{
    Schema::table('registrations', function (Blueprint $table) {
        $table->renameColumn('provider_id', 'google_id');
        $table->dropColumn('provider');
    });
}
};
