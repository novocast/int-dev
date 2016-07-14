<?php

class DemoTwoController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
     
    public function showWelcome()
    {
        return view::make("Hello World);
    }
    
    public function index()
    {
        $array = array("2","'3'","true","'string'");
        
        print_r($array);
    }
    
}

?>
