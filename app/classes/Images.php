<?php

class Images
{

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    //Function that uploads an image
    public function imageUpload(){

    $msg_upload = "";
    //If submit button is pressed
    if(isset($_POST['upload'])){

        $file = $_FILES['image'];
        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileType = $_FILES['image']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if(in_array($fileActualExt, $allowed)){
            //If there is no error
            if($fileError === 0){
                //If the size of the image is under 5MB
                if($fileSize < 500000){
                    //Creates a unique number to the file, to avoid conflicts between files with the same name
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    //Adds the path where the file is
                    $fileDestination = APP_ROOT .'/uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    return $fileNameNew;

                }else{
                    echo "Your file is too big!";
                }

            }else{
                echo "There was an error uploading your file!";
            }

        }else{
            echo "You cannot upload files of this type!";
        }
    }

    }

}
