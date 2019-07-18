<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
{

class news extends Model
    {
    protected $table = 'news';
    protected $fillable = ['city','village','postcode','file','country'];
    }
}