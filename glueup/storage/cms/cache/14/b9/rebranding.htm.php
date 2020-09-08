<?php 
class Cms5f5653ea8d1af631847882_4409326b4ba29bffbb72f17a54e25956Class extends Cms\Classes\PageCode
{
public function onStart(){    

    // or you can get file object from your post or record 
    // and get its absolute path and use it `getPath()`
    //$imagePath = 'https://yoursite/image.jpeg';
    $baseUrl = url(Config::get('cms.storage.media.path'));
    //$imagePath = getPath('app/media/glueup-membership.png');
    $imagePath = $baseUrl . '/eventbank is now glueup.png';
    $this['fbImage'] = $imagePath; // image absolute path
}
public function onEnd(){
    $this->page->nav_highlight = 'resources';
 }
}
