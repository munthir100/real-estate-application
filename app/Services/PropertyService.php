<?php

namespace App\Services;

use App\Models\Property;
use App\Models\PropertyFacility;
use App\Models\PropertyFeature;

class PropertyService
{
    public function insertFacilities(Property $propertyAdvertisement, array $facilities)
    {
        $propertyId = $propertyAdvertisement->id;

        $facilityData = array_map(function ($facility) use ($propertyId) {
            return [
                'property_id' => $propertyId,
                'facility_id' => $facility['id'],
                'distance' => $facility['distance'],
            ];
        }, $facilities);

        PropertyFacility::insert($facilityData);
    }

    public function insertFeatures(Property $property, array $featureIds)
    {
        $propertyId = $property->id;

        $featureData = array_map(function ($featureId) use ($propertyId) {
            return [
                'property_id' => $propertyId,
                'feature_id' => $featureId,
            ];
        }, $featureIds);

        PropertyFeature::insert($featureData);
    }


    public function deleteFeatures(Property $property)
    {
        $property->features()->detach();
    }
}
