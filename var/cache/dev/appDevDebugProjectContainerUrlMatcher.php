<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/new')) {
            // new_person
            if ('/new' === $pathinfo) {
                $ret = array (  '_controller' => 'ContactBundle\\Controller\\PersonController::newPersonGetAction',  '_route' => 'new_person',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_new_person;
                }

                return $ret;
            }
            not_new_person:

            // contact_person_newpersonpost
            if ('/new' === $pathinfo) {
                $ret = array (  '_controller' => 'ContactBundle\\Controller\\PersonController::newPersonPostAction',  '_route' => 'contact_person_newpersonpost',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_contact_person_newpersonpost;
                }

                return $ret;
            }
            not_contact_person_newpersonpost:

        }

        // edit
        if (preg_match('#^/(?P<id>[^/]++)/modify$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'edit')), array (  '_controller' => 'ContactBundle\\Controller\\PersonController::modifyPersonGetAction',));
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_edit;
            }

            return $ret;
        }
        not_edit:

        // address_edit
        if (preg_match('#^/(?P<id>[^/]++)/modify_address$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'address_edit')), array (  '_controller' => 'ContactBundle\\Controller\\PersonController::modifyAddressGetAction',));
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_address_edit;
            }

            return $ret;
        }
        not_address_edit:

        // email_edit
        if (preg_match('#^/(?P<id>[^/]++)/modify_email$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'email_edit')), array (  '_controller' => 'ContactBundle\\Controller\\PersonController::modifyEmailGetAction',));
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_email_edit;
            }

            return $ret;
        }
        not_email_edit:

        // phone_edit
        if (preg_match('#^/(?P<id>[^/]++)/modify_phone$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'phone_edit')), array (  '_controller' => 'ContactBundle\\Controller\\PersonController::modifyPhoneGetAction',));
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_phone_edit;
            }

            return $ret;
        }
        not_phone_edit:

        // modifyPost
        if (preg_match('#^/(?P<id>[^/]++)/modify$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'modifyPost')), array (  '_controller' => 'ContactBundle\\Controller\\PersonController::modifyPersonPostAction',));
            if (!in_array($requestMethod, array('POST'))) {
                $allow = array_merge($allow, array('POST'));
                goto not_modifyPost;
            }

            return $ret;
        }
        not_modifyPost:

        // modify_address_post
        if (preg_match('#^/(?P<id>[^/]++)/modify_address$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'modify_address_post')), array (  '_controller' => 'ContactBundle\\Controller\\PersonController::modifyAddressPostAction',));
            if (!in_array($requestMethod, array('POST'))) {
                $allow = array_merge($allow, array('POST'));
                goto not_modify_address_post;
            }

            return $ret;
        }
        not_modify_address_post:

        // modify_email_post
        if (preg_match('#^/(?P<id>[^/]++)/modify_email$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'modify_email_post')), array (  '_controller' => 'ContactBundle\\Controller\\PersonController::modifyEmailPostAction',));
            if (!in_array($requestMethod, array('POST'))) {
                $allow = array_merge($allow, array('POST'));
                goto not_modify_email_post;
            }

            return $ret;
        }
        not_modify_email_post:

        // modify_phone_post
        if (preg_match('#^/(?P<id>[^/]++)/modify_phone$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'modify_phone_post')), array (  '_controller' => 'ContactBundle\\Controller\\PersonController::modifyPhonePostAction',));
            if (!in_array($requestMethod, array('POST'))) {
                $allow = array_merge($allow, array('POST'));
                goto not_modify_phone_post;
            }

            return $ret;
        }
        not_modify_phone_post:

        // delete
        if (preg_match('#^/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'ContactBundle\\Controller\\PersonController::deletePersonAction',));
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_delete;
            }

            return $ret;
        }
        not_delete:

        // profile
        if (preg_match('#^/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'profile')), array (  '_controller' => 'ContactBundle\\Controller\\PersonController::showPersonAction',));
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_profile;
            }

            return $ret;
        }
        not_profile:

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ContactBundle\\Controller\\PersonController::showAllPeople',  '_route' => 'home',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_home;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_home;
            }

            return $ret;
        }
        not_home:

        // groups
        if ('/groups' === $pathinfo) {
            $ret = array (  '_controller' => 'ContactBundle\\Controller\\PersonController::showAllGroups',  '_route' => 'groups',);
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_groups;
            }

            return $ret;
        }
        not_groups:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
