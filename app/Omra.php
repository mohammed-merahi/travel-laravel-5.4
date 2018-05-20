<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Omra extends Model
{
    protected $table ='omras';

    protected $fillable =['omra_code','type_chambre','prix_ttc','ville_depart_zone','compagnie_aerienne','hotel_makkah','hotel_medine'];

    protected $hidden =[];

    public function omra(){
        return $this->belongsTo('App\Omra');
    }
}
