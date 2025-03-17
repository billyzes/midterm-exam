<?php

use Carbon\Traits\Timestamp;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create( "feature", function (Blueprint $table) {
                $table->id();
                $table->string("name");
                $table->text("description");
                $table->Timestamps();
            }
        );
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
