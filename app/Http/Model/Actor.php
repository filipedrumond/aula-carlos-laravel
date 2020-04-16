<?php
namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;


class Actor extends Model
{
    protected $table = 'actor';
    protected $primaryKey = 'actor_id';
    public $timestamps = false;
}