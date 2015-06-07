<?php               

    $file = $_FILES["fichier"]["tmp_name"];   /*Your Original Source Image */
    echo $file;
    $pathToSave = '/TC4/resources/thumb/'; /*Your Destination Folder */
    $sourceWidth =60;
    $sourceHeight = 60;
    $what = getimagesize($file);
    $file_name = basename($file);/* Name of the Image File*/
    $ext   = pathinfo($file_name, PATHINFO_EXTENSION);

    /* Adding image name _thumb for thumbnail image */
    $file_name = basename($file_name, ".$ext") . '_thumb.' . $ext;

    switch(strtolower($what['mime']))
    {
            case 'image/jpeg':
            $img = imagecreatefromjpeg($file);
            $new = imagecreatetruecolor($what[0],$what[1]);
            imagecopy($new,$img,0,0,0,0,$what[0],$what[1]);
            header('Content-Type: image/jpeg');
        break;
        default: die();
    }

        imagejpeg($new,$pathToSave.$file_name);
        imagedestroy($new);
        $thumb=$pathToSave.$file_name;
?>