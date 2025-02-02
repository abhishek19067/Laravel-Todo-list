<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table= "store";
    protected $fillable = ['text'];
    public function user()
{
    return $this->belongsTo(User::class);

}
public function items()
{
    return $this->hasMany(Item::class, 'item_id', 'id'); 
}



}
