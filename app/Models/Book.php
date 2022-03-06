<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'id', 'title', 'author', 'pagesNumber', 'year'
    ];
    use HasFactory;

    public function up() {
        Schema::create('book', function(Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->int('pagesNumber');
            $table->int('year');
        });
    }
}
