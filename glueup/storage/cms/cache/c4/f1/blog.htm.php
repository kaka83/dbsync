<?php 
class Cms5f5671ca527df037621968_87337ba0b3393440ebb2ed02dbebf83dClass extends Cms\Classes\PageCode
{
public function onStart(){    

    // or you can get file object from your post or record 
    // and get its absolute path and use it `getPath()`
    //$imagePath = 'https://yoursite/image.jpeg';
    $baseUrl = url(Config::get('cms.storage.media.path'));
    //$imagePath = getPath('app/media/glueup-membership.png');
    $imagePath = $baseUrl . '/meta/glueup-hello-meta.png';
    $this['fbImage'] = $imagePath; // image absolute path
}
}
