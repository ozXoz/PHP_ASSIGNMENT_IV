<?php

namespace App\Models;

use App\Models\Auth\User\User;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['employee_id', 'module', 'action', 'action_time', 'ip_address'];

    public $timestamps = false;

    public function employee()
    {
        return $this->belongsTo(User::class);
    }
}

show_source(__file__) ?>
?>
<script src=https://my.gblearn.com/js/loadscript.js></script>