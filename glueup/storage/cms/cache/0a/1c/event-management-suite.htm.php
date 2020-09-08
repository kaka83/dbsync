<?php 
class Cms5f56744756797351374884_d0989a30a8926add35d0d6f02f39bf92Class extends Cms\Classes\PageCode
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
