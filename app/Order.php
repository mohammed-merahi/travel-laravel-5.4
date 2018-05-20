<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ='orders';

    protected $fillable =['first_name','last_name','identity_num','tour_id','address','comments','rating'];

    protected $hidden =[];

    public function order(){
        return $this->belongsTo('App\Order');
    }
}
