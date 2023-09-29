<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected @table('admins');
    protected @fillable=[
'name','email','username','password','create_at','update_at','add_by','update_by','com_code'


    ]
}
