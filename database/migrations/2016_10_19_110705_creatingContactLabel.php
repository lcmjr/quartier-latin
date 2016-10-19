<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatingContactLabel extends Migration {
    public function up() {
        Schema::table('contato', function ($table) {
            $table->string('label_facebook', 100);
            $table->string('label_instagram', 100);
            $table->string('label_youtube', 100);
        });
    }
    public function down() {
        if (Schema::hasColumn('contato', 'label_facebook')) {
            Schema::table('contato', function ($table) {
                $table->dropColumn('label_facebook');
                $table->dropColumn('label_instagram');
                $table->dropColumn('label_youtube');
            });
        }
    }
}
