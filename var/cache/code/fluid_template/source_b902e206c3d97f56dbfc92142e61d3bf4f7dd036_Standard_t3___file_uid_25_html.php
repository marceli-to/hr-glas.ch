<?php

class source_b902e206c3d97f56dbfc92142e61d3bf4f7dd036_Standard_t3___file_uid_25_html extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  <div class="teaser-boxes grid-teaser">
	  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
				<figure class="teaser-box teaser-box--image teaser-box--hover">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
						<a data-fancybox="gallery" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['src'] = '';
$arguments57['treatIdAsReference'] = false;
$arguments57['image'] = NULL;
$arguments57['crop'] = NULL;
$arguments57['cropVariant'] = 'default';
$arguments57['fileExtension'] = NULL;
$arguments57['width'] = NULL;
$arguments57['height'] = NULL;
$arguments57['minWidth'] = NULL;
$arguments57['minHeight'] = NULL;
$arguments57['maxWidth'] = NULL;
$arguments57['maxHeight'] = NULL;
$arguments57['absolute'] = false;
$array59 = array (
);$arguments57['image'] = $renderingContext->getVariableProvider()->getByPath('img', $array59);
$arguments57['maxWidth'] = '1200c';
$arguments57['maxHeight'] = '900c';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output56 .= '">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['aria'] = NULL;
$arguments60['class'] = NULL;
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$arguments60['alt'] = NULL;
$arguments60['ismap'] = NULL;
$arguments60['longdesc'] = NULL;
$arguments60['usemap'] = NULL;
$arguments60['loading'] = NULL;
$arguments60['src'] = '';
$arguments60['treatIdAsReference'] = false;
$arguments60['image'] = NULL;
$arguments60['crop'] = NULL;
$arguments60['cropVariant'] = 'default';
$arguments60['fileExtension'] = NULL;
$arguments60['width'] = NULL;
$arguments60['height'] = NULL;
$arguments60['minWidth'] = NULL;
$arguments60['minHeight'] = NULL;
$arguments60['maxWidth'] = NULL;
$arguments60['maxHeight'] = NULL;
$arguments60['absolute'] = false;
$array62 = array (
);$arguments60['image'] = $renderingContext->getVariableProvider()->getByPath('img', $array62);
$array63 = array (
);$arguments60['alt'] = $renderingContext->getVariableProvider()->getByPath('element.alt', $array63);
$arguments60['width'] = '700c';
$arguments60['height'] = '700c';

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output56 .= '
						</a>
					';
return $output56;
};
$arguments53 = array();
$arguments53['each'] = NULL;
$arguments53['as'] = NULL;
$arguments53['key'] = NULL;
$arguments53['reverse'] = false;
$arguments53['iteration'] = NULL;
$array55 = array (
);$arguments53['each'] = $renderingContext->getVariableProvider()->getByPath('element.image', $array55);
$arguments53['as'] = 'img';

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '	
				</figure>	  	
			';
return $output52;
};
$arguments50 = array();

$output49 .= '';

$output49 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
				<div class="teaser-box teaser-box--cta">
				  <div>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
				    	<h2>';
$array73 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.title', $array73)]);

$output72 .= '</h2>
					';
return $output72;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('element.title', $array70);

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments67['__thenClosure'] = $renderChildrenClosure68;

$output66 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
					    <p>';
$array80 = array (
);
$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.text', $array80)]);

$output79 .= '</p>
					';
return $output79;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['0'] = $renderingContext->getVariableProvider()->getByPath('element.text', $array77);

$expression78 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments74['__thenClosure'] = $renderChildrenClosure75;

$output66 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output66 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
					    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
					    	';
$array92 = array (
);
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.btnText', $array92)]);

$output91 .= '
					    ';
return $output91;
};
$arguments87 = array();
$arguments87['parameter'] = NULL;
$arguments87['target'] = '';
$arguments87['class'] = '';
$arguments87['title'] = '';
$arguments87['language'] = NULL;
$arguments87['additionalParams'] = '';
$arguments87['additionalAttributes'] = array (
);
$arguments87['useCacheHash'] = NULL;
$arguments87['addQueryString'] = false;
$arguments87['addQueryStringMethod'] = 'GET';
$arguments87['addQueryStringExclude'] = '';
$arguments87['absolute'] = false;
$arguments87['parts-as'] = 'typoLinkParts';
$array89 = array (
);$arguments87['parameter'] = $renderingContext->getVariableProvider()->getByPath('element.link', $array89);
$arguments87['class'] = 'btn-primary';
$array90 = array (
);$arguments87['title'] = $renderingContext->getVariableProvider()->getByPath('element.btnText', $array90);

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
					';
return $output86;
};
$arguments81 = array();
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['0'] = $renderingContext->getVariableProvider()->getByPath('element.link', $array84);

$expression85 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments81['__thenClosure'] = $renderChildrenClosure82;

$output66 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output66 .= '
				  </div>
				</div>	  	
			';
return $output66;
};
$arguments64 = array();
$arguments64['if'] = NULL;

$output49 .= '';

$output49 .= '
		';
return $output49;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('element.type', $array47);
$array46['1'] = ' == 0';

$expression48 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
				<figure class="teaser-box teaser-box--image teaser-box--hover">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
						<a data-fancybox="gallery" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['src'] = '';
$arguments12['treatIdAsReference'] = false;
$arguments12['image'] = NULL;
$arguments12['crop'] = NULL;
$arguments12['cropVariant'] = 'default';
$arguments12['fileExtension'] = NULL;
$arguments12['width'] = NULL;
$arguments12['height'] = NULL;
$arguments12['minWidth'] = NULL;
$arguments12['minHeight'] = NULL;
$arguments12['maxWidth'] = NULL;
$arguments12['maxHeight'] = NULL;
$arguments12['absolute'] = false;
$array14 = array (
);$arguments12['image'] = $renderingContext->getVariableProvider()->getByPath('img', $array14);
$arguments12['maxWidth'] = '1200c';
$arguments12['maxHeight'] = '900c';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output11 .= '">
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
);$arguments15['alt'] = $renderingContext->getVariableProvider()->getByPath('element.alt', $array18);
$arguments15['width'] = '700c';
$arguments15['height'] = '700c';

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output11 .= '
						</a>
					';
return $output11;
};
$arguments8 = array();
$arguments8['each'] = NULL;
$arguments8['as'] = NULL;
$arguments8['key'] = NULL;
$arguments8['reverse'] = false;
$arguments8['iteration'] = NULL;
$array10 = array (
);$arguments8['each'] = $renderingContext->getVariableProvider()->getByPath('element.image', $array10);
$arguments8['as'] = 'img';

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '	
				</figure>	  	
			';
return $output7;
};
$arguments5['__elseClosures'][] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
				<div class="teaser-box teaser-box--cta">
				  <div>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
				    	<h2>';
$array26 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.title', $array26)]);

$output25 .= '</h2>
					';
return $output25;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['0'] = $renderingContext->getVariableProvider()->getByPath('element.title', $array23);

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = $renderChildrenClosure21;

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
					    <p>';
$array33 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.text', $array33)]);

$output32 .= '</p>
					';
return $output32;
};
$arguments27 = array();
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$arguments27['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('element.text', $array30);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$arguments27['__thenClosure'] = $renderChildrenClosure28;

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output19 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
					    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
					    	';
$array45 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('element.btnText', $array45)]);

$output44 .= '
					    ';
return $output44;
};
$arguments40 = array();
$arguments40['parameter'] = NULL;
$arguments40['target'] = '';
$arguments40['class'] = '';
$arguments40['title'] = '';
$arguments40['language'] = NULL;
$arguments40['additionalParams'] = '';
$arguments40['additionalAttributes'] = array (
);
$arguments40['useCacheHash'] = NULL;
$arguments40['addQueryString'] = false;
$arguments40['addQueryStringMethod'] = 'GET';
$arguments40['addQueryStringExclude'] = '';
$arguments40['absolute'] = false;
$arguments40['parts-as'] = 'typoLinkParts';
$array42 = array (
);$arguments40['parameter'] = $renderingContext->getVariableProvider()->getByPath('element.link', $array42);
$arguments40['class'] = 'btn-primary';
$array43 = array (
);$arguments40['title'] = $renderingContext->getVariableProvider()->getByPath('element.btnText', $array43);

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
					';
return $output39;
};
$arguments34 = array();
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('element.link', $array37);

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments34['__thenClosure'] = $renderChildrenClosure35;

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output19 .= '
				  </div>
				</div>	  	
			';
return $output19;
};

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
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
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('field.elements', $array3);
$arguments1['as'] = 'element';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
  </div>
</section> ';

return $output0;
}


}
#