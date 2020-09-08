<?php 
class Cms5f56c8e94d734786460482_11d25414af2c6caca7d6dfd8d327df7fClass extends Cms\Classes\PageCode
{
public function onStart(){    

    // or you can get file object from your post or record 
    // and get its absolute path and use it `getPath()`
    //$imagePath = 'https://yoursite/image.jpeg';
    $baseUrl = url(Config::get('cms.storage.media.path'));
    //$imagePath = getPath('app/media/glueup-membership.png');
    $imagePath = $baseUrl . '/meta/glueup-event.png';
    $this['fbImage'] = $imagePath; // image absolute path
}
public function onEnd(){
    $this->page->nav_highlight = 'products';
 }
}
