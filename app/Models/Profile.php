<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table="profiles";

    protected $fillable=['Profile_Pic_path','id','Profile_Experince','Specialized_In','Total_cases','Profile_Description'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
