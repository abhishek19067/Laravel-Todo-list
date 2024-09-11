<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $table='item_tag';
    protected $primary_key="id";
    
    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'item_tag', 'item_id', 'tag_id');
    }
}
