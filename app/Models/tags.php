<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $fillable = ['name']; 
    protected $table = "tags";
    protected $primaryKey = "id"; 
    
    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_tag', 'tag_id', 'item_id');
    }
    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }
}
