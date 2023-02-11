<?php

class partial_Module_ListItem_TypeIcon_67621d90d53e8a99333d99b8fe288b9e47039bec extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="typeicon">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['aria'] = NULL;
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['alt'] = NULL;
$arguments61['ismap'] = NULL;
$arguments61['longdesc'] = NULL;
$arguments61['usemap'] = NULL;
$arguments61['loading'] = NULL;
$arguments61['decoding'] = NULL;
$arguments61['src'] = '';
$arguments61['treatIdAsReference'] = false;
$arguments61['image'] = NULL;
$arguments61['crop'] = NULL;
$arguments61['cropVariant'] = 'default';
$arguments61['fileExtension'] = NULL;
$arguments61['width'] = NULL;
$arguments61['height'] = NULL;
$arguments61['minWidth'] = NULL;
$arguments61['minHeight'] = NULL;
$arguments61['maxWidth'] = NULL;
$arguments61['maxHeight'] = NULL;
$arguments61['absolute'] = false;
$array63 = array (
);$arguments61['src'] = $renderingContext->getVariableProvider()->getByPath('dce.selectedWizardIconPath', $array63);
$arguments61['width'] = '32c';
$arguments61['height'] = 32;

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
				';
return $output60;
};
$arguments58 = array();

$output57 .= '';

$output57 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['aria'] = NULL;
$arguments67['class'] = NULL;
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$arguments67['alt'] = NULL;
$arguments67['ismap'] = NULL;
$arguments67['longdesc'] = NULL;
$arguments67['usemap'] = NULL;
$arguments67['loading'] = NULL;
$arguments67['decoding'] = NULL;
$arguments67['src'] = '';
$arguments67['treatIdAsReference'] = false;
$arguments67['image'] = NULL;
$arguments67['crop'] = NULL;
$arguments67['cropVariant'] = 'default';
$arguments67['fileExtension'] = NULL;
$arguments67['width'] = NULL;
$arguments67['height'] = NULL;
$arguments67['minWidth'] = NULL;
$arguments67['minHeight'] = NULL;
$arguments67['maxWidth'] = NULL;
$arguments67['maxHeight'] = NULL;
$arguments67['absolute'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['path'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['absolute'] = false;
$arguments69['path'] = 'Icons/DceModuleIcon.svg';
$arguments67['src'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);
$arguments67['width'] = '32c';
$arguments67['height'] = 32;

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
				';
return $output66;
};
$arguments64 = array();
$arguments64['if'] = NULL;

$output57 .= '';

$output57 .= '
			';
return $output57;
};
$arguments43 = array();
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('dce.selectedWizardIconPath', $array55);

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments43['__thenClosure'] = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['aria'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['alt'] = NULL;
$arguments46['ismap'] = NULL;
$arguments46['longdesc'] = NULL;
$arguments46['usemap'] = NULL;
$arguments46['loading'] = NULL;
$arguments46['decoding'] = NULL;
$arguments46['src'] = '';
$arguments46['treatIdAsReference'] = false;
$arguments46['image'] = NULL;
$arguments46['crop'] = NULL;
$arguments46['cropVariant'] = 'default';
$arguments46['fileExtension'] = NULL;
$arguments46['width'] = NULL;
$arguments46['height'] = NULL;
$arguments46['minWidth'] = NULL;
$arguments46['minHeight'] = NULL;
$arguments46['maxWidth'] = NULL;
$arguments46['maxHeight'] = NULL;
$arguments46['absolute'] = false;
$array48 = array (
);$arguments46['src'] = $renderingContext->getVariableProvider()->getByPath('dce.selectedWizardIconPath', $array48);
$arguments46['width'] = '32c';
$arguments46['height'] = 32;

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
				';
return $output45;
};
$arguments43['__elseClosures'][] = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['additionalAttributes'] = NULL;
$arguments50['data'] = NULL;
$arguments50['aria'] = NULL;
$arguments50['class'] = NULL;
$arguments50['dir'] = NULL;
$arguments50['id'] = NULL;
$arguments50['lang'] = NULL;
$arguments50['style'] = NULL;
$arguments50['title'] = NULL;
$arguments50['accesskey'] = NULL;
$arguments50['tabindex'] = NULL;
$arguments50['onclick'] = NULL;
$arguments50['alt'] = NULL;
$arguments50['ismap'] = NULL;
$arguments50['longdesc'] = NULL;
$arguments50['usemap'] = NULL;
$arguments50['loading'] = NULL;
$arguments50['decoding'] = NULL;
$arguments50['src'] = '';
$arguments50['treatIdAsReference'] = false;
$arguments50['image'] = NULL;
$arguments50['crop'] = NULL;
$arguments50['cropVariant'] = 'default';
$arguments50['fileExtension'] = NULL;
$arguments50['width'] = NULL;
$arguments50['height'] = NULL;
$arguments50['minWidth'] = NULL;
$arguments50['minHeight'] = NULL;
$arguments50['maxWidth'] = NULL;
$arguments50['maxHeight'] = NULL;
$arguments50['absolute'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['path'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['absolute'] = false;
$arguments52['path'] = 'Icons/DceModuleIcon.svg';
$arguments50['src'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);
$arguments50['width'] = '32c';
$arguments50['height'] = 32;

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
				';
return $output49;
};

$output42 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
		';
return $output42;
};
$arguments40 = array();

$output39 .= '';

$output39 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['identifier'] = NULL;
$arguments74['size'] = 'small';
$arguments74['overlay'] = NULL;
$arguments74['state'] = 'default';
$arguments74['alternativeMarkupIdentifier'] = NULL;
$array76 = array (
);$arguments74['identifier'] = $renderingContext->getVariableProvider()->getByPath('dce.selectedWizardIcon', $array76);
$arguments74['size'] = 'default';

$output73 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
		';
return $output73;
};
$arguments71 = array();
$arguments71['if'] = NULL;

$output39 .= '';

$output39 .= '
	';
return $output39;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('dce.wizardIcon', $array37);
$array36['1'] = ' == \'custom\'';

$expression38 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'custom');};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['aria'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['alt'] = NULL;
$arguments22['ismap'] = NULL;
$arguments22['longdesc'] = NULL;
$arguments22['usemap'] = NULL;
$arguments22['loading'] = NULL;
$arguments22['decoding'] = NULL;
$arguments22['src'] = '';
$arguments22['treatIdAsReference'] = false;
$arguments22['image'] = NULL;
$arguments22['crop'] = NULL;
$arguments22['cropVariant'] = 'default';
$arguments22['fileExtension'] = NULL;
$arguments22['width'] = NULL;
$arguments22['height'] = NULL;
$arguments22['minWidth'] = NULL;
$arguments22['minHeight'] = NULL;
$arguments22['maxWidth'] = NULL;
$arguments22['maxHeight'] = NULL;
$arguments22['absolute'] = false;
$array24 = array (
);$arguments22['src'] = $renderingContext->getVariableProvider()->getByPath('dce.selectedWizardIconPath', $array24);
$arguments22['width'] = '32c';
$arguments22['height'] = 32;

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
				';
return $output21;
};
$arguments19 = array();

$output18 .= '';

$output18 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['aria'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['alt'] = NULL;
$arguments28['ismap'] = NULL;
$arguments28['longdesc'] = NULL;
$arguments28['usemap'] = NULL;
$arguments28['loading'] = NULL;
$arguments28['decoding'] = NULL;
$arguments28['src'] = '';
$arguments28['treatIdAsReference'] = false;
$arguments28['image'] = NULL;
$arguments28['crop'] = NULL;
$arguments28['cropVariant'] = 'default';
$arguments28['fileExtension'] = NULL;
$arguments28['width'] = NULL;
$arguments28['height'] = NULL;
$arguments28['minWidth'] = NULL;
$arguments28['minHeight'] = NULL;
$arguments28['maxWidth'] = NULL;
$arguments28['maxHeight'] = NULL;
$arguments28['absolute'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['path'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['absolute'] = false;
$arguments30['path'] = 'Icons/DceModuleIcon.svg';
$arguments28['src'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);
$arguments28['width'] = '32c';
$arguments28['height'] = 32;

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
				';
return $output27;
};
$arguments25 = array();
$arguments25['if'] = NULL;

$output18 .= '';

$output18 .= '
			';
return $output18;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('dce.selectedWizardIconPath', $array16);

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['aria'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['alt'] = NULL;
$arguments7['ismap'] = NULL;
$arguments7['longdesc'] = NULL;
$arguments7['usemap'] = NULL;
$arguments7['loading'] = NULL;
$arguments7['decoding'] = NULL;
$arguments7['src'] = '';
$arguments7['treatIdAsReference'] = false;
$arguments7['image'] = NULL;
$arguments7['crop'] = NULL;
$arguments7['cropVariant'] = 'default';
$arguments7['fileExtension'] = NULL;
$arguments7['width'] = NULL;
$arguments7['height'] = NULL;
$arguments7['minWidth'] = NULL;
$arguments7['minHeight'] = NULL;
$arguments7['maxWidth'] = NULL;
$arguments7['maxHeight'] = NULL;
$arguments7['absolute'] = false;
$array9 = array (
);$arguments7['src'] = $renderingContext->getVariableProvider()->getByPath('dce.selectedWizardIconPath', $array9);
$arguments7['width'] = '32c';
$arguments7['height'] = 32;

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
				';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['aria'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['alt'] = NULL;
$arguments11['ismap'] = NULL;
$arguments11['longdesc'] = NULL;
$arguments11['usemap'] = NULL;
$arguments11['loading'] = NULL;
$arguments11['decoding'] = NULL;
$arguments11['src'] = '';
$arguments11['treatIdAsReference'] = false;
$arguments11['image'] = NULL;
$arguments11['crop'] = NULL;
$arguments11['cropVariant'] = 'default';
$arguments11['fileExtension'] = NULL;
$arguments11['width'] = NULL;
$arguments11['height'] = NULL;
$arguments11['minWidth'] = NULL;
$arguments11['minHeight'] = NULL;
$arguments11['maxWidth'] = NULL;
$arguments11['maxHeight'] = NULL;
$arguments11['absolute'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['path'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['absolute'] = false;
$arguments13['path'] = 'Icons/DceModuleIcon.svg';
$arguments11['src'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
$arguments11['width'] = '32c';
$arguments11['height'] = 32;

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
				';
return $output10;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
		';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['identifier'] = NULL;
$arguments33['size'] = 'small';
$arguments33['overlay'] = NULL;
$arguments33['state'] = 'default';
$arguments33['alternativeMarkupIdentifier'] = NULL;
$array35 = array (
);$arguments33['identifier'] = $renderingContext->getVariableProvider()->getByPath('dce.selectedWizardIcon', $array35);
$arguments33['size'] = 'default';

$output32 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
		';
return $output32;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>
';

return $output0;
}


}
#