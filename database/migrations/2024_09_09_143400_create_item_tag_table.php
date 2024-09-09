<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemTagTable extends Migration
{
    public function up()
    {
        Schema::create('item_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained('store', 'id')->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('tags','id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('item_tag');
    }
}