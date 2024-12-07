<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Agent extends Model
{
    use HasFactory;

    protected $table = 'agents';
    protected $primaryKey = 'agent_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'phone_number',
        'remember_token',
        'picture_path'
    ];

    public function AgentToProperty()
    {
        return $this->hasMany(Property::class, 'agent_id', 'agent_id');
    }
}
