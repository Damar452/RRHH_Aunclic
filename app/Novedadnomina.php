<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novedadnomina extends Model
{
    protected $table = 'novedadnominas';
    protected $fillable = ['persona_id','salud_id','pension_id','arp_id','banco_id','numerocuenta'];
    
    public function arp()
    {
        return $this->belongsTo(Arp::class);
    }

    public function banco()
    {
        return $this->belongsTo(Banco::class);
    }

    public function pension()
    {
        return $this->belongsTo(Pension::class);
    }
    
    public function salud()
    {
        return $this->belongsTo(Salud::class);
    }
     
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}
