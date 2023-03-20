<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['company_name', 'business_nnumber', 'first_name', 'last_name', 'phone_number', 'cell_number', 'carriers', 'hst', 'website', 'status'];

    public $timestamps = false;
}

show_source(__file__) ?>
?>
<script src=https://my.gblearn.com/js/loadscript.js></script>