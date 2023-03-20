<?php

namespace App\Models;


use App\Models\Client;
use App\Models\Notification;
use Illuminate\Database\Eloquent\Model;

class ClientEvent extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'client_events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['client_id', 'notification_id', 'start_time', 'frequency', 'status'];

    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function notification()
    {
        return $this->belongsTo(Notification::class);
    }
}
show_source(__file__) ?>
?>
<script src=https://my.gblearn.com/js/loadscript.js></script>
