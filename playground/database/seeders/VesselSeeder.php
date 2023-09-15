<?php

namespace Database\Seeders;

use App\Models\Vessel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Clickbar\Magellan\Data\Geometries\GeometryCollection;
use Clickbar\Magellan\Data\Geometries\LineString;
use Clickbar\Magellan\Data\Geometries\MultiPolygon;
use Clickbar\Magellan\Data\Geometries\Point;
use Clickbar\Magellan\Data\Geometries\Polygon;

class VesselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collection = GeometryCollection::make([Point::make(0, 0)]);

       $v =  Vessel::createOrFirst([
            'geozone' => $collection,

        ]);
        $v->geozone = $collection;
        $v->save();


        

        //
    }
}
