<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/etablissement')) {
            // etablissement_index
            if (rtrim($pathinfo, '/') === '/etablissement') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_etablissement_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'etablissement_index');
                }

                return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\EtablissementController::indexAction',  '_route' => 'etablissement_index',);
            }
            not_etablissement_index:

            // etablissement_show
            if (preg_match('#^/etablissement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_etablissement_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissement_show')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\EtablissementController::showAction',));
            }
            not_etablissement_show:

            // etablissement_new
            if ($pathinfo === '/etablissement/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_etablissement_new;
                }

                return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\EtablissementController::newAction',  '_route' => 'etablissement_new',);
            }
            not_etablissement_new:

            // etablissement_edit
            if (preg_match('#^/etablissement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_etablissement_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissement_edit')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\EtablissementController::editAction',));
            }
            not_etablissement_edit:

            // etablissement_delete
            if (preg_match('#^/etablissement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_etablissement_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etablissement_delete')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\EtablissementController::deleteAction',));
            }
            not_etablissement_delete:

        }

        if (0 === strpos($pathinfo, '/habilitation')) {
            // habilitation_index
            if (rtrim($pathinfo, '/') === '/habilitation') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_habilitation_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'habilitation_index');
                }

                return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\HabilitationController::indexAction',  '_route' => 'habilitation_index',);
            }
            not_habilitation_index:

            // habilitation_show
            if (preg_match('#^/habilitation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_habilitation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habilitation_show')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\HabilitationController::showAction',));
            }
            not_habilitation_show:

            // habilitation_new
            if ($pathinfo === '/habilitation/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_habilitation_new;
                }

                return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\HabilitationController::newAction',  '_route' => 'habilitation_new',);
            }
            not_habilitation_new:

            // habilitation_edit
            if (preg_match('#^/habilitation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_habilitation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habilitation_edit')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\HabilitationController::editAction',));
            }
            not_habilitation_edit:

            // habilitation_delete
            if (preg_match('#^/habilitation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_habilitation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habilitation_delete')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\HabilitationController::deleteAction',));
            }
            not_habilitation_delete:

        }

        if (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/mastere')) {
                // mastere_index
                if (rtrim($pathinfo, '/') === '/mastere') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mastere_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mastere_index');
                    }

                    return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\MastereController::indexAction',  '_route' => 'mastere_index',);
                }
                not_mastere_index:

                // mastere_show
                if (preg_match('#^/mastere/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mastere_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mastere_show')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\MastereController::showAction',));
                }
                not_mastere_show:

                // mastere_new
                if ($pathinfo === '/mastere/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_mastere_new;
                    }

                    return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\MastereController::newAction',  '_route' => 'mastere_new',);
                }
                not_mastere_new:

                // mastere_edit
                if (preg_match('#^/mastere/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_mastere_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mastere_edit')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\MastereController::editAction',));
                }
                not_mastere_edit:

                // mastere_delete
                if (preg_match('#^/mastere/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_mastere_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mastere_delete')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\MastereController::deleteAction',));
                }
                not_mastere_delete:

            }

            if (0 === strpos($pathinfo, '/media')) {
                // media_index
                if (rtrim($pathinfo, '/') === '/media') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_media_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'media_index');
                    }

                    return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\MediaController::indexAction',  '_route' => 'media_index',);
                }
                not_media_index:

                // media_show
                if (preg_match('#^/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_media_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_show')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\MediaController::showAction',));
                }
                not_media_show:

                // media_new
                if ($pathinfo === '/media/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_media_new;
                    }

                    return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\MediaController::newAction',  '_route' => 'media_new',);
                }
                not_media_new:

                // media_edit
                if (preg_match('#^/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_media_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_edit')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\MediaController::editAction',));
                }
                not_media_edit:

                // media_delete
                if (preg_match('#^/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_media_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_delete')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\MediaController::deleteAction',));
                }
                not_media_delete:

            }

        }

        if (0 === strpos($pathinfo, '/productionscientifique')) {
            // productionscientifique_index
            if (rtrim($pathinfo, '/') === '/productionscientifique') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_productionscientifique_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'productionscientifique_index');
                }

                return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\ProductionScientifiqueController::indexAction',  '_route' => 'productionscientifique_index',);
            }
            not_productionscientifique_index:

            // productionscientifique_show
            if (preg_match('#^/productionscientifique/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_productionscientifique_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'productionscientifique_show')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\ProductionScientifiqueController::showAction',));
            }
            not_productionscientifique_show:

            // productionscientifique_new
            if ($pathinfo === '/productionscientifique/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_productionscientifique_new;
                }

                return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\ProductionScientifiqueController::newAction',  '_route' => 'productionscientifique_new',);
            }
            not_productionscientifique_new:

            // productionscientifique_edit
            if (preg_match('#^/productionscientifique/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_productionscientifique_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'productionscientifique_edit')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\ProductionScientifiqueController::editAction',));
            }
            not_productionscientifique_edit:

            // productionscientifique_delete
            if (preg_match('#^/productionscientifique/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_productionscientifique_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'productionscientifique_delete')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\ProductionScientifiqueController::deleteAction',));
            }
            not_productionscientifique_delete:

        }

        if (0 === strpos($pathinfo, '/researchteam')) {
            // researchteam_index
            if (rtrim($pathinfo, '/') === '/researchteam') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_researchteam_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'researchteam_index');
                }

                return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\ResearchTeamController::indexAction',  '_route' => 'researchteam_index',);
            }
            not_researchteam_index:

            // researchteam_show
            if (preg_match('#^/researchteam/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_researchteam_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'researchteam_show')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\ResearchTeamController::showAction',));
            }
            not_researchteam_show:

            // researchteam_new
            if ($pathinfo === '/researchteam/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_researchteam_new;
                }

                return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\ResearchTeamController::newAction',  '_route' => 'researchteam_new',);
            }
            not_researchteam_new:

            // researchteam_edit
            if (preg_match('#^/researchteam/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_researchteam_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'researchteam_edit')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\ResearchTeamController::editAction',));
            }
            not_researchteam_edit:

            // researchteam_delete
            if (preg_match('#^/researchteam/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_researchteam_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'researchteam_delete')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\ResearchTeamController::deleteAction',));
            }
            not_researchteam_delete:

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/soutenance')) {
                // soutenance_index
                if (rtrim($pathinfo, '/') === '/soutenance') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_soutenance_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'soutenance_index');
                    }

                    return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\SoutenanceController::indexAction',  '_route' => 'soutenance_index',);
                }
                not_soutenance_index:

                // soutenance_show
                if (preg_match('#^/soutenance/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_soutenance_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soutenance_show')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\SoutenanceController::showAction',));
                }
                not_soutenance_show:

                // soutenance_new
                if ($pathinfo === '/soutenance/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_soutenance_new;
                    }

                    return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\SoutenanceController::newAction',  '_route' => 'soutenance_new',);
                }
                not_soutenance_new:

                // soutenance_edit
                if (preg_match('#^/soutenance/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_soutenance_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soutenance_edit')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\SoutenanceController::editAction',));
                }
                not_soutenance_edit:

                // soutenance_delete
                if (preg_match('#^/soutenance/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_soutenance_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soutenance_delete')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\SoutenanceController::deleteAction',));
                }
                not_soutenance_delete:

            }

            if (0 === strpos($pathinfo, '/structure')) {
                // structure_index
                if (rtrim($pathinfo, '/') === '/structure') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_structure_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'structure_index');
                    }

                    return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\StructureController::indexAction',  '_route' => 'structure_index',);
                }
                not_structure_index:

                // structure_show
                if (preg_match('#^/structure/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_structure_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'structure_show')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\StructureController::showAction',));
                }
                not_structure_show:

                // structure_new
                if ($pathinfo === '/structure/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_structure_new;
                    }

                    return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\StructureController::newAction',  '_route' => 'structure_new',);
                }
                not_structure_new:

                // structure_edit
                if (preg_match('#^/structure/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_structure_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'structure_edit')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\StructureController::editAction',));
                }
                not_structure_edit:

                // structure_delete
                if (preg_match('#^/structure/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_structure_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'structure_delete')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\StructureController::deleteAction',));
                }
                not_structure_delete:

            }

        }

        if (0 === strpos($pathinfo, '/these')) {
            // these_index
            if (rtrim($pathinfo, '/') === '/these') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_these_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'these_index');
                }

                return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\TheseController::indexAction',  '_route' => 'these_index',);
            }
            not_these_index:

            // these_show
            if (preg_match('#^/these/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_these_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'these_show')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\TheseController::showAction',));
            }
            not_these_show:

            // these_new
            if ($pathinfo === '/these/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_these_new;
                }

                return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\TheseController::newAction',  '_route' => 'these_new',);
            }
            not_these_new:

            // these_edit
            if (preg_match('#^/these/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_these_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'these_edit')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\TheseController::editAction',));
            }
            not_these_edit:

            // these_delete
            if (preg_match('#^/these/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_these_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'these_delete')), array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\TheseController::deleteAction',));
            }
            not_these_delete:

        }

        // lgm_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'lgm_homepage');
            }

            return array (  '_controller' => 'GestionAdministrative\\LgmBundle\\Controller\\DefaultController::indexAction',  '_route' => 'lgm_homepage',);
        }

        // gestionadministrative_user_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gestionadministrative_user_default_index');
            }

            return array (  '_controller' => 'GestionAdministrative\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gestionadministrative_user_default_index',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
