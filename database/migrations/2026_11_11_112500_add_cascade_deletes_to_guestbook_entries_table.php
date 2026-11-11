<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('guestbook_entries', function (Blueprint $table) {
            $table->dropForeign(['profile_id']);
            $table->dropForeign(['author_id']);

            $table->foreign('profile_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();
            $table->foreign('author_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('guestbook_entries', function (Blueprint $table) {
            $table->dropForeign(['profile_id']);
            $table->dropForeign(['author_id']);

            $table->foreign('profile_id')
                ->references('id')
                ->on('users');
            $table->foreign('author_id')
                ->references('id')
                ->on('users');
        });
    }
};
