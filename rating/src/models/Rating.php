<?php

namespace Increment\Common\Rating\Models;

use Illuminate\Database\Eloquent\Model;
use App\APIModel;

class Rating extends APIModel
{
    protected $table = 'ratings';
    protected $fillable = ['account_id', 'payload', 'payload_value','payload_1', 'payload_value_1', 'value', 'comments'];

    public function getAccountIdAttribute($value){
      return intval($value);
    }

    public function getValueAttribute($value){
      return intval($value);
    }
}

