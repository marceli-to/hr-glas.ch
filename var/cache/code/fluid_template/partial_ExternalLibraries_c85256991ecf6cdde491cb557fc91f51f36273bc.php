<?php

class partial_ExternalLibraries_c85256991ecf6cdde491cb557fc91f51f36273bc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'dce' => 
  array (
    0 => 'T3\\Dce\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<div class="panel panel-default">
    <div class="panel-body panel-body-highlightlinks">
        <h2 class="h3">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'LLL:EXT:about/Resources/Private/Language/Modules/about.xlf:external_libraries';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
        </h2>
        <p>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$arguments3['key'] = 'LLL:EXT:about/Resources/Private/Language/Modules/about.xlf:external_thanks';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '
        </p>
    </div>
    <table class="table panel-table">
        <tr>
            <td>Composer</td>
            <td><a href="https://getcomposer.org" target="_blank" rel="noreferrer">getcomposer.org</a></td>
        </tr>
        <tr>
            <td>jQuery</td>
            <td><a href="https://jquery.com" target="_blank" rel="noreferrer">jquery.com</a></td>
        </tr>
        <tr>
            <td>Twitter Bootstrap</td>
            <td><a href="https://getbootstrap.com" target="_blank" rel="noreferrer">getbootstrap.com</a></td>
        </tr>
        <tr>
            <td>Doctrine Project (DBAL Component and Instantiator)</td>
            <td><a href="https://www.doctrine-project.org/projects/dbal.html" target="_blank" rel="noreferrer">doctrine-project.org</a></td>
        </tr>
        <tr>
            <td>Symfony Framework Component: Config</td>
            <td><a href="https://symfony.com/doc/current/components/config.html" target="_blank" rel="noreferrer">symfony.com</a></td>
        </tr>
        <tr>
            <td>Symfony Framework Component: Console</td>
            <td><a href="https://symfony.com/doc/current/components/console.html" target="_blank" rel="noreferrer">symfony.com</a></td>
        </tr>
        <tr>
            <td>Symfony Framework Component: DependencyInjection</td>
            <td><a href="https://symfony.com/doc/current/components/dependency_injection.html" target="_blank" rel="noreferrer">symfony.com</a></td>
        </tr>
        <tr>
            <td>Symfony Framework Component: ExpressionLanguage</td>
            <td><a href="https://symfony.com/doc/current/components/expression_language.html" target="_blank" rel="noreferrer">symfony.com</a></td>
        </tr>
        <tr>
            <td>Symfony Framework Component: Finder</td>
            <td><a href="https://symfony.com/doc/current/components/finder.html" target="_blank" rel="noreferrer">symfony.com</a></td>
        </tr>
        <tr>
            <td>Symfony Framework Component: Mailer</td>
            <td><a href="https://symfony.com/doc/current/components/mailer.html" target="_blank" rel="noreferrer">symfony.com</a></td>
        </tr>
        <tr>
            <td>Symfony Framework Component: Mime</td>
            <td><a href="https://symfony.com/doc/current/components/mime.html" target="_blank" rel="noreferrer">symfony.com</a></td>
        </tr>
        <tr>
            <td>Symfony Framework Component: PropertyAccess</td>
            <td><a href="https://symfony.com/doc/current/components/property_access.html" target="_blank" rel="noreferrer">symfony.com</a></td>
        </tr>
        <tr>
            <td>Symfony Framework Component: PropertyInfo</td>
            <td><a href="https://symfony.com/doc/current/components/property_info.html" target="_blank" rel="noreferrer">symfony.com</a></td>
        </tr>
        <tr>
            <td>Symfony Framework Component: Routing</td>
            <td><a href="https://symfony.com/doc/current/components/routing.html" target="_blank" rel="noreferrer">symfony.com</a></td>
        </tr>
        <tr>
            <td>Symfony Framework Component: YAML</td>
            <td><a href="https://symfony.com/doc/current/components/yaml.html" target="_blank" rel="noreferrer">symfony.com</a></td>
        </tr>
        <tr>
            <td>Guzzle PHP</td>
            <td><a href="http://guzzlephp.org" target="_blank" rel="noreferrer">guzzlephp.org</a></td>
        </tr>
        <tr>
            <td>d3 Data Driven Documents</td>
            <td><a href="https://d3js.org" target="_blank" rel="noreferrer">d3js.org</a></td>
        </tr>
        <tr>
            <td>CKEditor</td>
            <td><a href="https://ckeditor.com" target="_blank" rel="noreferrer">ckeditor.com</a></td>
        </tr>
        <tr>
            <td>RequireJS</td>
            <td><a href="https://requirejs.org" target="_blank" rel="noreferrer">requirejs.org</a></td>
        </tr>
        <tr>
            <td>moment.js</td>
            <td><a href="https://momentjs.com" target="_blank" rel="noreferrer">momentjs.com</a></td>
        </tr>
        <tr>
            <td>NProgress</td>
            <td><a href="https://ricostacruz.com/nprogress/" target="_blank" rel="noreferrer">ricostacruz.com</a></td>
        </tr>
        <tr>
            <td>Autosize</td>
            <td><a href="https://www.jacklmoore.com/autosize/" target="_blank" rel="noreferrer">jacklmoore.com</a></td>
        </tr>
        <tr>
            <td>Cropper.js</td>
            <td><a href="https://fengyuanchen.github.io/cropper/" target="_blank" rel="noreferrer">fengyuanchen.github.io</a></td>
        </tr>
        <tr>
            <td>ImagesLoaded</td>
            <td><a href="https://imagesloaded.desandro.com" target="_blank" rel="noreferrer">imagesloaded.desandro.com</a></td>
        </tr>
        <tr>
            <td>jQuery UI</td>
            <td><a href="https://jqueryui.com" target="_blank" rel="noreferrer">jqueryui.com</a></td>
        </tr>
        <tr>
            <td>Twitter Bootstrap Plugin: DateTimePicker</td>
            <td><a href="https://eonasdan.github.io/bootstrap-datetimepicker/" target="_blank" rel="noreferrer">eonasdan.github.io</a></td>
        </tr>
        <tr>
            <td>jQuery Plugin: Ajax AutoComplete</td>
            <td><a href="https://www.devbridge.com/sourcery/components/jquery-autocomplete/" target="_blank" rel="noreferrer">devbridge.com</a></td>
        </tr>
        <tr>
            <td>Tablesort</td>
            <td><a href="http://tristen.ca/tablesort/demo/" target="_blank" rel="noreferrer">tristen.ca</a></td>
        </tr>
        <tr>
            <td>jQuery Plugin: MiniColors</td>
            <td><a href="https://labs.abeautifulsite.net/jquery-minicolors/" target="_blank" rel="noreferrer">labs.abeautifulsite.net</a></td>
        </tr>
        <tr>
            <td>jQuery Plugin: Tab Override</td>
            <td><a href="https://wjbryant.github.io/taboverride/" target="_blank" rel="noreferrer">wjbryant.github.io</a></td>
        </tr>
        <tr>
            <td>Neos (Form component)</td>
            <td><a href="https://www.neos.io" target="_blank" rel="noreferrer">neos.io</a></td>
        </tr>
        <tr>
            <td>FineDiff</td>
            <td><a href="https://github.com/lolli42/FineDiff" target="_blank" rel="noreferrer">github.com</a></td>
        </tr>
        <tr>
            <td>IDNA Convert</td>
            <td><a href="https://idnaconv.net" target="_blank" rel="noreferrer">idnaconv.net</a></td>
        </tr>
        <tr>
            <td>CodeMirror</td>
            <td><a href="https://codemirror.net" target="_blank" rel="noreferrer">codemirror.net</a></td>
        </tr>
        <tr>
            <td>Muuri</td>
            <td><a href="https://haltu.github.io/muuri/" target="_blank" rel="noreferrer">haltu.github.io</a></td>
        </tr>
    </table>
</div>
';

return $output0;
}


}
#