<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class File extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $with = ['media'];
    protected $appends = ['url'];

    public function user(){
        return $this->belongsTo(User::class);
        
        
    }


    public function getUrlAttribute() {
        $mediaItems =$this->getMedia('files');
        // dump($mediaItems);
        return $mediaItems[0]->getFullUrl();
    }

    
}
