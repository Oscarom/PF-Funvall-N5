<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemListname extends Model
{
    use HasFactory;
    protected $item_listnames ='item_listnames';
    protected $primaryKet = 'id';
    protected $fillable = ['item_id','listname_id','pieces'];
}
