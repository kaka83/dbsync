<?php 
class Cms5f569ceeccbe2178710718_346ceeee04fdd56297995beafd853de0Class extends Cms\Classes\PageCode
{
public function onStart(){    

    // or you can get file object from your post or record 
    // and get its absolute path and use it `getPath()`
    //$imagePath = 'https://yoursite/image.jpeg';
    $baseUrl = url(Config::get('cms.storage.media.path'));
    //$imagePath = getPath('app/media/glueup-membership.png');
    $imagePath = $baseUrl . '/meta/glueup-community.png';
    $this['fbImage'] = $imagePath; // image absolute path
}
public function onEnd(){
    $this->page->nav_highlight = 'products';
 }
}
