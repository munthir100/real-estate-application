<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use App\Filters\Dashboard\PropertyFilters;
use Spatie\MediaLibrary\InteractsWithMedia;

class Property extends Model implements HasMedia
{
    use Filterable, InteractsWithMedia;

    protected $fillable = [
        'user_id',
        'property_type_id',
        'status_id',
        'city_id',
        'title',
        'description',
        'square',
        'period',
        'number_of_bedrooms',
        'number_of_bathrooms',
        'number_of_beds',
        'location_id',
        'currency_id',
        'auto_renew',
        'number_of_floors',
        'price',
        'label',
        'video_url',
        'category_id',
        'seo_title',
        'seo_description',
        'seo_link',
        'is_ad',
        'in_home_page',
        'property_type_id'
    ];
    protected string $default_filters = PropertyFilters::class;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class, 'property_facilities', 'property_id', 'facility_id')
            ->withPivot('distance');
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'property_features');
    }

    public function propertyFeatures()
    {
        return $this->belongsToMany(PropertyFeature::class);
    }

    public function propertyFacility()
    {
        return $this->belongsToMany(PropertyFacility::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function legalData()
    {
        return $this->hasOne(PropertyLegalData::class);
    }

    //scopes
    public function scopeUsePropertyFilters($query, $filters)
    {
        if ($filters['location']) {
            $query->join('locations', 'properties.location_id', '=', 'locations.id')
                ->where('locations.name', 'like', '%' . $filters['location'] . '%');
        }

        if ($filters['min_price']) {
            $query->where('price', '>=', (int) $filters['min_price']);
        }

        if ($filters['max_price']) {
            $query->where('price', '<=', (int) $filters['max_price']);
        }

        if ($filters['min_square']) {
            $query->where('square', '>=', (int) $filters['min_square']);
        }

        if ($filters['max_square']) {
            $query->where('square', '<=', (int) $filters['max_square']);
        }

        if ($filters['category_id']) {
            $query->where('property_type_id', $filters['category_id']);
        }

        if ($filters['bedroom']) {
            $query->where('number_of_bedrooms', $filters['bedroom']);
        }
        if ($filters['bathroom']) {
            $query->where('number_of_bathrooms', $filters['bathroom']);
        }

        if ($filters['city_id']) {
            $query->where('city_id', $filters['city_id']);
        }
        if ($filters['type']) {
            $query->join('property_types', 'properties.property_type_id', '=', 'property_types.id')
                ->where('property_types.name', 'like', '%' . $filters['type'] . '%');
        }

        if ($filters['features']) {
            $query->whereHas('features', function ($subQuery) use ($filters) {
                $subQuery->whereIn('feature_id', $filters['features']);
            });
        }

        if ($filters['sort_by']) {
            $sortField = 'created_at'; // Default sort field

            switch ($filters['sort_by']) {
                case 'date_asc':
                    $sortField = 'created_at';
                    $sortOrder = 'asc';
                    break;
                case 'date_desc':
                    $sortField = 'created_at';
                    $sortOrder = 'desc';
                    break;
                case 'price_asc':
                    $sortField = 'price';
                    $sortOrder = 'asc';
                    break;
                case 'price_desc':
                    $sortField = 'price';
                    $sortOrder = 'desc';
                    break;
                case 'name_asc':
                    $sortField = 'title';
                    $sortOrder = 'asc';
                    break;
                case 'name_desc':
                    $sortField = 'title';
                    $sortOrder = 'desc';
                    break;
            }

            $query->orderBy($sortField, $sortOrder);
        }




        return $query;
    }
}
