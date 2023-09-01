<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchased_course extends Model
{
    use HasFactory;
    public $timestamps=false;
    //protected $primaryKey="id";

    
   
    protected $table = "purchased_courses";
    protected $primaryKey = "id";
}
