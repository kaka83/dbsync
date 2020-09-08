<?php 
class Cms5f51898533af5040509670_563c7eb34354af138bb4fa1e3676130bClass extends Cms\Classes\PageCode
{
public function onStart(){    

    // or you can get file object from your post or record 
    // and get its absolute path and use it `getPath()`
    //$imagePath = 'https://yoursite/image.jpeg';
    $baseUrl = url(Config::get('cms.storage.media.path'));
    //$imagePath = getPath('app/media/glueup-membership.png');
    $imagePath = $baseUrl . '/meta/glueup-logo-meta.png';
    $this['fbImage'] = $imagePath; // image absolute path
}
}
