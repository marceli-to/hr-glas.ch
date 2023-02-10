<?php

class Standard_action_index_2279892133908c8aece001a05d0a4f40f5fe775f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['pageTitle'] = '';
$arguments1['includeCssFiles'] = NULL;
$arguments1['includeJsFiles'] = NULL;
$arguments1['addJsInlineLabels'] = NULL;
$arguments1['includeRequireJsModules'] = NULL;
$arguments1['addInlineSettings'] = NULL;
// Rendering Array
$array3 = array();
$array3['0'] = 'TYPO3/CMS/Install/BackendUserConfirmation';
$arguments1['includeRequireJsModules'] = $array3;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLayoutViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    <div class="modal-backdrop in"></div>
    <div class="modal modal-severity-warning modal-size-small" tabindex="-1" role="dialog" style="display: block;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['key'] = NULL;
$arguments26['id'] = NULL;
$arguments26['default'] = NULL;
$arguments26['arguments'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['languageKey'] = NULL;
$arguments26['alternativeLanguageKeys'] = NULL;
$output28 = '';
$array29 = array (
);
$output28 .= $renderingContext->getVariableProvider()->getByPath('languageFileReference', $array29);

$output28 .= ':sudoInstallToolPasswordConfirm';
$arguments26['key'] = $output28;

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output25 .= '
                            ';
return $output25;
};
$arguments23 = array();

$output22 .= '';

$output22 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['key'] = NULL;
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['languageKey'] = NULL;
$arguments33['alternativeLanguageKeys'] = NULL;
$output35 = '';
$array36 = array (
);
$output35 .= $renderingContext->getVariableProvider()->getByPath('languageFileReference', $array36);

$output35 .= ':sudoUserPasswordConfirm';
$arguments33['key'] = $output35;

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= '
                            ';
return $output32;
};
$arguments30 = array();
$arguments30['if'] = NULL;

$output22 .= '';

$output22 .= '
                        ';
return $output22;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('flagInstallToolPassword', $array20);

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['key'] = NULL;
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['languageKey'] = NULL;
$arguments10['alternativeLanguageKeys'] = NULL;
$output12 = '';
$array13 = array (
);
$output12 .= $renderingContext->getVariableProvider()->getByPath('languageFileReference', $array13);

$output12 .= ':sudoInstallToolPasswordConfirm';
$arguments10['key'] = $output12;

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output9 .= '
                            ';
return $output9;
};
$arguments7['__elseClosures'][] = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['languageKey'] = NULL;
$arguments15['alternativeLanguageKeys'] = NULL;
$output17 = '';
$array18 = array (
);
$output17 .= $renderingContext->getVariableProvider()->getByPath('languageFileReference', $array18);

$output17 .= ':sudoUserPasswordConfirm';
$arguments15['key'] = $output17;

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output14 .= '
                            ';
return $output14;
};

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
                    </h4>
                </div>
                <div class="modal-body">
                    <div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
                            <div class="alert alert-danger" id="invalid-sudo">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['languageKey'] = NULL;
$arguments44['alternativeLanguageKeys'] = NULL;
$output46 = '';
$array47 = array (
);
$output46 .= $renderingContext->getVariableProvider()->getByPath('languageFileReference', $array47);

$output46 .= ':sudoPasswordInvalid';
$arguments44['key'] = $output46;

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '
                            </div>
                        ';
return $output43;
};
$arguments37 = array();
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$arguments37['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['0'] = $renderingContext->getVariableProvider()->getByPath('flagInvalidPassword', $array40);
$array39['1'] = ' || ';
$array41 = array (
);$array39['2'] = $renderingContext->getVariableProvider()->getByPath('isJsonRequest', $array41);

$expression42 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments37['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
$arguments37['__thenClosure'] = $renderChildrenClosure38;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output6 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                            <div class="form-group">
                                <div class="form-control-holder">
                                    <label for="confirmationPassword">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['languageKey'] = NULL;
$arguments54['alternativeLanguageKeys'] = NULL;
$arguments54['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.password';

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output53 .= '
                                    </label>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['value'] = NULL;
$arguments56['name'] = NULL;
$arguments56['name'] = 'autocomplete';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$arguments58['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('flagInstallToolPassword', $array61);

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments58['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$arguments58['then'] = 'section-install current-password';
$arguments58['else'] = 'current-password';
$arguments56['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);
$renderChildrenClosure57 = ($arguments56['value'] !== null) ? function() use ($arguments56) { return $arguments56['value']; } : $renderChildrenClosure57;
$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output53 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['additionalAttributes'] = NULL;
$arguments63['data'] = NULL;
$arguments63['aria'] = NULL;
$arguments63['name'] = NULL;
$arguments63['value'] = NULL;
$arguments63['property'] = NULL;
$arguments63['disabled'] = NULL;
$arguments63['maxlength'] = NULL;
$arguments63['placeholder'] = NULL;
$arguments63['readonly'] = NULL;
$arguments63['size'] = NULL;
$arguments63['errorClass'] = 'f3-form-error';
$arguments63['class'] = NULL;
$arguments63['dir'] = NULL;
$arguments63['id'] = NULL;
$arguments63['lang'] = NULL;
$arguments63['style'] = NULL;
$arguments63['title'] = NULL;
$arguments63['accesskey'] = NULL;
$arguments63['tabindex'] = NULL;
$arguments63['onclick'] = NULL;
$arguments63['name'] = 'confirmationPassword';
$arguments63['id'] = 'confirmationPassword';
$arguments63['class'] = 'form-control';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['then'] = NULL;
$arguments65['else'] = NULL;
$arguments65['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['0'] = $renderingContext->getVariableProvider()->getByPath('flagInstallToolPassword', $array68);

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments65['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)
					),
					$renderingContext
				);
// Rendering Array
$array70 = array();
$array70['rsa-encryption'] = 'confirmationPasswordInternal';
$arguments65['else'] = $array70;
$arguments65['__thenClosure'] = $renderChildrenClosure66;
$arguments63['data'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);
// Rendering Array
$array71 = array();
$array71['required'] = 'required';
$array72 = array (
);$array71['autocomplete'] = $renderingContext->getVariableProvider()->getByPath('autocomplete', $array72);
$arguments63['additionalAttributes'] = $array71;

$output53 .= TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output53 .= '
                                    <!-- Internal password field, e.g. used for ext:rsaauth -->
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['aria'] = NULL;
$arguments85['name'] = NULL;
$arguments85['value'] = NULL;
$arguments85['property'] = NULL;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['name'] = 'confirmationPasswordInternal';
$arguments85['id'] = 'confirmationPasswordInternal';

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
                                        ';
return $output84;
};
$arguments82 = array();
$arguments82['if'] = NULL;

$output81 .= '';

$output81 .= '
                                    ';
return $output81;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('flagInstallToolPassword', $array79);

$expression80 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
$arguments73['__elseClosures'][] = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['aria'] = NULL;
$arguments76['name'] = NULL;
$arguments76['value'] = NULL;
$arguments76['property'] = NULL;
$arguments76['class'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['name'] = 'confirmationPasswordInternal';
$arguments76['id'] = 'confirmationPasswordInternal';

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
                                        ';
return $output75;
};

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output53 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['additionalAttributes'] = NULL;
$arguments87['data'] = NULL;
$arguments87['aria'] = NULL;
$arguments87['name'] = NULL;
$arguments87['value'] = NULL;
$arguments87['property'] = NULL;
$arguments87['class'] = NULL;
$arguments87['dir'] = NULL;
$arguments87['id'] = NULL;
$arguments87['lang'] = NULL;
$arguments87['style'] = NULL;
$arguments87['title'] = NULL;
$arguments87['accesskey'] = NULL;
$arguments87['tabindex'] = NULL;
$arguments87['onclick'] = NULL;
$arguments87['name'] = 'flags';
$array89 = array (
);$arguments87['value'] = $renderingContext->getVariableProvider()->getByPath('flags', $array89);

$output53 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output53 .= '
                                </div>
                            </div>
                        ';
return $output53;
};
$arguments48 = array();
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['aria'] = NULL;
$arguments48['action'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['controller'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['pluginName'] = NULL;
$arguments48['pageUid'] = NULL;
$arguments48['object'] = NULL;
$arguments48['pageType'] = 0;
$arguments48['noCache'] = false;
$arguments48['noCacheHash'] = NULL;
$arguments48['section'] = '';
$arguments48['format'] = '';
$arguments48['additionalParams'] = array (
);
$arguments48['absolute'] = false;
$arguments48['addQueryString'] = false;
$arguments48['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments48['addQueryStringMethod'] = 'GET';
$arguments48['fieldNamePrefix'] = NULL;
$arguments48['actionUri'] = NULL;
$arguments48['objectName'] = NULL;
$arguments48['hiddenFieldClassName'] = NULL;
$arguments48['enctype'] = NULL;
$arguments48['method'] = NULL;
$arguments48['name'] = NULL;
$arguments48['onreset'] = NULL;
$arguments48['onsubmit'] = NULL;
$arguments48['target'] = NULL;
$arguments48['novalidate'] = NULL;
$arguments48['class'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$arguments48['id'] = 'confirm-sudo';
$arguments48['class'] = 'form';
$arguments48['method'] = 'post';
$array50 = array (
);$arguments48['actionUri'] = $renderingContext->getVariableProvider()->getByPath('verifyUri', $array50);
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array51['0'] = 'true';

$expression52 = function($context) {return TRUE;};
$arguments48['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output6 .= '
                        <div class="text-right">
                            <a href="';
$array90 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('passwordModeUri', $array90)]);

$output6 .= '">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['key'] = NULL;
$arguments110['id'] = NULL;
$arguments110['default'] = NULL;
$arguments110['arguments'] = NULL;
$arguments110['extensionName'] = NULL;
$arguments110['languageKey'] = NULL;
$arguments110['alternativeLanguageKeys'] = NULL;
$output112 = '';
$array113 = array (
);
$output112 .= $renderingContext->getVariableProvider()->getByPath('languageFileReference', $array113);

$output112 .= ':sudoUserPasswordMode';
$arguments110['key'] = $output112;

$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext)]);

$output109 .= '
                                    ';
return $output109;
};
$arguments107 = array();

$output106 .= '';

$output106 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['key'] = NULL;
$arguments117['id'] = NULL;
$arguments117['default'] = NULL;
$arguments117['arguments'] = NULL;
$arguments117['extensionName'] = NULL;
$arguments117['languageKey'] = NULL;
$arguments117['alternativeLanguageKeys'] = NULL;
$output119 = '';
$array120 = array (
);
$output119 .= $renderingContext->getVariableProvider()->getByPath('languageFileReference', $array120);

$output119 .= ':sudoInstallToolPasswordMode';
$arguments117['key'] = $output119;

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output116 .= '
                                    ';
return $output116;
};
$arguments114 = array();
$arguments114['if'] = NULL;

$output106 .= '';

$output106 .= '
                                ';
return $output106;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('flagInstallToolPassword', $array104);

$expression105 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['key'] = NULL;
$arguments94['id'] = NULL;
$arguments94['default'] = NULL;
$arguments94['arguments'] = NULL;
$arguments94['extensionName'] = NULL;
$arguments94['languageKey'] = NULL;
$arguments94['alternativeLanguageKeys'] = NULL;
$output96 = '';
$array97 = array (
);
$output96 .= $renderingContext->getVariableProvider()->getByPath('languageFileReference', $array97);

$output96 .= ':sudoUserPasswordMode';
$arguments94['key'] = $output96;

$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext)]);

$output93 .= '
                                    ';
return $output93;
};
$arguments91['__elseClosures'][] = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['key'] = NULL;
$arguments99['id'] = NULL;
$arguments99['default'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['languageKey'] = NULL;
$arguments99['alternativeLanguageKeys'] = NULL;
$output101 = '';
$array102 = array (
);
$output101 .= $renderingContext->getVariableProvider()->getByPath('languageFileReference', $array102);

$output101 .= ':sudoInstallToolPasswordMode';
$arguments99['key'] = $output101;

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output98 .= '
                                    ';
return $output98;
};

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output6 .= '
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
                        <a href="';
$array127 = array (
);
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cancelUri', $array127)]);

$output126 .= '" class="btn btn-default" role="button">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['key'] = NULL;
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['languageKey'] = NULL;
$arguments128['alternativeLanguageKeys'] = NULL;
$output130 = '';
$array131 = array (
);
$output130 .= $renderingContext->getVariableProvider()->getByPath('languageFileReference', $array131);

$output130 .= ':cancel';
$arguments128['key'] = $output130;

$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext)]);

$output126 .= '
                        </a>
                    ';
return $output126;
};
$arguments121 = array();
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['0'] = $renderingContext->getVariableProvider()->getByPath('cancelUri', $array124);

$expression125 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments121['__thenClosure'] = $renderChildrenClosure122;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output6 .= '
                    <button type="submit" form="confirm-sudo" class="btn btn-warning" role="button">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['key'] = NULL;
$arguments132['id'] = NULL;
$arguments132['default'] = NULL;
$arguments132['arguments'] = NULL;
$arguments132['extensionName'] = NULL;
$arguments132['languageKey'] = NULL;
$arguments132['alternativeLanguageKeys'] = NULL;
$output134 = '';
$array135 = array (
);
$output134 .= $renderingContext->getVariableProvider()->getByPath('languageFileReference', $array135);

$output134 .= ':confirm';
$arguments132['key'] = $output134;

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext)]);

$output6 .= '
                    </button>
                </div>
            </div>
        </div>
    </div>
';
return $output6;
};
$arguments4 = array();

$output0 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLayoutViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '


';

return $output0;
}


}
#