<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slipdetail extends Model
{
    protected $fillable = ['Department','Item_Name','Category','Process','QC','Packing_date','Expired_Date'
    ,'Item_Name2','Packing_date2','Expired_Date2'];
}
