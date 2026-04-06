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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //foreign key
            $table->unsignedBigInteger('category_id'); //foreign key
            $table->string('slug', 255); //meminimalisisr untuk menampilkan id dalam website,jadi yang sisimpan di 
            $table->string('title', 255);
            $table->text('description');
            $table->string('image_path', 255);
            $table->string('file_path', 255);

                //menambahkan kolom status untuk penambahan buku oleh user
            $table->enum('status', ['waiting approval', 'approved', 'rejected']);

            $table->timestamp('approved_at')->nullable();
            $table->unsignedBigInteger('total_views')->default(0);

            $table->timestamps();
            $table->softDeletes();


            //foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
