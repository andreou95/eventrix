<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ExecuteSeederMigration extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $exitCode = Artisan::call('db:seed');
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('event_statuses')->truncate();
        DB::table('roles')->truncate();
        DB::table('event_types')->truncate();
        DB::table('sic_divisions')->truncate();
        DB::table('sic_sections')->truncate();
    }
}