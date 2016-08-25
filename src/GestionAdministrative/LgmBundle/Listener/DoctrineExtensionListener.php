<?php

// file: src/Acme/DemoBundle/Listener/DoctrineExtensionListener.php


namespace GestionAdministrative\LgmBundle\Listener;


use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Kernel;

class DoctrineExtensionListener implements ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function onLateKernelRequest(GetResponseEvent $event)
    {
        $translatable = $this->container->get('gedmo.listener.translatable');
        $translatable->setTranslatableLocale($event->getRequest()->getLocale());
    }

    public function onConsoleCommand()
    {
        $this->container->get('gedmo.listener.translatable')
            ->setTranslatableLocale($this->container->get('translator')->getLocale());
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        if (Kernel::MAJOR_VERSION == 2 && Kernel::MINOR_VERSION < 6) {
            $securityContext = $this->container->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE);
            if (null !== $securityContext && null !== $securityContext->getToken() && $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
                $loggable = $this->container->get('gedmo.listener.loggable');
                $loggable->setUsername($securityContext->getToken()->getUsername());
            }
        }
        else {
            $tokenStorage = $this->container->get('security.token_storage')->getToken();
            $authorizationChecker = $this->container->get('security.authorization_checker');
            if (null !== $tokenStorage && $authorizationChecker->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
                $loggable = $this->container->get('gedmo.listener.loggable');
                $loggable->setUsername($tokenStorage->getUser());
                $blameable = $this->container->get('gedmo.listener.blameable');
                $blameable->setUserValue($tokenStorage->getUser());
            }
        }
    }
}