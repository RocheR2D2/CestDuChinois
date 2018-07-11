<?php
/**
 * Created by PhpStorm.
 * User: Haosh
 * Date: 11/07/2018
 * Time: 14:21
 */

namespace RecetteBundle\Services;

use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileManager
{

    private $directory;

    public function __construct(Twig $twig, string $directory)
    {
        $this->directory = $directory;
    }


    public function uploadFile(UploadedFile $uploadedFile) {
        $filename = md5(uniqid()) . '.' . $uploadedFile->guessExtension();

        $uploadedFile->move(
            $this->directory,
            $filename
        );


        return $filename;


    }
}