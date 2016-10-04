<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $fillable = ['name', 
    						'subscription_start_date', 
    						'subscription_end_date',
    						'event_start_date',
    						'event_end_date',
    						'before_subscription_page',
    						'after_subscription_page'];

    protected $dates = ['created_at', 'updated_at',
    					'subscription_start_date',
    					'subscription_end_date',
    					'event_start_date',
    					'event_end_date'];


}
