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
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
<<<<<<< HEAD
            $table->integer('expiration')->index();
=======
            $table->integer('expiration');
>>>>>>> mai/main
        });

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
<<<<<<< HEAD
            $table->integer('expiration')->index();
=======
            $table->integer('expiration');
>>>>>>> mai/main
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
=======
        Schema::dropIfExists('cache_locks');
        Schema::dropIfExists('cache');
    }
};
>>>>>>> mai/main
