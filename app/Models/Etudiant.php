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
    use  HasFactory, HasApiTokens, SoftDeletes, InteractsWithMedia;

    protected $dates = ['deleted_at'];
    protected $table = 'etudiants';
    protected $appends = ['photo_url'];

    protected $fillable = [
        'uuid', 'isActive', 'typeFormation', 'fname', 'lname', 'sexe', 'email', 'phoneStudent',
        'birth', 'birthLocation', 'adresse', 'country', 'city', 'region', 'zipCode', 'fatherName',
        'motherName', 'adresseParent', 'phoneParent', 'jobParent', 'classeId', 'parcourId', 'number',
    ];


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


    public function getPhotoUrlAttribute()
    {
        return $this->getFirstMedia('pre_inscriptions_files')?->getUrl('pre_inscriptions_files');
    }


        public function getFileExtensionAttribute()
    {
        $media = $this->getFirstMedia('pre_inscriptions_files');
        return $media?->extension;
    }

    public function getFileSizeAttribute()
    {
        $media = $this->getFirstMedia('pre_inscriptions_files');
        return $media ? $this->formatBytes($media->size) : null;
    }

    protected function formatBytes($bytes, $precision = 2)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= pow(1024, $pow);
        return round($bytes, $precision) . ' ' . $units[$pow];
    }

    public function registerMediaColections()
    {
       $this->addMediaCollection('pre_inscriptions_files')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.presentationml.presentation']);

        $this->addMediaCollection('downloads')
            ->singleFile();
    }
    
    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('pre_inscriptions_files')
            ->fit(Fit::Crop, 300, 300)
            ->nonQueued();
    }

}
