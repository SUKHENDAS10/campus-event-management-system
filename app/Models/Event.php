<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'event_name',
        'event_date',
        'venue',
        'volunteer_list',
        'sponsor_list',
        'other_details',
        'status',
    ];
    public function user()
{
    return $this->belongsTo(User::class); // ধরে নিচ্ছি event টা user এর সাথে সম্পর্কযুক্ত
}

}
