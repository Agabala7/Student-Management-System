<?php 

/**
 * students controller
 */
class Students extends Controller
{
    public function index($id = null)
    {
 		echo "this is the students controller". $id;       
    }
}