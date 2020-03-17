<?php

class Video
{

}

class User
{
    public function donwload(Video $video)
    {
        if(! $this->subscribed()){
            throw new Exception("You must be subscribed to download video");
        }
    }

    public function subscribed()
    {
        return false;
    }
}

class UserDownloadsController
{
    public function show()
    {
        try
        {
            (new User)->donwload(new Video);
        }catch(Exception $e){
            echo "Error: " . $e->getMessage();
        }
    }
}

//(new User)->donwload(new Video);
(new UserDownloadsController)->show();