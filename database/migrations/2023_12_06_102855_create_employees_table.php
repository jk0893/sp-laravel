<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->date('birth_date');
            $table->string('passport');
            $table->string('phone');
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('bus_id')->nullable()->constrained();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('employees')->insert([
            ['first_name' => 'testadmin', 'last_name' => 'testadmin', 'father_name' => 'testadmin', 'birth_date' => '1997-08-28', 'passport' => '1234567890', 'phone' => '88005553535', 'user_id' => 1],
            ['last_name' => 'testnich', 'first_name' => 'testnich', 'father_name' => 'testnich', 'birth_date' => '1997-08-29', 'passport' => '1234567891', 'phone' => '88006663636', 'user_id' => 2],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
