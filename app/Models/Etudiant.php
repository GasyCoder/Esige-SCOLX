<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\Image\Enums\Fit;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Etudiant extends Model implements HasMedia
{
    use HasApiTokens, SoftDeletes, InteractsWithMedia;
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'etudiants';
    protected $appends = ['photo_url'];

    protected $fillable = [
        'uuid', 'isActive', 'typeFormation', 'fname', 'lname', 'sexe', 'email', 'phoneStudent',
        'birth', 'birthLocation', 'adresse', 'country', 'city', 'region', 'zipCode', 'fatherName',
        'motherName', 'adresseParent', 'phoneParent', 'jobParent', 'classeId', 'parcourId', 'number',
        //'photo',
    ];

    public function getPhotoUrlAttribute()
    {
        return $this->getFirstMedia('photo') ? $this->getFirstMedia('photo')->getUrl('preview') : null;
    }


    public function registerMediaColections()
    {
        $this->addMediaCollection('images')
            ->singleFile();
        $this->addMediaCollection('downloads')
            ->singleFile();
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Fit::Crop, 300, 300)
            ->nonQueued();
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

    protected function casts(): array
    {
        return [
            'isActive' => 'boolean',
            'typeFormation' => 'boolean',
        ];
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classeId');
    }

    public function parcour()
    {
        return $this->belongsTo(Parcour::class, 'parcourId');
    }
}
