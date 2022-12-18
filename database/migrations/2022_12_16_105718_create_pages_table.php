<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreatePagesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('pages', function (Blueprint $table) {
                $table->id();
                $table->foreignId('template_id');
                $table->string('slug')->unique('pageSlug');
                $table->string('name');
                $table->string('title');
                $table->string('description')->nullable();
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
            Schema::dropIfExists('pages');
        }
    }