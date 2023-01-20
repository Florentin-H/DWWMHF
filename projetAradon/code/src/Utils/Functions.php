<?php

abstract class Functions
{

    static function imageValidation($file, $pathOfNewFile, $basePath)
    {
        if (!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image pour le Nft");

        if (!file_exists($basePath)) mkdir($basePath, 0777);

        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if (!getimagesize($file["tmp_name"]))
            throw new Exception("Le fichier n'est pas une image");
        if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("L'extension du fichier n'est pas reconnu");
        if (file_exists($pathOfNewFile))
            throw new Exception("Le fichier existe déjà");
        if ($file['size'] > 500000)
            throw new Exception("Le fichier est trop gros");
        if (!move_uploaded_file($file['tmp_name'], $pathOfNewFile))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
    }

    static function getRandomiseImageName($fileName)
    {
        $random = rand(0, 99999);
        return $random . "" . $fileName;
    }
}
