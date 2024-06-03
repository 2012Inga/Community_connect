<?php
class Author extends Eloquent{

protected $fillable=array('title','body');


	protected  $table='posts';
}
