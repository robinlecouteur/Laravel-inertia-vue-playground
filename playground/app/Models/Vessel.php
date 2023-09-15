<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Clickbar\Magellan\Database\Eloquent\HasPostgisColumns;

class Vessel extends Model
{
    use HasFactory, HasPostgisColumns ;

    protected array $postgisColumns = [
        'geozone' => [
            'type' => 'geometry',
            'srid' => 4326,
        ],
    ];}
