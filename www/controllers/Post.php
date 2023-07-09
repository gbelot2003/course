<?php

class Post
{
    public function __construct()
    {
        //echo 'Post Loaded';
    }

    public function index()
    {
        echo "Index Post";
    }

    public function about()
    {
        echo "About Page";
    }

    public function edit($id)
    {
        echo "Este es post " . $id;
    }
}
