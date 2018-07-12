<?php
/**
 * Created by PhpStorm.
 * User: Haosh
 * Date: 11/07/2018
 * Time: 14:21
 */

namespace RecetteBundle\Services;

use Psr\Container\ContainerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileManager
{

    public function pathExsitence(Filesystem $filesystem, $uploadPath) {
        if($filesystem->exists($uploadPath) == false) {
            $filesystem->mkdir($uploadPath,0700);
        }
    }

    public function uploadFile(UploadedFile $uploadedFile, $uploadPath) {

        $filename =  $this->generateUniqueFileName(). '.' . $uploadedFile->guessExtension();

        $uploadedFile->move(
            $uploadPath,
            $filename
        );

        return $filename;
    }

    public function generateUniqueFileName()
    {
        return md5(uniqid());

    }
}