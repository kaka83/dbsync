<?php 
class Cms5f5199c8c8495482758944_be3577a5f696746781360dea53fa6d8eClass extends Cms\Classes\PageCode
{
public function onStart(){    

    // or you can get file object from your post or record 
    // and get its absolute path and use it `getPath()`
    //$imagePath = 'https://yoursite/image.jpeg';
    $baseUrl = url(Config::get('cms.storage.media.path'));
    //$imagePath = getPath('app/media/glueup-membership.png');
    $imagePath = $baseUrl . '/meta/glueup-membership.png';
    $this['fbImage'] = $imagePath; // image absolute path
}
public function onEnd(){
    $this->page->nav_highlight = 'products';
 }
}
