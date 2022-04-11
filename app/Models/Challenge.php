<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Challenge extends Model
{
    use Notifiable;

    protected $fillable = [
        'status','sended_at','answered_at','user_id','client_id','atalho1','atalho2',
      'atalho3_cansaco','atalho3_imaturidade','atalho3_estress','atalho3_salto','atalho3_angustia',
      'atalho3_telas','atalho3_dor','atalho3_fome','atalho4_ajustes','atalho4_ritual_dia','atalho4_ambienete','atalho4_rotina_alimentar',
        'atalho4_rotina_soneca','atalho4_ritual_noturno','atalho5','atalho6'
    ];


    
    public function analyzes()
    {
        return $this->hasMany('App\Models\Analyze');
    }

    public function form()
    {
        return $this->hasOne('App\Models\Form');
  
    }

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
    public function chat()
    {
        return $this->hasOne('App\Models\Chat');
  
    }

    public function naps()
    {
        return $this->hasManyThrough('App\Models\Nap', 'App\Models\Analyze',
    
        'challenge_id', // Foreign key on users table...
        'analyze_id', // Foreign key on posts table...
        'id', // Local key on countries table...
        'id' );

    }

    public function rituals()
    {
        return $this->hasManyThrough('App\Models\Ritual', 'App\Models\Analyze',
    
        'challenge_id', // Foreign key on users table...
        'analyze_id', // Foreign key on posts table...
        'id', // Local key on countries table...
        'id' );

    }

    public function wakes()
    {
        return $this->hasManyThrough('App\Models\Wake', 'App\Models\Analyze',
    
        'challenge_id', // Foreign key on users table...
        'analyze_id', // Foreign key on posts table...
        'id', // Local key on countries table...
        'id' );

    }
    public function user(){
        return $this->belongsTo('App\User');

    }
}
