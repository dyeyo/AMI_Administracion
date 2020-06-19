<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Clients extends Model
{
  protected $guarded = [];

  public function asesor()
  {
    return $this->belongsTo(User::class, 'asesorId');
  }
}
