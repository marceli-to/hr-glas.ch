<?php

class source_f8d96a119419871031474880dd248fe697a9bc82_Standard_t3___file_uid_15_html extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
	<div class="visual" style="background-image: url(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['src'] = '';
$arguments5['treatIdAsReference'] = false;
$arguments5['image'] = NULL;
$arguments5['crop'] = NULL;
$arguments5['cropVariant'] = 'default';
$arguments5['fileExtension'] = NULL;
$arguments5['width'] = NULL;
$arguments5['height'] = NULL;
$arguments5['minWidth'] = NULL;
$arguments5['minHeight'] = NULL;
$arguments5['maxWidth'] = NULL;
$arguments5['maxHeight'] = NULL;
$arguments5['absolute'] = false;
$array7 = array (
);$arguments5['src'] = $renderingContext->getVariableProvider()->getByPath('img.uid', $array7);
$arguments5['maxWidth'] = '2000c';
$arguments5['maxHeight'] = '800c';
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array8['0'] = 1;

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output4 .= ')"></div>
';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('field.image', $array3);
$arguments1['as'] = 'img';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '




 ';

return $output0;
}


}
#