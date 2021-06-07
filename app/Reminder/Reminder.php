<?php

namespace App\Reminder;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reminder extends Model
{
    use Notifiable;

    protected $fillable = [
        'reminder',
        'email',
        'notification',
        'repetition'
    ];
}
