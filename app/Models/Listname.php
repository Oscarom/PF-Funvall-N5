<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listname extends Model
{
    use HasFactory;
    public function items()
    {
        return $this->belongsToMany(Item::class, "item_listnames");
    }
    protected $listnames ='listnames';
    protected $primaryKet = 'id';
    protected $fillable = ['name','date'];
}
