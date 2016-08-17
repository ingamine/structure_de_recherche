<?php

namespace GestionAdministrative\LgmBundle\Listener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Gedmo\Sortable\Sortable;

class SoftDeleteListener
{
    public function preRemove(LifecycleEventArgs $event)
    {
        $entity = $event->getObject();

        if ($entity instanceof Sortable) {
            $entity->setPosition(-1);

            $om = $event->getObjectManager();
            $om->persist($entity);
            $om->flush();
        }
    }
}