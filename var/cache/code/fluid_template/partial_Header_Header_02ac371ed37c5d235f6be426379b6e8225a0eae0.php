<?php

class partial_Header_Header_02ac371ed37c5d235f6be426379b6e8225a0eae0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
			<h1>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$array110 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array110)]);
};
$arguments107 = array();
$arguments107['parameter'] = NULL;
$arguments107['target'] = '';
$arguments107['class'] = '';
$arguments107['title'] = '';
$arguments107['language'] = NULL;
$arguments107['additionalParams'] = '';
$arguments107['additionalAttributes'] = array (
);
$arguments107['useCacheHash'] = NULL;
$arguments107['addQueryString'] = false;
$arguments107['addQueryStringMethod'] = 'GET';
$arguments107['addQueryStringExclude'] = '';
$arguments107['absolute'] = false;
$arguments107['parts-as'] = 'typoLinkParts';
$array109 = array (
);$arguments107['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array109);

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
			</h1>
		';
return $output106;
};
$arguments104 = array();
$arguments104['value'] = NULL;
$arguments104['value'] = 1;

$output103 .= '';

$output103 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
			<h2>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$array117 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array117)]);
};
$arguments114 = array();
$arguments114['parameter'] = NULL;
$arguments114['target'] = '';
$arguments114['class'] = '';
$arguments114['title'] = '';
$arguments114['language'] = NULL;
$arguments114['additionalParams'] = '';
$arguments114['additionalAttributes'] = array (
);
$arguments114['useCacheHash'] = NULL;
$arguments114['addQueryString'] = false;
$arguments114['addQueryStringMethod'] = 'GET';
$arguments114['addQueryStringExclude'] = '';
$arguments114['absolute'] = false;
$arguments114['parts-as'] = 'typoLinkParts';
$array116 = array (
);$arguments114['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array116);

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
			</h2>
		';
return $output113;
};
$arguments111 = array();
$arguments111['value'] = NULL;
$arguments111['value'] = 2;

$output103 .= '';

$output103 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
			<h3>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$array124 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array124)]);
};
$arguments121 = array();
$arguments121['parameter'] = NULL;
$arguments121['target'] = '';
$arguments121['class'] = '';
$arguments121['title'] = '';
$arguments121['language'] = NULL;
$arguments121['additionalParams'] = '';
$arguments121['additionalAttributes'] = array (
);
$arguments121['useCacheHash'] = NULL;
$arguments121['addQueryString'] = false;
$arguments121['addQueryStringMethod'] = 'GET';
$arguments121['addQueryStringExclude'] = '';
$arguments121['absolute'] = false;
$arguments121['parts-as'] = 'typoLinkParts';
$array123 = array (
);$arguments121['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array123);

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '
			</h3>
		';
return $output120;
};
$arguments118 = array();
$arguments118['value'] = NULL;
$arguments118['value'] = 3;

$output103 .= '';

$output103 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
			<h4>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$array131 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array131)]);
};
$arguments128 = array();
$arguments128['parameter'] = NULL;
$arguments128['target'] = '';
$arguments128['class'] = '';
$arguments128['title'] = '';
$arguments128['language'] = NULL;
$arguments128['additionalParams'] = '';
$arguments128['additionalAttributes'] = array (
);
$arguments128['useCacheHash'] = NULL;
$arguments128['addQueryString'] = false;
$arguments128['addQueryStringMethod'] = 'GET';
$arguments128['addQueryStringExclude'] = '';
$arguments128['absolute'] = false;
$arguments128['parts-as'] = 'typoLinkParts';
$array130 = array (
);$arguments128['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array130);

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '
			</h4>
		';
return $output127;
};
$arguments125 = array();
$arguments125['value'] = NULL;
$arguments125['value'] = 4;

$output103 .= '';

$output103 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
			<h5>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$array138 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array138)]);
};
$arguments135 = array();
$arguments135['parameter'] = NULL;
$arguments135['target'] = '';
$arguments135['class'] = '';
$arguments135['title'] = '';
$arguments135['language'] = NULL;
$arguments135['additionalParams'] = '';
$arguments135['additionalAttributes'] = array (
);
$arguments135['useCacheHash'] = NULL;
$arguments135['addQueryString'] = false;
$arguments135['addQueryStringMethod'] = 'GET';
$arguments135['addQueryStringExclude'] = '';
$arguments135['absolute'] = false;
$arguments135['parts-as'] = 'typoLinkParts';
$array137 = array (
);$arguments135['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array137);

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '
			</h5>
		';
return $output134;
};
$arguments132 = array();
$arguments132['value'] = NULL;
$arguments132['value'] = 5;

$output103 .= '';

$output103 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
			<h6>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$array145 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array145)]);
};
$arguments142 = array();
$arguments142['parameter'] = NULL;
$arguments142['target'] = '';
$arguments142['class'] = '';
$arguments142['title'] = '';
$arguments142['language'] = NULL;
$arguments142['additionalParams'] = '';
$arguments142['additionalAttributes'] = array (
);
$arguments142['useCacheHash'] = NULL;
$arguments142['addQueryString'] = false;
$arguments142['addQueryStringMethod'] = 'GET';
$arguments142['addQueryStringExclude'] = '';
$arguments142['absolute'] = false;
$arguments142['parts-as'] = 'typoLinkParts';
$array144 = array (
);$arguments142['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array144);

$output141 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '
			</h6>
		';
return $output141;
};
$arguments139 = array();
$arguments139['value'] = NULL;
$arguments139['value'] = 6;

$output103 .= '';

$output103 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return ' -- do not show header -- ';
};
$arguments149 = array();

$output148 .= NULL;

$output148 .= '
		';
return $output148;
};
$arguments146 = array();
$arguments146['value'] = NULL;
$arguments146['value'] = 100;

$output103 .= '';

$output103 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['section'] = NULL;
$arguments160['partial'] = NULL;
$arguments160['delegate'] = NULL;
$arguments160['renderable'] = NULL;
$arguments160['arguments'] = array (
);
$arguments160['optional'] = false;
$arguments160['default'] = NULL;
$arguments160['contentAs'] = NULL;
$arguments160['debug'] = true;
$arguments160['partial'] = 'Header/Header';
// Rendering Array
$array162 = array();
$array163 = array (
);$array162['header'] = $renderingContext->getVariableProvider()->getByPath('header', $array163);
$array162['layout'] = 1;
$array164 = array (
);$array162['positionClass'] = $renderingContext->getVariableProvider()->getByPath('positionClass', $array164);
$array165 = array (
);$array162['link'] = $renderingContext->getVariableProvider()->getByPath('link', $array165);
$arguments160['arguments'] = $array162;

$output159 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output159 .= '
			';
return $output159;
};
$arguments154 = array();
$arguments154['then'] = NULL;
$arguments154['else'] = NULL;
$arguments154['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array156 = array();
$array157 = array (
);$array156['0'] = $renderingContext->getVariableProvider()->getByPath('default', $array157);

$expression158 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments154['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression158(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array156)
					),
					$renderingContext
				);
$arguments154['__thenClosure'] = $renderChildrenClosure155;

$output153 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
		';
return $output153;
};
$arguments151 = array();

$output103 .= '';

$output103 .= '
	';
return $output103;
};
$arguments7 = array();
$arguments7['expression'] = NULL;
$array102 = array (
);$arguments7['expression'] = $renderingContext->getVariableProvider()->getByPath('layout', $array102);

$output6 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 1;
}): return call_user_func(function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
			<h1>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$array13 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array13)]);
};
$arguments10 = array();
$arguments10['parameter'] = NULL;
$arguments10['target'] = '';
$arguments10['class'] = '';
$arguments10['title'] = '';
$arguments10['language'] = NULL;
$arguments10['additionalParams'] = '';
$arguments10['additionalAttributes'] = array (
);
$arguments10['useCacheHash'] = NULL;
$arguments10['addQueryString'] = false;
$arguments10['addQueryStringMethod'] = 'GET';
$arguments10['addQueryStringExclude'] = '';
$arguments10['absolute'] = false;
$arguments10['parts-as'] = 'typoLinkParts';
$array12 = array (
);$arguments10['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array12);

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
			</h1>
		';
return $output9;
});
case call_user_func(function() use ($renderingContext, $self) {

return 2;
}): return call_user_func(function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
			<h2>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$array25 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array25)]);
};
$arguments22 = array();
$arguments22['parameter'] = NULL;
$arguments22['target'] = '';
$arguments22['class'] = '';
$arguments22['title'] = '';
$arguments22['language'] = NULL;
$arguments22['additionalParams'] = '';
$arguments22['additionalAttributes'] = array (
);
$arguments22['useCacheHash'] = NULL;
$arguments22['addQueryString'] = false;
$arguments22['addQueryStringMethod'] = 'GET';
$arguments22['addQueryStringExclude'] = '';
$arguments22['absolute'] = false;
$arguments22['parts-as'] = 'typoLinkParts';
$array24 = array (
);$arguments22['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array24);

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
			</h2>
		';
return $output21;
});
case call_user_func(function() use ($renderingContext, $self) {

return 3;
}): return call_user_func(function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
			<h3>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$array37 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array37)]);
};
$arguments34 = array();
$arguments34['parameter'] = NULL;
$arguments34['target'] = '';
$arguments34['class'] = '';
$arguments34['title'] = '';
$arguments34['language'] = NULL;
$arguments34['additionalParams'] = '';
$arguments34['additionalAttributes'] = array (
);
$arguments34['useCacheHash'] = NULL;
$arguments34['addQueryString'] = false;
$arguments34['addQueryStringMethod'] = 'GET';
$arguments34['addQueryStringExclude'] = '';
$arguments34['absolute'] = false;
$arguments34['parts-as'] = 'typoLinkParts';
$array36 = array (
);$arguments34['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array36);

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
			</h3>
		';
return $output33;
});
case call_user_func(function() use ($renderingContext, $self) {

return 4;
}): return call_user_func(function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
			<h4>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$array49 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array49)]);
};
$arguments46 = array();
$arguments46['parameter'] = NULL;
$arguments46['target'] = '';
$arguments46['class'] = '';
$arguments46['title'] = '';
$arguments46['language'] = NULL;
$arguments46['additionalParams'] = '';
$arguments46['additionalAttributes'] = array (
);
$arguments46['useCacheHash'] = NULL;
$arguments46['addQueryString'] = false;
$arguments46['addQueryStringMethod'] = 'GET';
$arguments46['addQueryStringExclude'] = '';
$arguments46['absolute'] = false;
$arguments46['parts-as'] = 'typoLinkParts';
$array48 = array (
);$arguments46['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array48);

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
			</h4>
		';
return $output45;
});
case call_user_func(function() use ($renderingContext, $self) {

return 5;
}): return call_user_func(function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
			<h5>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$array61 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array61)]);
};
$arguments58 = array();
$arguments58['parameter'] = NULL;
$arguments58['target'] = '';
$arguments58['class'] = '';
$arguments58['title'] = '';
$arguments58['language'] = NULL;
$arguments58['additionalParams'] = '';
$arguments58['additionalAttributes'] = array (
);
$arguments58['useCacheHash'] = NULL;
$arguments58['addQueryString'] = false;
$arguments58['addQueryStringMethod'] = 'GET';
$arguments58['addQueryStringExclude'] = '';
$arguments58['absolute'] = false;
$arguments58['parts-as'] = 'typoLinkParts';
$array60 = array (
);$arguments58['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array60);

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
			</h5>
		';
return $output57;
});
case call_user_func(function() use ($renderingContext, $self) {

return 6;
}): return call_user_func(function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
			<h6>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$array73 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array73)]);
};
$arguments70 = array();
$arguments70['parameter'] = NULL;
$arguments70['target'] = '';
$arguments70['class'] = '';
$arguments70['title'] = '';
$arguments70['language'] = NULL;
$arguments70['additionalParams'] = '';
$arguments70['additionalAttributes'] = array (
);
$arguments70['useCacheHash'] = NULL;
$arguments70['addQueryString'] = false;
$arguments70['addQueryStringMethod'] = 'GET';
$arguments70['addQueryStringExclude'] = '';
$arguments70['absolute'] = false;
$arguments70['parts-as'] = 'typoLinkParts';
$array72 = array (
);$arguments70['parameter'] = $renderingContext->getVariableProvider()->getByPath('link', $array72);

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
			</h6>
		';
return $output69;
});
case call_user_func(function() use ($renderingContext, $self) {

return 100;
}): return call_user_func(function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return ' -- do not show header -- ';
};
$arguments82 = array();

$output81 .= NULL;

$output81 .= '
		';
return $output81;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['section'] = NULL;
$arguments96['partial'] = NULL;
$arguments96['delegate'] = NULL;
$arguments96['renderable'] = NULL;
$arguments96['arguments'] = array (
);
$arguments96['optional'] = false;
$arguments96['default'] = NULL;
$arguments96['contentAs'] = NULL;
$arguments96['debug'] = true;
$arguments96['partial'] = 'Header/Header';
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['header'] = $renderingContext->getVariableProvider()->getByPath('header', $array99);
$array98['layout'] = 1;
$array100 = array (
);$array98['positionClass'] = $renderingContext->getVariableProvider()->getByPath('positionClass', $array100);
$array101 = array (
);$array98['link'] = $renderingContext->getVariableProvider()->getByPath('link', $array101);
$arguments96['arguments'] = $array98;

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
			';
return $output95;
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('default', $array93);

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = $renderChildrenClosure91;

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
		';
return $output89;
});
}
}, array($arguments7));

$output6 .= '
';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('header', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#