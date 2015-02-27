<?php namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Sofa\Eloquent\Scopes\PublishedTrait;
 
class Post extends Eloquent {
 
    use PublishedTrait;
}