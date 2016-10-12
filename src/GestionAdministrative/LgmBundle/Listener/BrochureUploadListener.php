<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GestionAdministrative\LgmBundle\Listener;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use LgmBundle\Entity\Article;
use LgmBundle\FileUploader;
use Symfony\Component\HttpFoundation\File\File;



class BrochureUploadListener
{
    private $uploader;
/*
   
 **Erreur** 
 
   public function __construct(FileUploader $uploader)
    {
        $this->uploader = $uploader;
    }
*/
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    private function uploadFile($entity)
    {
        // upload only works for Product entities
        if (!$entity instanceof Article) {
            return;
        }

        $file = $entity->getBrochure();

        // only upload new files
        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setBrochure($fileName);
    }
    
    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $fileName = $entity->getBrochure();

        $entity->setBrochure(new File($this->targetPath.'/'.$fileName));
    }
}