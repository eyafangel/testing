<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //Table Name
    protected $table = 'patients';
    //Primary Key
    public $primaryKey = 'patpient_id';
    //Timestamps
    public $Timestamps = true;
}
