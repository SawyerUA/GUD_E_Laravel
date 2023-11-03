<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded;

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getDateCarbonAttribute(){
        return Carbon::parse($this->created_at);
    }
}
