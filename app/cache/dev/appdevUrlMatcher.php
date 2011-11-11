<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // MereFaithRBWordsBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'MereFaithRBWordsBundle_homepage');
            }
            return array (  '_controller' => 'MereFaith\\RBWordsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'MereFaithRBWordsBundle_homepage',);
        }

        // MereFaithRBWordsBundle_preacher
        if ($pathinfo === '/preacher') {
            return array (  '_controller' => 'MereFaith\\RBWordsBundle\\Controller\\DefaultController::preacherAction',  '_route' => 'MereFaithRBWordsBundle_preacher',);
        }

        // MereFaithRBWordsBundle_retreats
        if ($pathinfo === '/retreats') {
            return array (  '_controller' => 'MereFaith\\RBWordsBundle\\Controller\\DefaultController::retreatsAction',  '_route' => 'MereFaithRBWordsBundle_retreats',);
        }

        // MereFaithRBWordsBundle_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'MereFaith\\RBWordsBundle\\Controller\\DefaultController::contactAction',  '_route' => 'MereFaithRBWordsBundle_contact',);
        }

        // MereFaithRBWordsBundle_wttw
        if ($pathinfo === '/wttw') {
            return array (  '_controller' => 'MereFaith\\RBWordsBundle\\Controller\\WTTWController::indexAction',  '_route' => 'MereFaithRBWordsBundle_wttw',);
        }

        // MereFaithRBWordsBundle_lectionary
        if ($pathinfo === '/wttw/lectionary') {
            return array (  '_controller' => 'MereFaith\\RBWordsBundle\\Controller\\WTTWController::lectionaryAction',  '_route' => 'MereFaithRBWordsBundle_lectionary',);
        }

        // MereFaithRBWordsBundle_rbwords
        if ($pathinfo === '/rbwords') {
            return array (  '_controller' => 'MereFaith\\RBWordsBundle\\Controller\\RBWordsController::indexAction',  '_route' => 'MereFaithRBWordsBundle_rbwords',);
        }

        // MereFaithRBWordsBundle_reflections
        if ($pathinfo === '/reflections') {
            return array (  '_controller' => 'MereFaith\\RBWordsBundle\\Controller\\ReflectionsController::indexAction',  '_route' => 'MereFaithRBWordsBundle_reflections',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
