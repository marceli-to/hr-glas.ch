<?php

class source_1868e978aa691a45883c47e546341a6fdae2e8bd_Standard_t3___file_uid_23_html extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
<section class="content-section" data-reveal>
  <article class="content-heading">
    <h2>';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.title', $array1)]);

$output0 .= '</h2>
  </article>
  <div class="teaser-boxes grid-teaser">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
	    <figure class="teaser-box teaser-box--image">
		    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
		    	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['additionalAttributes'] = NULL;
$arguments15['data'] = NULL;
$arguments15['aria'] = NULL;
$arguments15['class'] = NULL;
$arguments15['dir'] = NULL;
$arguments15['id'] = NULL;
$arguments15['lang'] = NULL;
$arguments15['style'] = NULL;
$arguments15['title'] = NULL;
$arguments15['accesskey'] = NULL;
$arguments15['tabindex'] = NULL;
$arguments15['onclick'] = NULL;
$arguments15['alt'] = NULL;
$arguments15['ismap'] = NULL;
$arguments15['longdesc'] = NULL;
$arguments15['usemap'] = NULL;
$arguments15['loading'] = NULL;
$arguments15['src'] = '';
$arguments15['treatIdAsReference'] = false;
$arguments15['image'] = NULL;
$arguments15['crop'] = NULL;
$arguments15['cropVariant'] = 'default';
$arguments15['fileExtension'] = NULL;
$arguments15['width'] = NULL;
$arguments15['height'] = NULL;
$arguments15['minWidth'] = NULL;
$arguments15['minHeight'] = NULL;
$arguments15['maxWidth'] = NULL;
$arguments15['maxHeight'] = NULL;
$arguments15['absolute'] = false;
$array17 = array (
);$arguments15['image'] = $renderingContext->getVariableProvider()->getByPath('img', $array17);
$array18 = array (
);$arguments15['alt'] = $renderingContext->getVariableProvider()->getByPath('teaser.title', $array18);
$arguments15['width'] = '700c';
$arguments15['height'] = '700c';

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
				';
return $output14;
};
$arguments11 = array();
$arguments11['each'] = NULL;
$arguments11['as'] = NULL;
$arguments11['key'] = NULL;
$arguments11['reverse'] = false;
$arguments11['iteration'] = NULL;
$array13 = array (
);$arguments11['each'] = $renderingContext->getVariableProvider()->getByPath('teaser.image', $array13);
$arguments11['as'] = 'img';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '	    
				<figcaption>
					<h3>';
$array19 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('teaser.title', $array19)]);

$output10 .= '</h3>
				</figcaption>
		    ';
return $output10;
};
$arguments6 = array();
$arguments6['parameter'] = NULL;
$arguments6['target'] = '';
$arguments6['class'] = '';
$arguments6['title'] = '';
$arguments6['language'] = NULL;
$arguments6['additionalParams'] = '';
$arguments6['additionalAttributes'] = array (
);
$arguments6['useCacheHash'] = NULL;
$arguments6['addQueryString'] = false;
$arguments6['addQueryStringMethod'] = 'GET';
$arguments6['addQueryStringExclude'] = '';
$arguments6['absolute'] = false;
$arguments6['parts-as'] = 'typoLinkParts';
$array8 = array (
);$arguments6['parameter'] = $renderingContext->getVariableProvider()->getByPath('teaser.link', $array8);
$array9 = array (
);$arguments6['title'] = $renderingContext->getVariableProvider()->getByPath('teaser.title', $array9);

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
	    </figure>
	';
return $output5;
};
$arguments2 = array();
$arguments2['each'] = NULL;
$arguments2['as'] = NULL;
$arguments2['key'] = NULL;
$arguments2['reverse'] = false;
$arguments2['iteration'] = NULL;
$array4 = array (
);$arguments2['each'] = $renderingContext->getVariableProvider()->getByPath('field.teasers', $array4);
$arguments2['as'] = 'teaser';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
  </div>
</section> ';

return $output0;
}


}
#