<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function merchant()
    {
        return $this->belongsTo(Merchant::class,'user_id')->withDefault();
    }
    public function agent()
    {
        return $this->belongsTo(Merchant::class,'user_id')->withDefault();
    }
    public function messages()
    {
        return $this->hasMany(TicketMessage::class,'ticket_id');
    }
    
}
