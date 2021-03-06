
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapRoomStyle extends Model
{
    protected $fillable = [
        'capacity',
    ];

     /*
        Relationship: One to Many
        Return: Collection
    */
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    /*
        Relationship: One to Many
        Return: Collection
    */
    public function style()
    {
        return $this->belongsTo(Style::class);
    }

    /*
        Relationship: Many to Many
        Return: Collection
    */
    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
