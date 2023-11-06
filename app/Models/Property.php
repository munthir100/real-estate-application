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
        'seo_title',
        'seo_description',
        'seo_link',
        'is_ad',
        'in_home_page',
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
}
