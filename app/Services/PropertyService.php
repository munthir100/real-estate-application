<?php

namespace App\Services;

use App\Models\Location;
use App\Models\Property;
use App\Models\PropertyFeature;
use App\Models\PropertyFacility;
use App\Models\PropertyLegalData;

class PropertyService
{

    public function saveLocation($property, $validatedData)
    {
        $location = Location::create([
            'name' => $validatedData['location'],
            'longitude' => $validatedData['longitude'],
            'latitude' => $validatedData['latitude'],
        ]);

        $property->location()->associate($location);

        return $location;
    }

    public function insertFacilities(Property $propertyAdvertisement, array $facilities)
    {
        if (isset($validatedData['facilities'])) {
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
    }

    public function insertFeatures(Property $property, array $featureIds)
    {
        if (isset($validatedData['features'])) {

            $propertyId = $property->id;

            $featureData = array_map(function ($featureId) use ($propertyId) {
                return [
                    'property_id' => $propertyId,
                    'feature_id' => $featureId,
                ];
            }, $featureIds);

            PropertyFeature::insert($featureData);
        }
    }

    function saveLegalData($property, $validatedData)
    {
        $legalData = PropertyLegalData::updateOrCreate(
            ['property_id' => $property->id],
            $validatedData
        );

        return $legalData;
    }
    public function deleteFeatures(Property $property)
    {
        $property->features()->detach();
    }
    public function deleteFacilities(Property $property)
    {
        $property->facilities()->detach();
    }
}
