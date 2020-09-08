<?php 
use RainLab\Blog\Models\Post as BlogPost;class Cms5f5199c8d3d16017404013_a1cc9589ec2eb7953364b7de67bbe2b4Class extends Cms\Classes\PartialCode
{
//
public function onStart(){
    //This is where you list the categories you want to display
    //$categories = ['success-stories', 'associations'];
    $category = $this->category;

    $posts = [];
    //->slice(0, 10) as $item
    //->take(10) as $item)
    //($element['subs']->slice(0, 10) as $item)
    foreach(BlogPost::all() as $blog){
        $catList = [];
        foreach($blog->categories as $cat){
        //foreach($blog->categories as $cat){
            $catList[] = $cat->slug;
        }
       // var_dump($catList);
        if( in_array('success-stories',$catList ) && in_array($category,$catList) ){
                array_push($posts, $blog);
                
        }
    }
    
   $this['filteredPosts'] = $posts;
}
}
