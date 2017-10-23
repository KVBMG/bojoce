<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/search/offre')) {
            if (0 === strpos($pathinfo, '/search/offres')) {
                // eco_job_anonymous_map
                if ($pathinfo === '/search/offres') {
                    return array (  '_controller' => 'EcoJob\\AnonymousBundle\\Controller\\DefaultController::mapAction',  '_route' => 'eco_job_anonymous_map',);
                }

                // eco_job_anonymous_offre_search
                if ($pathinfo === '/search/offres/filtering') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_eco_job_anonymous_offre_search;
                    }

                    return array (  '_controller' => 'EcoJob\\AnonymousBundle\\Controller\\DefaultController::searchAction',  '_route' => 'eco_job_anonymous_offre_search',);
                }
                not_eco_job_anonymous_offre_search:

            }

            // eco_job_anonymous__offre_searchpage
            if ($pathinfo === '/search/offre/search') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_eco_job_anonymous__offre_searchpage;
                }

                return array (  '_controller' => 'EcoJob\\AnonymousBundle\\Controller\\DefaultController::doSearchAction',  '_route' => 'eco_job_anonymous__offre_searchpage',);
            }
            not_eco_job_anonymous__offre_searchpage:

            // eco_job_anonymous_offre
            if (preg_match('#^/search/offre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_eco_job_anonymous_offre;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_anonymous_offre')), array (  '_controller' => 'EcoJob\\AnonymousBundle\\Controller\\DefaultController::showOffreAction',));
            }
            not_eco_job_anonymous_offre:

            // eco_job_anonymous_offre_details
            if (preg_match('#^/search/offre/(?P<id>[^/]++)/details$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_eco_job_anonymous_offre_details;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_anonymous_offre_details')), array (  '_controller' => 'EcoJob\\AnonymousBundle\\Controller\\DefaultController::detailsOffreAction',));
            }
            not_eco_job_anonymous_offre_details:

            // eco_job_anonymous_offres_json
            if ($pathinfo === '/search/offres/gets/json') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_eco_job_anonymous_offres_json;
                }

                return array (  '_controller' => 'EcoJob\\AnonymousBundle\\Controller\\DefaultController::getAllJsonAction',  '_route' => 'eco_job_anonymous_offres_json',);
            }
            not_eco_job_anonymous_offres_json:

            if (0 === strpos($pathinfo, '/search/offre/search_ajax')) {
                // eco_job_anonymous_offre_search_ajax
                if ($pathinfo === '/search/offre/search_ajax') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_anonymous_offre_search_ajax;
                    }

                    return array (  '_controller' => 'EcoJob\\AnonymousBundle\\Controller\\DefaultController::searchAjaxAction',  '_route' => 'eco_job_anonymous_offre_search_ajax',);
                }
                not_eco_job_anonymous_offre_search_ajax:

                // eco_job_anonymous_offre_search_ajax_templated
                if ($pathinfo === '/search/offre/search_ajax/templated') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_anonymous_offre_search_ajax_templated;
                    }

                    return array (  '_controller' => 'EcoJob\\AnonymousBundle\\Controller\\DefaultController::searchAjaxTemplatedAction',  '_route' => 'eco_job_anonymous_offre_search_ajax_templated',);
                }
                not_eco_job_anonymous_offre_search_ajax_templated:

            }

            // eco_job_anonymous_offre_integralite
            if (preg_match('#^/search/offre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_eco_job_anonymous_offre_integralite;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_anonymous_offre_integralite')), array (  '_controller' => 'EcoJob\\AnonymousBundle\\Controller\\DefaultController::integraliteOffreAction',));
            }
            not_eco_job_anonymous_offre_integralite:

        }

        if (0 === strpos($pathinfo, '/recruteur')) {
            // eco_job_recruteur_index
            if (rtrim($pathinfo, '/') === '/recruteur') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_eco_job_recruteur_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'eco_job_recruteur_index');
                }

                return array (  '_controller' => 'EcoJob\\RecruteurBundle\\Controller\\RecruteurController::indexAction',  '_route' => 'eco_job_recruteur_index',);
            }
            not_eco_job_recruteur_index:

            if (0 === strpos($pathinfo, '/recruteur/offre')) {
                // eco_job_recruteur_offre_show
                if (0 === strpos($pathinfo, '/recruteur/offre/show') && preg_match('#^/recruteur/offre/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_recruteur_offre_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_recruteur_offre_show')), array (  '_controller' => 'EcoJob\\RecruteurBundle\\Controller\\RecruteurController::showAction',));
                }
                not_eco_job_recruteur_offre_show:

                // eco_job_recruteur_offre_list
                if ($pathinfo === '/recruteur/offre/list') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_recruteur_offre_list;
                    }

                    return array (  '_controller' => 'EcoJob\\RecruteurBundle\\Controller\\RecruteurController::listAction',  '_route' => 'eco_job_recruteur_offre_list',);
                }
                not_eco_job_recruteur_offre_list:

                // eco_job_recruteur_offre_create
                if ($pathinfo === '/recruteur/offre/create') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_recruteur_offre_create;
                    }

                    return array (  '_controller' => 'EcoJob\\RecruteurBundle\\Controller\\RecruteurController::createAction',  '_route' => 'eco_job_recruteur_offre_create',);
                }
                not_eco_job_recruteur_offre_create:

                // eco_job_recruteur_offre_edit
                if (0 === strpos($pathinfo, '/recruteur/offre/edit') && preg_match('#^/recruteur/offre/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_recruteur_offre_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_recruteur_offre_edit')), array (  '_controller' => 'EcoJob\\RecruteurBundle\\Controller\\RecruteurController::editAction',));
                }
                not_eco_job_recruteur_offre_edit:

                // eco_job_recruteur_offre_delete
                if (0 === strpos($pathinfo, '/recruteur/offre/delete') && preg_match('#^/recruteur/offre/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_recruteur_offre_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_recruteur_offre_delete')), array (  '_controller' => 'EcoJob\\RecruteurBundle\\Controller\\RecruteurController::deleteAction',));
                }
                not_eco_job_recruteur_offre_delete:

                // eco_job_recruteur_offre_searchpage
                if ($pathinfo === '/recruteur/offre/search') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_recruteur_offre_searchpage;
                    }

                    return array (  '_controller' => 'EcoJob\\RecruteurBundle\\Controller\\RecruteurController::doSearchAction',  '_route' => 'eco_job_recruteur_offre_searchpage',);
                }
                not_eco_job_recruteur_offre_searchpage:

                // eco_job_recruteur_offre_search
                if ($pathinfo === '/recruteur/offre/do/search') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_eco_job_recruteur_offre_search;
                    }

                    return array (  '_controller' => 'EcoJob\\RecruteurBundle\\Controller\\RecruteurController::searchAction',  '_route' => 'eco_job_recruteur_offre_search',);
                }
                not_eco_job_recruteur_offre_search:

            }

            // eco_job_recruteur_candidatures_list
            if ($pathinfo === '/recruteur/candidatures') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_eco_job_recruteur_candidatures_list;
                }

                return array (  '_controller' => 'EcoJob\\RecruteurBundle\\Controller\\RecruteurController::candidatureListeAction',  '_route' => 'eco_job_recruteur_candidatures_list',);
            }
            not_eco_job_recruteur_candidatures_list:

            // eco_job_recruteur_candidatures_offre_list
            if (preg_match('#^/recruteur/(?P<id>[^/]++)/recruteur_offres/p\\=(?P<offset>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_eco_job_recruteur_candidatures_offre_list;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_recruteur_candidatures_offre_list')), array (  '_controller' => 'EcoJob\\RecruteurBundle\\Controller\\RecruteurController::recruteurOffreListAction',));
            }
            not_eco_job_recruteur_candidatures_offre_list:

            if (0 === strpos($pathinfo, '/recruteur/offres')) {
                // eco_job_recruteur_offre_candidatures_template
                if (preg_match('#^/recruteur/offres/(?P<id>[^/]++)/candidatures$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_recruteur_offre_candidatures_template;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_recruteur_offre_candidatures_template')), array (  '_controller' => 'EcoJob\\RecruteurBundle\\Controller\\RecruteurController::candidatureTemplateAction',));
                }
                not_eco_job_recruteur_offre_candidatures_template:

                // eco_job_recruteur_offre_candidatures
                if (preg_match('#^/recruteur/offres/(?P<id>[^/]++)/candidatures/p\\=(?P<offset>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_recruteur_offre_candidatures;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_recruteur_offre_candidatures')), array (  '_controller' => 'EcoJob\\RecruteurBundle\\Controller\\RecruteurController::offreCandidaturesAction',));
                }
                not_eco_job_recruteur_offre_candidatures:

            }

            // eco_job_recruteur_candidature_detail
            if (0 === strpos($pathinfo, '/recruteur/candidatures') && preg_match('#^/recruteur/candidatures/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_eco_job_recruteur_candidature_detail;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_recruteur_candidature_detail')), array (  '_controller' => 'EcoJob\\RecruteurBundle\\Controller\\RecruteurController::candidatureDetailAction',));
            }
            not_eco_job_recruteur_candidature_detail:

            // eco_job_recruteur_banquecv
            if ($pathinfo === '/recruteur/banquecv') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_eco_job_recruteur_banquecv;
                }

                return array (  '_controller' => 'EcoJob\\RecruteurBundle\\Controller\\RecruteurController::banquecvAction',  '_route' => 'eco_job_recruteur_banquecv',);
            }
            not_eco_job_recruteur_banquecv:

        }

        if (0 === strpos($pathinfo, '/candidat')) {
            // eco_job_candidat_index
            if (rtrim($pathinfo, '/') === '/candidat') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_eco_job_candidat_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'eco_job_candidat_index');
                }

                return array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::indexAction',  '_route' => 'eco_job_candidat_index',);
            }
            not_eco_job_candidat_index:

            if (0 === strpos($pathinfo, '/candidat/cv')) {
                // eco_job_candidat_cv_fill
                if ($pathinfo === '/candidat/cv/fill') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_candidat_cv_fill;
                    }

                    return array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::FillAction',  '_route' => 'eco_job_candidat_cv_fill',);
                }
                not_eco_job_candidat_cv_fill:

                // eco_job_candidat_cv_show
                if ($pathinfo === '/candidat/cv/show') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_candidat_cv_show;
                    }

                    return array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::ShowAction',  '_route' => 'eco_job_candidat_cv_show',);
                }
                not_eco_job_candidat_cv_show:

                // eco_job_candidat_cv_edit
                if ($pathinfo === '/candidat/cv/edit') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_candidat_cv_edit;
                    }

                    return array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::EditAction',  '_route' => 'eco_job_candidat_cv_edit',);
                }
                not_eco_job_candidat_cv_edit:

                // eco_job_candidat_cv_delete
                if ($pathinfo === '/candidat/cv/delete') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_candidat_cv_delete;
                    }

                    return array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::DeleteAction',  '_route' => 'eco_job_candidat_cv_delete',);
                }
                not_eco_job_candidat_cv_delete:

            }

            if (0 === strpos($pathinfo, '/candidat/offre')) {
                // eco_job_candidat_offre
                if (preg_match('#^/candidat/offre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_candidat_offre;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_candidat_offre')), array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::showOffreAction',));
                }
                not_eco_job_candidat_offre:

                // eco_job_candidat_offre_postuler
                if (preg_match('#^/candidat/offre/(?P<id>[^/]++)/postuler$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_candidat_offre_postuler;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_candidat_offre_postuler')), array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::postulerOffreAction',));
                }
                not_eco_job_candidat_offre_postuler:

                // eco_job_candidat_offre_save
                if (preg_match('#^/candidat/offre/(?P<id>[^/]++)/save$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_candidat_offre_save;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_candidat_offre_save')), array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::saveAction',));
                }
                not_eco_job_candidat_offre_save:

                // eco_job_candidat_offre_delete
                if (preg_match('#^/candidat/offre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_candidat_offre_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_candidat_offre_delete')), array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::deleteOffreAction',));
                }
                not_eco_job_candidat_offre_delete:

                if (0 === strpos($pathinfo, '/candidat/offres')) {
                    // eco_job_candidat_myoffres
                    if ($pathinfo === '/candidat/offres/get') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_eco_job_candidat_myoffres;
                        }

                        return array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::myOffresAction',  '_route' => 'eco_job_candidat_myoffres',);
                    }
                    not_eco_job_candidat_myoffres:

                    // eco_job_offres
                    if ($pathinfo === '/candidat/offres') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_eco_job_offres;
                        }

                        return array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::mapAction',  '_route' => 'eco_job_offres',);
                    }
                    not_eco_job_offres:

                }

                // eco_job_candidat_offre_details_2
                if (0 === strpos($pathinfo, '/candidat/offre/details') && preg_match('#^/candidat/offre/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_candidat_offre_details_2;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_candidat_offre_details_2')), array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::detailsOffre2Action',));
                }
                not_eco_job_candidat_offre_details_2:

            }

            // eco_job_candidat_param
            if ($pathinfo === '/candidat/compte/parametre') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_eco_job_candidat_param;
                }

                return array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::ParamAction',  '_route' => 'eco_job_candidat_param',);
            }
            not_eco_job_candidat_param:

            // eco_job_candidat_alert_mail
            if ($pathinfo === '/candidat/alert_mail') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_eco_job_candidat_alert_mail;
                }

                return array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::alertMailAction',  '_route' => 'eco_job_candidat_alert_mail',);
            }
            not_eco_job_candidat_alert_mail:

            // eco_job_candidat_uploadcv
            if ($pathinfo === '/candidat/upload/cv') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_eco_job_candidat_uploadcv;
                }

                return array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::uploadCVAction',  '_route' => 'eco_job_candidat_uploadcv',);
            }
            not_eco_job_candidat_uploadcv:

            if (0 === strpos($pathinfo, '/candidat/offres/postules')) {
                // eco_job_candidat_postuled_offres
                if ($pathinfo === '/candidat/offres/postules') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_candidat_postuled_offres;
                    }

                    return array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::postuledOffresAction',  '_route' => 'eco_job_candidat_postuled_offres',);
                }
                not_eco_job_candidat_postuled_offres:

                // eco_job_candidat_cancel_postuled
                if (preg_match('#^/candidat/offres/postules/(?P<id>[^/]++)/annuler$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_candidat_cancel_postuled;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_candidat_cancel_postuled')), array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::cancelPosulationAction',));
                }
                not_eco_job_candidat_cancel_postuled:

            }

            // eco_job_candidat_reset_param
            if ($pathinfo === '/candidat/compte/parametre/reset') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_eco_job_candidat_reset_param;
                }

                return array (  '_controller' => 'EcoJob\\CandidatBundle\\Controller\\CandidatController::ResetParamAction',  '_route' => 'eco_job_candidat_reset_param',);
            }
            not_eco_job_candidat_reset_param:

        }

        // eco_job_main_index
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_eco_job_main_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'eco_job_main_index');
            }

            return array (  '_controller' => 'EcoJob\\MainBundle\\Controller\\MainController::indexAction',  '_route' => 'eco_job_main_index',);
        }
        not_eco_job_main_index:

        if (0 === strpos($pathinfo, '/user/candidat')) {
            // _index
            if (rtrim($pathinfo, '/') === '/user/candidat') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_index');
                }

                return array (  '_controller' => 'EcoJob\\UserBundle\\Controller\\CandidatController::indexAction',  '_route' => '_index',);
            }
            not__index:

            // _show
            if (preg_match('#^/user/candidat/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_show')), array (  '_controller' => 'EcoJob\\UserBundle\\Controller\\CandidatController::showAction',));
            }
            not__show:

            // _new
            if ($pathinfo === '/user/candidat/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not__new;
                }

                return array (  '_controller' => 'EcoJob\\UserBundle\\Controller\\CandidatController::newAction',  '_route' => '_new',);
            }
            not__new:

            // _edit
            if (preg_match('#^/user/candidat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not__edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_edit')), array (  '_controller' => 'EcoJob\\UserBundle\\Controller\\CandidatController::editAction',));
            }
            not__edit:

            // _delete
            if (preg_match('#^/user/candidat/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not__delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_delete')), array (  '_controller' => 'EcoJob\\UserBundle\\Controller\\CandidatController::deleteAction',));
            }
            not__delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // eco_job_admin_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_eco_job_admin_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'eco_job_admin_index');
                }

                return array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'eco_job_admin_index',);
            }
            not_eco_job_admin_index:

            if (0 === strpos($pathinfo, '/admin/users')) {
                // eco_job_admin_users
                if ($pathinfo === '/admin/users/list') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_admin_users;
                    }

                    return array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::getUsersAction',  '_route' => 'eco_job_admin_users',);
                }
                not_eco_job_admin_users:

                // eco_job_admin_candidat_cv
                if (0 === strpos($pathinfo, '/admin/users/cv') && preg_match('#^/admin/users/cv/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_admin_candidat_cv;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_admin_candidat_cv')), array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::showCVAction',));
                }
                not_eco_job_admin_candidat_cv:

                if (0 === strpos($pathinfo, '/admin/users/offre')) {
                    // eco_job_admin_recruteur_offres
                    if (0 === strpos($pathinfo, '/admin/users/offres') && preg_match('#^/admin/users/offres/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_eco_job_admin_recruteur_offres;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_admin_recruteur_offres')), array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::showOffresAction',));
                    }
                    not_eco_job_admin_recruteur_offres:

                    // eco_job_admin_recruteur_offre
                    if (preg_match('#^/admin/users/offre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_eco_job_admin_recruteur_offre;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_admin_recruteur_offre')), array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::showOffreAction',));
                    }
                    not_eco_job_admin_recruteur_offre:

                }

                // eco_job_admin_user_delete
                if (0 === strpos($pathinfo, '/admin/users/delete') && preg_match('#^/admin/users/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_admin_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_admin_user_delete')), array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::deleteAction',));
                }
                not_eco_job_admin_user_delete:

                if (0 === strpos($pathinfo, '/admin/users/offre')) {
                    // eco_job_admin_recruteur_offre_delete
                    if (preg_match('#^/admin/users/offre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_eco_job_admin_recruteur_offre_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_admin_recruteur_offre_delete')), array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::deleteOffreAction',));
                    }
                    not_eco_job_admin_recruteur_offre_delete:

                    // eco_job_admin_recruteur_offre_valider
                    if (preg_match('#^/admin/users/offre/(?P<id>[^/]++)/valider$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_eco_job_admin_recruteur_offre_valider;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_admin_recruteur_offre_valider')), array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::valideOffreAction',));
                    }
                    not_eco_job_admin_recruteur_offre_valider:

                }

            }

            if (0 === strpos($pathinfo, '/admin/offre')) {
                // eco_job_admin_offres_all
                if ($pathinfo === '/admin/offres/all-without-exception') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_admin_offres_all;
                    }

                    return array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::getOffreAllAction',  '_route' => 'eco_job_admin_offres_all',);
                }
                not_eco_job_admin_offres_all:

                // eco_job_admin_offre_delete_ajax
                if (preg_match('#^/admin/offre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_admin_offre_delete_ajax;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_admin_offre_delete_ajax')), array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::deleteOffreAjaxAction',));
                }
                not_eco_job_admin_offre_delete_ajax:

                // eco_job_admin_offres
                if ($pathinfo === '/admin/offres/list') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_admin_offres;
                    }

                    return array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::getOffreNewsAction',  '_route' => 'eco_job_admin_offres',);
                }
                not_eco_job_admin_offres:

            }

            if (0 === strpos($pathinfo, '/admin/users')) {
                // eco_job_admin_users_dashoard
                if ($pathinfo === '/admin/users') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_admin_users_dashoard;
                    }

                    return array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::usersAction',  '_route' => 'eco_job_admin_users_dashoard',);
                }
                not_eco_job_admin_users_dashoard:

                // eco_job_admin_users_delete_existing
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_admin_users_delete_existing;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_admin_users_delete_existing')), array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::supprAction',));
                }
                not_eco_job_admin_users_delete_existing:

                // eco_job_admin_showuser
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_admin_showuser;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_admin_showuser')), array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::showuserAction',));
                }
                not_eco_job_admin_showuser:

            }

            if (0 === strpos($pathinfo, '/admin/offre')) {
                // eco_job_admin_offres_categorie
                if ($pathinfo === '/admin/offres/categorie') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eco_job_admin_offres_categorie;
                    }

                    return array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::offreCategorieAction',  '_route' => 'eco_job_admin_offres_categorie',);
                }
                not_eco_job_admin_offres_categorie:

                // eco_job_admin_suspendre
                if (preg_match('#^/admin/offre/(?P<id>[^/]++)/suspendre$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_admin_suspendre;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_admin_suspendre')), array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::suspendreOffreAction',));
                }
                not_eco_job_admin_suspendre:

                // eco_job_admin_republier
                if (preg_match('#^/admin/offre/(?P<id>[^/]++)/republier$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_admin_republier;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_admin_republier')), array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::republierAction',));
                }
                not_eco_job_admin_republier:

                // eco_job_admin_suspendre_all
                if ($pathinfo === '/admin/offre/suspendre') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_admin_suspendre_all;
                    }

                    return array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::suspendreAllOffreAction',  '_route' => 'eco_job_admin_suspendre_all',);
                }
                not_eco_job_admin_suspendre_all:

                // eco_job_admin_offres_expirer
                if ($pathinfo === '/admin/offre/exprired') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_admin_offres_expirer;
                    }

                    return array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::expriredOffreAction',  '_route' => 'eco_job_admin_offres_expirer',);
                }
                not_eco_job_admin_offres_expirer:

                // eco_job_admin_categorie_delete
                if (0 === strpos($pathinfo, '/admin/offre/categorie') && preg_match('#^/admin/offre/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_admin_categorie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_admin_categorie_delete')), array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::deleteCategorieAction',));
                }
                not_eco_job_admin_categorie_delete:

            }

            // eco_job_admin_recruteur_offre_valider_edit
            if (0 === strpos($pathinfo, '/admin/users/offre') && preg_match('#^/admin/users/offre/(?P<id>[^/]++)/valider/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_eco_job_admin_recruteur_offre_valider_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_admin_recruteur_offre_valider_edit')), array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::valideEditOffreAction',));
            }
            not_eco_job_admin_recruteur_offre_valider_edit:

            // eco_job_admin_offres_edited
            if ($pathinfo === '/admin/offres/list/edited') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_eco_job_admin_offres_edited;
                }

                return array (  '_controller' => 'EcoJob\\AdminBundle\\Controller\\AdminController::getOffreEditedAction',  '_route' => 'eco_job_admin_offres_edited',);
            }
            not_eco_job_admin_offres_edited:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
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

                    return array (  '_controller' => 'EcoJob\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'EcoJob\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'EcoJob\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'EcoJob\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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

                    return array (  '_controller' => 'EcoJob\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'EcoJob\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'EcoJob\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'EcoJob\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/register')) {
            // recruteur_registration
            if ($pathinfo === '/register/recruteur') {
                return array (  '_controller' => 'EcoJobUserBundle:RegistrationRecruteur:register',  '_route' => 'recruteur_registration',);
            }

            // candidat_registration
            if ($pathinfo === '/register/candidat') {
                return array (  '_controller' => 'EcoJobUserBundle:RegistrationCandidat:register',  '_route' => 'candidat_registration',);
            }

        }

        if (0 === strpos($pathinfo, '/captcha-')) {
            if (0 === strpos($pathinfo, '/captcha-resource')) {
                // captcha_resource
                if (preg_match('#^/captcha\\-resource(?:/(?P<filename>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_captcha_resource;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'captcha_resource')), array (  '_controller' => 'Captcha\\Bundle\\CaptchaBundle\\Controller\\CaptchaResourceController::indexAction',  'filename' => 'none',));
                }
                not_captcha_resource:

                // captcha_layout_stylesheet_url
                if ($pathinfo === '/captcha-resource/bdc-layout-stylesheet.css') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_captcha_layout_stylesheet_url;
                    }

                    return array (  '_controller' => 'Captcha\\Bundle\\CaptchaBundle\\Controller\\CaptchaResourceController::indexAction',  'filename' => 'bdc-layout-stylesheet.css',  '_route' => 'captcha_layout_stylesheet_url',);
                }
                not_captcha_layout_stylesheet_url:

            }

            // captcha_handler
            if ($pathinfo === '/captcha-handler') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_captcha_handler;
                }

                return array (  '_controller' => 'Captcha\\Bundle\\CaptchaBundle\\Controller\\CaptchaHandlerController::indexAction',  '_route' => 'captcha_handler',);
            }
            not_captcha_handler:

        }

        // user_registration_resend_confirm
        if ($pathinfo === '/register/resend-confirm') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_user_registration_resend_confirm;
            }

            return array (  '_controller' => 'EcoJob\\UserBundle\\Controller\\RegistrationController::resendConfirmAction',  '_route' => 'user_registration_resend_confirm',);
        }
        not_user_registration_resend_confirm:

        if (0 === strpos($pathinfo, '/message')) {
            if (0 === strpos($pathinfo, '/messages')) {
                // fos_message_inbox
                if (rtrim($pathinfo, '/') === '/messages') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_message_inbox');
                    }

                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::inboxAction',  '_route' => 'fos_message_inbox',);
                }

                // fos_message_sent
                if ($pathinfo === '/messages/sent') {
                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::sentAction',  '_route' => 'fos_message_sent',);
                }

                // fos_message_deleted
                if ($pathinfo === '/messages/deleted') {
                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deletedAction',  '_route' => 'fos_message_deleted',);
                }

                // fos_message_search
                if ($pathinfo === '/messages/search') {
                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::searchAction',  '_route' => 'fos_message_search',);
                }

                // fos_message_thread_new
                if ($pathinfo === '/messages/new') {
                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::newThreadAction',  '_route' => 'fos_message_thread_new',);
                }

                // fos_message_thread_delete
                if (preg_match('#^/messages/(?P<threadId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_fos_message_thread_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_delete')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deleteAction',));
                }
                not_fos_message_thread_delete:

                // fos_message_thread_undelete
                if (preg_match('#^/messages/(?P<threadId>[^/]++)/undelete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_message_thread_undelete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_undelete')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::undeleteAction',));
                }
                not_fos_message_thread_undelete:

                // fos_message_thread_view
                if (preg_match('#^/messages/(?P<threadId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_view')), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::threadAction',));
                }

            }

            if (0 === strpos($pathinfo, '/messagerie')) {
                // eco_job_messagerie_messages
                if ($pathinfo === '/messagerie/messages') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_messagerie_messages;
                    }

                    return array (  '_controller' => 'EcoJob\\MessagerieBundle\\Controller\\MessagerieController::indexAction',  '_route' => 'eco_job_messagerie_messages',);
                }
                not_eco_job_messagerie_messages:

                // eco_job_messagerie_inbox
                if ($pathinfo === '/messagerie/inbox') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_messagerie_inbox;
                    }

                    return array (  '_controller' => 'EcoJob\\MessagerieBundle\\Controller\\MessagerieController::inboxAction',  '_route' => 'eco_job_messagerie_inbox',);
                }
                not_eco_job_messagerie_inbox:

                // eco_job_messagerie_sent
                if ($pathinfo === '/messagerie/sent') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_messagerie_sent;
                    }

                    return array (  '_controller' => 'EcoJob\\MessagerieBundle\\Controller\\MessagerieController::sentAction',  '_route' => 'eco_job_messagerie_sent',);
                }
                not_eco_job_messagerie_sent:

                // eco_job_messagerie_deleted
                if ($pathinfo === '/messagerie/deleted') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_messagerie_deleted;
                    }

                    return array (  '_controller' => 'EcoJob\\MessagerieBundle\\Controller\\MessagerieController::deletedAction',  '_route' => 'eco_job_messagerie_deleted',);
                }
                not_eco_job_messagerie_deleted:

                // eco_job_messagerie_thread
                if ($pathinfo === '/messagerie/thread') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_messagerie_thread;
                    }

                    return array (  '_controller' => 'EcoJob\\MessagerieBundle\\Controller\\MessagerieController::threadAction',  '_route' => 'eco_job_messagerie_thread',);
                }
                not_eco_job_messagerie_thread:

                // eco_job_messagerie_newThread
                if ($pathinfo === '/messagerie/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eco_job_messagerie_newThread;
                    }

                    return array (  '_controller' => 'EcoJob\\MessagerieBundle\\Controller\\MessagerieController::newThreadAction',  '_route' => 'eco_job_messagerie_newThread',);
                }
                not_eco_job_messagerie_newThread:

                // eco_job_messagerie_delete
                if (preg_match('#^/messagerie/(?P<threadId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET ', ' DELETE'))) {
                        $allow = array_merge($allow, array('GET ', ' DELETE'));
                        goto not_eco_job_messagerie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_messagerie_delete')), array (  '_controller' => 'EcoJob\\MessagerieBundle\\Controller\\MessagerieController::deleteAction',));
                }
                not_eco_job_messagerie_delete:

                // eco_job_messagerie_undelete
                if (preg_match('#^/messagerie/(?P<threadId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET ', ' DELETE'))) {
                        $allow = array_merge($allow, array('GET ', ' DELETE'));
                        goto not_eco_job_messagerie_undelete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_job_messagerie_undelete')), array (  '_controller' => 'EcoJob\\MessagerieBundle\\Controller\\MessagerieController::undeleteAction',));
                }
                not_eco_job_messagerie_undelete:

                // eco_job_messagerie_search
                if ($pathinfo === '/messagerie/search') {
                    if (!in_array($this->context->getMethod(), array('GET ', ' DELETE'))) {
                        $allow = array_merge($allow, array('GET ', ' DELETE'));
                        goto not_eco_job_messagerie_search;
                    }

                    return array (  '_controller' => 'EcoJob\\MessagerieBundle\\Controller\\MessagerieController::searchAction',  '_route' => 'eco_job_messagerie_search',);
                }
                not_eco_job_messagerie_search:

            }

        }

        if (0 === strpos($pathinfo, '/console')) {
            // console
            if (rtrim($pathinfo, '/') === '/console') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'console');
                }

                return array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (preg_match('#^/console(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'CoreSphere\\ConsoleBundle\\Controller\\ConsoleController::execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
