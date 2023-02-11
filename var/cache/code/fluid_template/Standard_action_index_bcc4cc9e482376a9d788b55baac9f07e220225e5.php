<?php

class Standard_action_index_bcc4cc9e482376a9d788b55baac9f07e220225e5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section fieldRow
 */
public function section_98d2d4b6b7669016b2f2b086cbef3478c9ff911e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <tr>
        <th class="col-nowrap">';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldLabel', $array1)]);

$output0 .= '</th>
        <td>';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldValue', $array2)]);

$output0 .= '</td>
    </tr>
';

return $output0;
}
/**
 * section refLineRow
 */
public function section_bf6c41c48a38f988455b8309d12e9080996c546e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
    <tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                <td class="col-icon"><a href="';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array37)]);

$output36 .= '" title="id=';
$array38 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array38)]);

$output36 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array41 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array41);
};
$arguments39 = array();
$arguments39['value'] = NULL;

$output36 .= isset($arguments39['value']) ? $arguments39['value'] : $renderChildrenClosure40();

$output36 .= '</a></td>
                <td class="col-title"><a href="';
$array42 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array42)]);

$output36 .= '" title="[id=';
$array43 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array43)]);

$output36 .= '] ';
$array44 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array44)]);

$output36 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array48 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array48)]);
};
$arguments45 = array();
$arguments45['maxCharacters'] = NULL;
$arguments45['append'] = '&hellip;';
$arguments45['respectWordBoundaries'] = true;
$arguments45['respectHtml'] = true;
$array47 = array (
);$arguments45['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array47);

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output36 .= '</a></td>
                <td>';
$array49 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array49)]);

$output36 .= '</td>
                <td><span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['languageKey'] = NULL;
$arguments50['alternativeLanguageKeys'] = NULL;
$arguments50['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output36 .= ': ';
$array52 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array52)]);

$output36 .= ' (uid=';
$array53 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.pid', $array53)]);

$output36 .= ')">
                        ';
$array54 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array54)]);

$output36 .= '
                    </span></td>
            ';
return $output36;
};
$arguments34 = array();

$output33 .= '';

$output33 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$arguments58['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output57 .= ' (uid=';
$array60 = array (
);
$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array60)]);

$output57 .= ')</td>
                <td>';
$array61 = array (
);
$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array61)]);

$output57 .= '</td>
                <td></td>
            ';
return $output57;
};
$arguments55 = array();
$arguments55['if'] = NULL;

$output33 .= '';

$output33 .= '
        ';
return $output33;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('line.record', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
                <td class="col-icon"><a href="';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array7)]);

$output6 .= '" title="id=';
$array8 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array8)]);

$output6 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$array11 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array11);
};
$arguments9 = array();
$arguments9['value'] = NULL;

$output6 .= isset($arguments9['value']) ? $arguments9['value'] : $renderChildrenClosure10();

$output6 .= '</a></td>
                <td class="col-title"><a href="';
$array12 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array12)]);

$output6 .= '" title="[id=';
$array13 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array13)]);

$output6 .= '] ';
$array14 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array14)]);

$output6 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$array18 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array18)]);
};
$arguments15 = array();
$arguments15['maxCharacters'] = NULL;
$arguments15['append'] = '&hellip;';
$arguments15['respectWordBoundaries'] = true;
$arguments15['respectHtml'] = true;
$array17 = array (
);$arguments15['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array17);

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output6 .= '</a></td>
                <td>';
$array19 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array19)]);

$output6 .= '</td>
                <td><span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['key'] = NULL;
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['languageKey'] = NULL;
$arguments20['alternativeLanguageKeys'] = NULL;
$arguments20['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output6 .= ': ';
$array22 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array22)]);

$output6 .= ' (uid=';
$array23 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.pid', $array23)]);

$output6 .= ')">
                        ';
$array24 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array24)]);

$output6 .= '
                    </span></td>
            ';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
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
$arguments26['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output25 .= ' (uid=';
$array28 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array28)]);

$output25 .= ')</td>
                <td>';
$array29 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array29)]);

$output25 .= '</td>
                <td></td>
            ';
return $output25;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '<td title="';
$array75 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array75)]);

$output74 .= ' [ID: ';
$array76 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecord.uid', $array76)]);

$output74 .= ']" class="col-responsive">';
$array77 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array77)]);

$output74 .= '</td>';
return $output74;
};
$arguments72 = array();

$output71 .= '';

$output71 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return '<td></td>';
};
$arguments78 = array();
$arguments78['if'] = NULL;

$output71 .= '';

$output71 .= '
        ';
return $output71;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['0'] = $renderingContext->getVariableProvider()->getByPath('line.parentRecord', $array69);

$expression70 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '<td title="';
$array65 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array65)]);

$output64 .= ' [ID: ';
$array66 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecord.uid', $array66)]);

$output64 .= ']" class="col-responsive">';
$array67 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array67)]);

$output64 .= '</td>';
return $output64;
};
$arguments62['__elseClosures'][] = function() use ($renderingContext, $self) {
return '<td></td>';
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output3 .= '
        <td title="';
$array80 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array80)]);

$output3 .= '" class="col-responsive">';
$array81 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array81)]);

$output3 .= '</td>
        <td>';
$array82 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.labelForTableColumn', $array82)]);

$output3 .= '</td>
        <td>';
$array83 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.flexpointer', $array83)]);

$output3 .= '</td>
        <td>';
$array84 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.softref_key', $array84)]);

$output3 .= '</td>
        <td>';
$array85 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.sorting', $array85)]);

$output3 .= '</td>
        <td class="col-control">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['section'] = NULL;
$arguments86['partial'] = NULL;
$arguments86['delegate'] = NULL;
$arguments86['renderable'] = NULL;
$arguments86['arguments'] = array (
);
$arguments86['optional'] = false;
$arguments86['default'] = NULL;
$arguments86['contentAs'] = NULL;
$arguments86['debug'] = true;
$arguments86['section'] = 'action';
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['line'] = $renderingContext->getVariableProvider()->getByPath('line.actions', $array89);
$arguments86['arguments'] = $array88;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output3 .= '
        </td>
    </tr>
';

return $output3;
}
/**
 * section refFromLineRow
 */
public function section_259ffcb6cbf483b74437a8f396e954e06c115a04(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output90 = '';

$output90 .= '
    <tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
                <td class="col-icon"><a href="';
$array120 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array120)]);

$output119 .= '" title="id=';
$array121 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array121)]);

$output119 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$array124 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array124);
};
$arguments122 = array();
$arguments122['value'] = NULL;

$output119 .= isset($arguments122['value']) ? $arguments122['value'] : $renderChildrenClosure123();

$output119 .= '</a></td>
                <td class="col-title"><a href="';
$array125 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array125)]);

$output119 .= '" title="[id=';
$array126 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array126)]);

$output119 .= '] ';
$array127 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array127)]);

$output119 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$array131 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array131)]);
};
$arguments128 = array();
$arguments128['maxCharacters'] = NULL;
$arguments128['append'] = '&hellip;';
$arguments128['respectWordBoundaries'] = true;
$arguments128['respectHtml'] = true;
$array130 = array (
);$arguments128['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array130);

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output119 .= '</a></td>
                <td>';
$array132 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array132)]);

$output119 .= '</td>
                <td>';
$array133 = array (
);
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_uid', $array133)]);

$output119 .= '</td>
            ';
return $output119;
};
$arguments117 = array();

$output116 .= '';

$output116 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['key'] = NULL;
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['languageKey'] = NULL;
$arguments137['alternativeLanguageKeys'] = NULL;
$arguments137['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext)]);

$output136 .= ' (uid=';
$array139 = array (
);
$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array139)]);

$output136 .= ')</td>
                <td>';
$array140 = array (
);
$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array140)]);

$output136 .= '</td>
                <td></td>
            ';
return $output136;
};
$arguments134 = array();
$arguments134['if'] = NULL;

$output116 .= '';

$output116 .= '
        ';
return $output116;
};
$arguments91 = array();
$arguments91['then'] = NULL;
$arguments91['else'] = NULL;
$arguments91['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array113 = array();
$array114 = array (
);$array113['0'] = $renderingContext->getVariableProvider()->getByPath('line.record', $array114);

$expression115 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments91['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);
$arguments91['__thenClosure'] = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
                <td class="col-icon"><a href="';
$array94 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array94)]);

$output93 .= '" title="id=';
$array95 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array95)]);

$output93 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$array98 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array98);
};
$arguments96 = array();
$arguments96['value'] = NULL;

$output93 .= isset($arguments96['value']) ? $arguments96['value'] : $renderChildrenClosure97();

$output93 .= '</a></td>
                <td class="col-title"><a href="';
$array99 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array99)]);

$output93 .= '" title="[id=';
$array100 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array100)]);

$output93 .= '] ';
$array101 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array101)]);

$output93 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$array105 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array105)]);
};
$arguments102 = array();
$arguments102['maxCharacters'] = NULL;
$arguments102['append'] = '&hellip;';
$arguments102['respectWordBoundaries'] = true;
$arguments102['respectHtml'] = true;
$array104 = array (
);$arguments102['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array104);

$output93 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output93 .= '</a></td>
                <td>';
$array106 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array106)]);

$output93 .= '</td>
                <td>';
$array107 = array (
);
$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_uid', $array107)]);

$output93 .= '</td>
            ';
return $output93;
};
$arguments91['__elseClosures'][] = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['key'] = NULL;
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$arguments109['languageKey'] = NULL;
$arguments109['alternativeLanguageKeys'] = NULL;
$arguments109['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output108 .= ' (uid=';
$array111 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array111)]);

$output108 .= ')</td>
                <td>';
$array112 = array (
);
$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array112)]);

$output108 .= '</td>
                <td></td>
            ';
return $output108;
};

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= '
        <td title="';
$array141 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array141)]);

$output90 .= '" class="col-responsive">';
$array142 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array142)]);

$output90 .= '</td>
        <td>';
$array143 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.labelForTableColumn', $array143)]);

$output90 .= '</td>
        <td>';
$array144 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.flexpointer', $array144)]);

$output90 .= '</td>
        <td>';
$array145 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.softref_key', $array145)]);

$output90 .= '</td>
        <td>';
$array146 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.sorting', $array146)]);

$output90 .= '</td>
        <td>';
$array147 = array (
);
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_string', $array147)]);

$output90 .= '</td>
        <td class="col-control">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['section'] = NULL;
$arguments148['partial'] = NULL;
$arguments148['delegate'] = NULL;
$arguments148['renderable'] = NULL;
$arguments148['arguments'] = array (
);
$arguments148['optional'] = false;
$arguments148['default'] = NULL;
$arguments148['contentAs'] = NULL;
$arguments148['debug'] = true;
$arguments148['section'] = 'action';
// Rendering Array
$array150 = array();
$array151 = array (
);$array150['line'] = $renderingContext->getVariableProvider()->getByPath('line.actions', $array151);
$arguments148['arguments'] = $array150;

$output90 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output90 .= '
        </td>
    </tr>
';

return $output90;
}
/**
 * section action
 */
public function section_34eb4c4ef005207e8b8f916b9f1fffacccd6945e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output152 = '';

$output152 .= '
    <div class="btn-group" role="group">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
            <a class="btn btn-default btn-sm" href="#" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$array161 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.previewUrlAttributes', $array161);
};
$arguments159 = array();
$arguments159['value'] = NULL;

$output158 .= isset($arguments159['value']) ? $arguments159['value'] : $renderChildrenClosure160();

$output158 .= ' title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['key'] = NULL;
$arguments162['id'] = NULL;
$arguments162['default'] = NULL;
$arguments162['arguments'] = NULL;
$arguments162['extensionName'] = NULL;
$arguments162['languageKey'] = NULL;
$arguments162['alternativeLanguageKeys'] = NULL;
$arguments162['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.showPage';

$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext)]);

$output158 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['identifier'] = NULL;
$arguments164['size'] = 'small';
$arguments164['overlay'] = NULL;
$arguments164['state'] = 'default';
$arguments164['alternativeMarkupIdentifier'] = NULL;
$arguments164['identifier'] = 'actions-document-view';
$arguments164['size'] = 'small';

$output158 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output158 .= '
            </a>
        ';
return $output158;
};
$arguments153 = array();
$arguments153['then'] = NULL;
$arguments153['else'] = NULL;
$arguments153['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['0'] = $renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array156);

$expression157 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments153['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);
$arguments153['__thenClosure'] = $renderChildrenClosure154;

$output152 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
        <a class="btn btn-default btn-sm" href="';
$array166 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordEditUrl', $array166)]);

$output152 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['key'] = NULL;
$arguments167['id'] = NULL;
$arguments167['default'] = NULL;
$arguments167['arguments'] = NULL;
$arguments167['extensionName'] = NULL;
$arguments167['languageKey'] = NULL;
$arguments167['alternativeLanguageKeys'] = NULL;
$arguments167['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.edit';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext)]);

$output152 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['identifier'] = NULL;
$arguments169['size'] = 'small';
$arguments169['overlay'] = NULL;
$arguments169['state'] = 'default';
$arguments169['alternativeMarkupIdentifier'] = NULL;
$arguments169['identifier'] = 'actions-open';
$arguments169['size'] = 'small';

$output152 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output152 .= '
        </a>
    </div>
    <div class="btn-group" role="group">
        <a class="btn btn-default btn-sm" href="';
$array171 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordHistoryUrl', $array171)]);

$output152 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['key'] = NULL;
$arguments172['id'] = NULL;
$arguments172['default'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['extensionName'] = NULL;
$arguments172['languageKey'] = NULL;
$arguments172['alternativeLanguageKeys'] = NULL;
$arguments172['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.history';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext)]);

$output152 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();
$arguments174['identifier'] = NULL;
$arguments174['size'] = 'small';
$arguments174['overlay'] = NULL;
$arguments174['state'] = 'default';
$arguments174['alternativeMarkupIdentifier'] = NULL;
$arguments174['identifier'] = 'actions-document-history-open';
$arguments174['size'] = 'small';

$output152 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output152 .= '
        </a>
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
        <div class="btn-group" role="group">
            <a class="btn btn-default btn-sm" href="';
$array182 = array (
);
$output181 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array182)]);

$output181 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['key'] = NULL;
$arguments183['id'] = NULL;
$arguments183['default'] = NULL;
$arguments183['arguments'] = NULL;
$arguments183['extensionName'] = NULL;
$arguments183['languageKey'] = NULL;
$arguments183['alternativeLanguageKeys'] = NULL;
$arguments183['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.showList';

$output181 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext)]);

$output181 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['identifier'] = NULL;
$arguments185['size'] = 'small';
$arguments185['overlay'] = NULL;
$arguments185['state'] = 'default';
$arguments185['alternativeMarkupIdentifier'] = NULL;
$arguments185['identifier'] = 'actions-system-list-open';
$arguments185['size'] = 'small';

$output181 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output181 .= '
            </a>
        </div>
    ';
return $output181;
};
$arguments176 = array();
$arguments176['then'] = NULL;
$arguments176['else'] = NULL;
$arguments176['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = array();
$array179 = array (
);$array178['0'] = $renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array179);

$expression180 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments176['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$arguments176['__thenClosure'] = $renderChildrenClosure177;

$output152 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output152 .= '
';

return $output152;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output187 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$output378 = '';

$output378 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
        <div class="card-container">
            <div class="card card-size-medium">

                <div class="card-header">
                    <div class="card-icon">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$array384 = array (
);return $renderingContext->getVariableProvider()->getByPath('icon', $array384);
};
$arguments382 = array();
$arguments382['value'] = NULL;

$output381 .= isset($arguments382['value']) ? $arguments382['value'] : $renderChildrenClosure383();

$output381 .= '
                    </div>

                    <div class="card-header-body">
                        <h1 class="card-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$array388 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array388)]);
};
$arguments385 = array();
$arguments385['maxCharacters'] = NULL;
$arguments385['append'] = '&hellip;';
$arguments385['respectWordBoundaries'] = true;
$arguments385['respectHtml'] = true;
$array387 = array (
);$arguments385['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array387);

$output381 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
$output394 = '';

$output394 .= '<code>[';
$array395 = array (
);
$output394 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.uid.value', $array395)]);

$output394 .= ']</code>';
return $output394;
};
$arguments389 = array();
$arguments389['then'] = NULL;
$arguments389['else'] = NULL;
$arguments389['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array391 = array();
$array392 = array (
);$array391['0'] = $renderingContext->getVariableProvider()->getByPath('extraFields.uid.value', $array392);

$expression393 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments389['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression393(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array391)
					),
					$renderingContext
				);
$arguments389['__thenClosure'] = $renderChildrenClosure390;

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output381 .= '</h1>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
                            <span class="card-subtitle">';
$array402 = array (
);
$output401 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('table', $array402)]);

$output401 .= '</span>
                        ';
return $output401;
};
$arguments396 = array();
$arguments396['then'] = NULL;
$arguments396['else'] = NULL;
$arguments396['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array398 = array();
$array399 = array (
);$array398['0'] = $renderingContext->getVariableProvider()->getByPath('table', $array399);

$expression400 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments396['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression400(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array398)
					),
					$renderingContext
				);
$arguments396['__thenClosure'] = $renderChildrenClosure397;

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output381 .= '
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
$output406 = '';

$output406 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
$output412 = '';

$output412 .= '
                                <div class="col-md-6">
                                    <strong>';
$array413 = array (
);
$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraField.fieldLabel', $array413)]);

$output412 .= '</strong><br>
                                    ';
$array414 = array (
);
$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraField.value', $array414)]);

$output412 .= '
                                </div>
                            ';
return $output412;
};
$arguments407 = array();
$arguments407['then'] = NULL;
$arguments407['else'] = NULL;
$arguments407['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array409 = array();
$array410 = array (
);$array409['0'] = $renderingContext->getVariableProvider()->getByPath('extraField.isDatetime', $array410);

$expression411 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments407['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression411(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array409)
					),
					$renderingContext
				);
$arguments407['__thenClosure'] = $renderChildrenClosure408;

$output406 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments407, $renderChildrenClosure408, $renderingContext);

$output406 .= '
                        ';
return $output406;
};
$arguments403 = array();
$arguments403['each'] = NULL;
$arguments403['as'] = NULL;
$arguments403['key'] = NULL;
$arguments403['reverse'] = false;
$arguments403['iteration'] = NULL;
$array405 = array (
);$arguments403['each'] = $renderingContext->getVariableProvider()->getByPath('extraFields', $array405);
$arguments403['as'] = 'extraField';

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext);

$output381 .= '
                    </div>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
$output420 = '';

$output420 .= '
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="media">
                                    <div class="media-left">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
$array423 = array (
);return $renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.icon', $array423);
};
$arguments421 = array();
$arguments421['value'] = NULL;

$output420 .= isset($arguments421['value']) ? $arguments421['value'] : $renderChildrenClosure422();

$output420 .= '
                                    </div>
                                    <div class="media-body">
                                        <strong>';
$array424 = array (
);
$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.username', $array424)]);

$output420 .= '</strong><br>
                                        ';
$array425 = array (
);
$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.realName', $array425)]);

$output420 .= '
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
return $output420;
};
$arguments415 = array();
$arguments415['then'] = NULL;
$arguments415['else'] = NULL;
$arguments415['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array417 = array();
$array418 = array (
);$array417['0'] = $renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord', $array418);

$expression419 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments415['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression419(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array417)
					),
					$renderingContext
				);
$arguments415['__thenClosure'] = $renderChildrenClosure416;

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);

$output381 .= '
                </div>
            </div>
        </div>


        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
$output431 = '';

$output431 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
$array436 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('missingFile', $array436)]);
};
$arguments432 = array();
$arguments432['message'] = NULL;
$arguments432['title'] = NULL;
$arguments432['state'] = -2;
$arguments432['iconName'] = NULL;
$arguments432['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments434 = array();
$arguments434['key'] = NULL;
$arguments434['id'] = NULL;
$arguments434['default'] = NULL;
$arguments434['arguments'] = NULL;
$arguments434['extensionName'] = NULL;
$arguments434['languageKey'] = NULL;
$arguments434['alternativeLanguageKeys'] = NULL;
$arguments434['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:warning.file_missing';
$arguments432['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext);
$arguments432['state'] = 1;
$renderChildrenClosure433 = ($arguments432['message'] !== null) ? function() use ($arguments432) { return $arguments432['message']; } : $renderChildrenClosure433;
$output431 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output431 .= '
        ';
return $output431;
};
$arguments426 = array();
$arguments426['then'] = NULL;
$arguments426['else'] = NULL;
$arguments426['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array428 = array();
$array429 = array (
);$array428['0'] = $renderingContext->getVariableProvider()->getByPath('missingFile', $array429);

$expression430 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments426['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression430(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array428)
					),
					$renderingContext
				);
$arguments426['__thenClosure'] = $renderChildrenClosure427;

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);

$output381 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
$output442 = '';

$output442 .= '
            <p>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
$array445 = array (
);return $renderingContext->getVariableProvider()->getByPath('fileRenderer', $array445);
};
$arguments443 = array();
$arguments443['value'] = NULL;

$output442 .= isset($arguments443['value']) ? $arguments443['value'] : $renderChildrenClosure444();

$output442 .= '
            </p>
        ';
return $output442;
};
$arguments437 = array();
$arguments437['then'] = NULL;
$arguments437['else'] = NULL;
$arguments437['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array439 = array();
$array440 = array (
);$array439['0'] = $renderingContext->getVariableProvider()->getByPath('fileRenderer', $array440);

$expression441 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments437['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression441(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array439)
					),
					$renderingContext
				);
$arguments437['__thenClosure'] = $renderChildrenClosure438;

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext);

$output381 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
$output451 = '';

$output451 .= '
            <p>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments452 = array();
$arguments452['additionalAttributes'] = NULL;
$arguments452['data'] = NULL;
$arguments452['aria'] = NULL;
$arguments452['class'] = NULL;
$arguments452['dir'] = NULL;
$arguments452['id'] = NULL;
$arguments452['lang'] = NULL;
$arguments452['style'] = NULL;
$arguments452['title'] = NULL;
$arguments452['accesskey'] = NULL;
$arguments452['tabindex'] = NULL;
$arguments452['onclick'] = NULL;
$arguments452['alt'] = NULL;
$arguments452['file'] = NULL;
$arguments452['additionalConfig'] = array (
);
$arguments452['width'] = NULL;
$arguments452['height'] = NULL;
$arguments452['cropVariant'] = 'default';
$arguments452['fileExtension'] = NULL;
$arguments452['loading'] = NULL;
$arguments452['decoding'] = NULL;
$array454 = array (
);$arguments452['file'] = $renderingContext->getVariableProvider()->getByPath('fileObject', $array454);
$array455 = array (
);$arguments452['width'] = $renderingContext->getVariableProvider()->getByPath('width', $array455);
$array456 = array (
);$arguments452['height'] = $renderingContext->getVariableProvider()->getByPath('height', $array456);

$output451 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext);

$output451 .= '
            </p>
        ';
return $output451;
};
$arguments446 = array();
$arguments446['then'] = NULL;
$arguments446['else'] = NULL;
$arguments446['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array448 = array();
$array449 = array (
);$array448['0'] = $renderingContext->getVariableProvider()->getByPath('fileObject', $array449);

$expression450 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments446['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression450(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array448)
					),
					$renderingContext
				);
$arguments446['__thenClosure'] = $renderChildrenClosure447;

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext);

$output381 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$output462 = '';

$output462 .= '
            <p>
                <a class="btn btn-default" href="';
$array463 = array (
);
$output462 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array463)]);

$output462 .= '" target="_blank" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments464 = array();
$arguments464['key'] = NULL;
$arguments464['id'] = NULL;
$arguments464['default'] = NULL;
$arguments464['arguments'] = NULL;
$arguments464['extensionName'] = NULL;
$arguments464['languageKey'] = NULL;
$arguments464['alternativeLanguageKeys'] = NULL;
$arguments464['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.show';

$output462 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext)]);

$output462 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments466 = array();
$arguments466['identifier'] = NULL;
$arguments466['size'] = 'small';
$arguments466['overlay'] = NULL;
$arguments466['state'] = 'default';
$arguments466['alternativeMarkupIdentifier'] = NULL;
$arguments466['identifier'] = 'actions-document-view';
$arguments466['size'] = 'small';
$arguments466['alternativeMarkupIdentifier'] = 'inline';

$output462 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output462 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['key'] = NULL;
$arguments468['id'] = NULL;
$arguments468['default'] = NULL;
$arguments468['arguments'] = NULL;
$arguments468['extensionName'] = NULL;
$arguments468['languageKey'] = NULL;
$arguments468['alternativeLanguageKeys'] = NULL;
$arguments468['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.show';

$output462 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext)]);

$output462 .= '
                </a>
            </p>
        ';
return $output462;
};
$arguments457 = array();
$arguments457['then'] = NULL;
$arguments457['else'] = NULL;
$arguments457['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array459 = array();
$array460 = array (
);$array459['0'] = $renderingContext->getVariableProvider()->getByPath('url', $array460);

$expression461 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments457['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression461(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array459)
					),
					$renderingContext
				);
$arguments457['__thenClosure'] = $renderChildrenClosure458;

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output381 .= '
        <div class="table-fit table-fit-wrap">
            <table class="table table-striped table-hover">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
$output473 = '';

$output473 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments474 = array();
$arguments474['section'] = NULL;
$arguments474['partial'] = NULL;
$arguments474['delegate'] = NULL;
$arguments474['renderable'] = NULL;
$arguments474['arguments'] = array (
);
$arguments474['optional'] = false;
$arguments474['default'] = NULL;
$arguments474['contentAs'] = NULL;
$arguments474['debug'] = true;
$arguments474['section'] = 'fieldRow';
// Rendering Array
$array476 = array();
$array477 = array (
);$array476['row'] = $renderingContext->getVariableProvider()->getByPath('field', $array477);
$arguments474['arguments'] = $array476;

$output473 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments474, $renderChildrenClosure475, $renderingContext);

$output473 .= '
                ';
return $output473;
};
$arguments470 = array();
$arguments470['each'] = NULL;
$arguments470['as'] = NULL;
$arguments470['key'] = NULL;
$arguments470['reverse'] = false;
$arguments470['iteration'] = NULL;
$array472 = array (
);$arguments470['each'] = $renderingContext->getVariableProvider()->getByPath('fields', $array472);
$arguments470['as'] = 'field';

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output381 .= '
            </table>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$output483 = '';

$output483 .= '
            <a class="btn btn-primary" href="';
$array484 = array (
);
$output483 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('returnUrl', $array484)]);

$output483 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments485 = array();
$arguments485['key'] = NULL;
$arguments485['id'] = NULL;
$arguments485['default'] = NULL;
$arguments485['arguments'] = NULL;
$arguments485['extensionName'] = NULL;
$arguments485['languageKey'] = NULL;
$arguments485['alternativeLanguageKeys'] = NULL;
$arguments485['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:back';

$output483 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext)]);

$output483 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments487 = array();
$arguments487['identifier'] = NULL;
$arguments487['size'] = 'small';
$arguments487['overlay'] = NULL;
$arguments487['state'] = 'default';
$arguments487['alternativeMarkupIdentifier'] = NULL;
$arguments487['identifier'] = 'actions-view-go-back';
$arguments487['size'] = 'small';

$output483 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext);

$output483 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments489 = array();
$arguments489['key'] = NULL;
$arguments489['id'] = NULL;
$arguments489['default'] = NULL;
$arguments489['arguments'] = NULL;
$arguments489['extensionName'] = NULL;
$arguments489['languageKey'] = NULL;
$arguments489['alternativeLanguageKeys'] = NULL;
$arguments489['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:back';

$output483 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext)]);

$output483 .= '
            </a>
        ';
return $output483;
};
$arguments478 = array();
$arguments478['then'] = NULL;
$arguments478['else'] = NULL;
$arguments478['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array480 = array();
$array481 = array (
);$array480['0'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array481);

$expression482 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments478['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression482(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array480)
					),
					$renderingContext
				);
$arguments478['__thenClosure'] = $renderChildrenClosure479;

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output381 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
$output496 = '';

$output496 .= '
            <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments497 = array();
$arguments497['key'] = NULL;
$arguments497['id'] = NULL;
$arguments497['default'] = NULL;
$arguments497['arguments'] = NULL;
$arguments497['extensionName'] = NULL;
$arguments497['languageKey'] = NULL;
$arguments497['alternativeLanguageKeys'] = NULL;
$arguments497['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.referencesToThisItem';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext)]);

$output496 .= '</h3>
            <div class="table-fit">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="col-icon"></th>
                        <th class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure500 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments499 = array();
$arguments499['key'] = NULL;
$arguments499['id'] = NULL;
$arguments499['default'] = NULL;
$arguments499['arguments'] = NULL;
$arguments499['extensionName'] = NULL;
$arguments499['languageKey'] = NULL;
$arguments499['alternativeLanguageKeys'] = NULL;
$arguments499['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.title';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments499, $renderChildrenClosure500, $renderingContext)]);

$output496 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments501 = array();
$arguments501['key'] = NULL;
$arguments501['id'] = NULL;
$arguments501['default'] = NULL;
$arguments501['arguments'] = NULL;
$arguments501['extensionName'] = NULL;
$arguments501['languageKey'] = NULL;
$arguments501['alternativeLanguageKeys'] = NULL;
$arguments501['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.table';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext)]);

$output496 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments503 = array();
$arguments503['key'] = NULL;
$arguments503['id'] = NULL;
$arguments503['default'] = NULL;
$arguments503['arguments'] = NULL;
$arguments503['extensionName'] = NULL;
$arguments503['languageKey'] = NULL;
$arguments503['alternativeLanguageKeys'] = NULL;
$arguments503['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.uid';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext)]);

$output496 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments505 = array();
$arguments505['key'] = NULL;
$arguments505['id'] = NULL;
$arguments505['default'] = NULL;
$arguments505['arguments'] = NULL;
$arguments505['extensionName'] = NULL;
$arguments505['languageKey'] = NULL;
$arguments505['alternativeLanguageKeys'] = NULL;
$arguments505['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext)]);

$output496 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure508 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments507 = array();
$arguments507['key'] = NULL;
$arguments507['id'] = NULL;
$arguments507['default'] = NULL;
$arguments507['arguments'] = NULL;
$arguments507['extensionName'] = NULL;
$arguments507['languageKey'] = NULL;
$arguments507['alternativeLanguageKeys'] = NULL;
$arguments507['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments507, $renderChildrenClosure508, $renderingContext)]);

$output496 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments509 = array();
$arguments509['key'] = NULL;
$arguments509['id'] = NULL;
$arguments509['default'] = NULL;
$arguments509['arguments'] = NULL;
$arguments509['extensionName'] = NULL;
$arguments509['languageKey'] = NULL;
$arguments509['alternativeLanguageKeys'] = NULL;
$arguments509['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.field';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext)]);

$output496 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments511 = array();
$arguments511['key'] = NULL;
$arguments511['id'] = NULL;
$arguments511['default'] = NULL;
$arguments511['arguments'] = NULL;
$arguments511['extensionName'] = NULL;
$arguments511['languageKey'] = NULL;
$arguments511['alternativeLanguageKeys'] = NULL;
$arguments511['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.flexpointer';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext)]);

$output496 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments513 = array();
$arguments513['key'] = NULL;
$arguments513['id'] = NULL;
$arguments513['default'] = NULL;
$arguments513['arguments'] = NULL;
$arguments513['extensionName'] = NULL;
$arguments513['languageKey'] = NULL;
$arguments513['alternativeLanguageKeys'] = NULL;
$arguments513['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.softrefKey';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext)]);

$output496 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments515 = array();
$arguments515['key'] = NULL;
$arguments515['id'] = NULL;
$arguments515['default'] = NULL;
$arguments515['arguments'] = NULL;
$arguments515['extensionName'] = NULL;
$arguments515['languageKey'] = NULL;
$arguments515['alternativeLanguageKeys'] = NULL;
$arguments515['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.sorting';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext)]);

$output496 .= '</th>
                        <th class="col-control"></th>
                    </tr>
                    </thead>
                    <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
$output520 = '';

$output520 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure522 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments521 = array();
$arguments521['section'] = NULL;
$arguments521['partial'] = NULL;
$arguments521['delegate'] = NULL;
$arguments521['renderable'] = NULL;
$arguments521['arguments'] = array (
);
$arguments521['optional'] = false;
$arguments521['default'] = NULL;
$arguments521['contentAs'] = NULL;
$arguments521['debug'] = true;
$arguments521['section'] = 'refLineRow';
// Rendering Array
$array523 = array();
$array524 = array (
);$array523['line'] = $renderingContext->getVariableProvider()->getByPath('refLine', $array524);
$array525 = array (
);$array523['maxTitleLength'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array525);
$arguments521['arguments'] = $array523;

$output520 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments521, $renderChildrenClosure522, $renderingContext);

$output520 .= '
                    ';
return $output520;
};
$arguments517 = array();
$arguments517['each'] = NULL;
$arguments517['as'] = NULL;
$arguments517['key'] = NULL;
$arguments517['reverse'] = false;
$arguments517['iteration'] = NULL;
$array519 = array (
);$arguments517['each'] = $renderingContext->getVariableProvider()->getByPath('refLines', $array519);
$arguments517['as'] = 'refLine';

$output496 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext);

$output496 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output496;
};
$arguments491 = array();
$arguments491['then'] = NULL;
$arguments491['else'] = NULL;
$arguments491['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array493 = array();
$array494 = array (
);$array493['0'] = $renderingContext->getVariableProvider()->getByPath('refLines', $array494);

$expression495 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments491['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression495(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array493)
					),
					$renderingContext
				);
$arguments491['__thenClosure'] = $renderChildrenClosure492;

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext);

$output381 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
$output531 = '';

$output531 .= '
            <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments532 = array();
$arguments532['key'] = NULL;
$arguments532['id'] = NULL;
$arguments532['default'] = NULL;
$arguments532['arguments'] = NULL;
$arguments532['extensionName'] = NULL;
$arguments532['languageKey'] = NULL;
$arguments532['alternativeLanguageKeys'] = NULL;
$arguments532['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.referencesFromThisItem';

$output531 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext)]);

$output531 .= '</h3>
            <div class="table-fit">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="col-icon"></th>
                        <th class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments534 = array();
$arguments534['key'] = NULL;
$arguments534['id'] = NULL;
$arguments534['default'] = NULL;
$arguments534['arguments'] = NULL;
$arguments534['extensionName'] = NULL;
$arguments534['languageKey'] = NULL;
$arguments534['alternativeLanguageKeys'] = NULL;
$arguments534['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.title';

$output531 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext)]);

$output531 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments536 = array();
$arguments536['key'] = NULL;
$arguments536['id'] = NULL;
$arguments536['default'] = NULL;
$arguments536['arguments'] = NULL;
$arguments536['extensionName'] = NULL;
$arguments536['languageKey'] = NULL;
$arguments536['alternativeLanguageKeys'] = NULL;
$arguments536['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.table';

$output531 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext)]);

$output531 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure539 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments538 = array();
$arguments538['key'] = NULL;
$arguments538['id'] = NULL;
$arguments538['default'] = NULL;
$arguments538['arguments'] = NULL;
$arguments538['extensionName'] = NULL;
$arguments538['languageKey'] = NULL;
$arguments538['alternativeLanguageKeys'] = NULL;
$arguments538['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.uid';

$output531 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments538, $renderChildrenClosure539, $renderingContext)]);

$output531 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments540 = array();
$arguments540['key'] = NULL;
$arguments540['id'] = NULL;
$arguments540['default'] = NULL;
$arguments540['arguments'] = NULL;
$arguments540['extensionName'] = NULL;
$arguments540['languageKey'] = NULL;
$arguments540['alternativeLanguageKeys'] = NULL;
$arguments540['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output531 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext)]);

$output531 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments542 = array();
$arguments542['key'] = NULL;
$arguments542['id'] = NULL;
$arguments542['default'] = NULL;
$arguments542['arguments'] = NULL;
$arguments542['extensionName'] = NULL;
$arguments542['languageKey'] = NULL;
$arguments542['alternativeLanguageKeys'] = NULL;
$arguments542['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.field';

$output531 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext)]);

$output531 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['key'] = NULL;
$arguments544['id'] = NULL;
$arguments544['default'] = NULL;
$arguments544['arguments'] = NULL;
$arguments544['extensionName'] = NULL;
$arguments544['languageKey'] = NULL;
$arguments544['alternativeLanguageKeys'] = NULL;
$arguments544['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.flexpointer';

$output531 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext)]);

$output531 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments546 = array();
$arguments546['key'] = NULL;
$arguments546['id'] = NULL;
$arguments546['default'] = NULL;
$arguments546['arguments'] = NULL;
$arguments546['extensionName'] = NULL;
$arguments546['languageKey'] = NULL;
$arguments546['alternativeLanguageKeys'] = NULL;
$arguments546['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.softrefKey';

$output531 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments546, $renderChildrenClosure547, $renderingContext)]);

$output531 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure549 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments548 = array();
$arguments548['key'] = NULL;
$arguments548['id'] = NULL;
$arguments548['default'] = NULL;
$arguments548['arguments'] = NULL;
$arguments548['extensionName'] = NULL;
$arguments548['languageKey'] = NULL;
$arguments548['alternativeLanguageKeys'] = NULL;
$arguments548['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.sorting';

$output531 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments548, $renderChildrenClosure549, $renderingContext)]);

$output531 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments550 = array();
$arguments550['key'] = NULL;
$arguments550['id'] = NULL;
$arguments550['default'] = NULL;
$arguments550['arguments'] = NULL;
$arguments550['extensionName'] = NULL;
$arguments550['languageKey'] = NULL;
$arguments550['alternativeLanguageKeys'] = NULL;
$arguments550['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.refString';

$output531 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext)]);

$output531 .= '</th>
                        <th class="col-control"></th>
                    </tr>
                    </thead>
                    <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure553 = function() use ($renderingContext, $self) {
$output555 = '';

$output555 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments556 = array();
$arguments556['section'] = NULL;
$arguments556['partial'] = NULL;
$arguments556['delegate'] = NULL;
$arguments556['renderable'] = NULL;
$arguments556['arguments'] = array (
);
$arguments556['optional'] = false;
$arguments556['default'] = NULL;
$arguments556['contentAs'] = NULL;
$arguments556['debug'] = true;
$arguments556['section'] = 'refFromLineRow';
// Rendering Array
$array558 = array();
$array559 = array (
);$array558['line'] = $renderingContext->getVariableProvider()->getByPath('refFromLine', $array559);
$array560 = array (
);$array558['maxTitleLength'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array560);
$arguments556['arguments'] = $array558;

$output555 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext);

$output555 .= '
                    ';
return $output555;
};
$arguments552 = array();
$arguments552['each'] = NULL;
$arguments552['as'] = NULL;
$arguments552['key'] = NULL;
$arguments552['reverse'] = false;
$arguments552['iteration'] = NULL;
$array554 = array (
);$arguments552['each'] = $renderingContext->getVariableProvider()->getByPath('refFromLines', $array554);
$arguments552['as'] = 'refFromLine';

$output531 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments552, $renderChildrenClosure553, $renderingContext);

$output531 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output531;
};
$arguments526 = array();
$arguments526['then'] = NULL;
$arguments526['else'] = NULL;
$arguments526['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array528 = array();
$array529 = array (
);$array528['0'] = $renderingContext->getVariableProvider()->getByPath('refFromLines', $array529);

$expression530 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments526['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression530(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array528)
					),
					$renderingContext
				);
$arguments526['__thenClosure'] = $renderChildrenClosure527;

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output381 .= '
    ';
return $output381;
};
$arguments379 = array();

$output378 .= '';

$output378 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure562 = function() use ($renderingContext, $self) {
$output563 = '';

$output563 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments566 = array();
$arguments566['key'] = NULL;
$arguments566['id'] = NULL;
$arguments566['default'] = NULL;
$arguments566['arguments'] = NULL;
$arguments566['extensionName'] = NULL;
$arguments566['languageKey'] = NULL;
$arguments566['alternativeLanguageKeys'] = NULL;
$arguments566['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.noEditPermission';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext)]);
};
$arguments564 = array();
$arguments564['message'] = NULL;
$arguments564['title'] = NULL;
$arguments564['state'] = -2;
$arguments564['iconName'] = NULL;
$arguments564['disableIcon'] = false;
$arguments564['state'] = 2;
$renderChildrenClosure565 = ($arguments564['message'] !== null) ? function() use ($arguments564) { return $arguments564['message']; } : $renderChildrenClosure565;
$output563 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext);

$output563 .= '
    ';
return $output563;
};
$arguments561 = array();
$arguments561['if'] = NULL;

$output378 .= '';

$output378 .= '
';
return $output378;
};
$arguments188 = array();
$arguments188['then'] = NULL;
$arguments188['else'] = NULL;
$arguments188['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array375 = array();
$array376 = array (
);$array375['0'] = $renderingContext->getVariableProvider()->getByPath('accessAllowed', $array376);

$expression377 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments188['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression377(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array375)
					),
					$renderingContext
				);
$arguments188['__thenClosure'] = function() use ($renderingContext, $self) {
$output190 = '';

$output190 .= '
        <div class="card-container">
            <div class="card card-size-medium">

                <div class="card-header">
                    <div class="card-icon">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$array193 = array (
);return $renderingContext->getVariableProvider()->getByPath('icon', $array193);
};
$arguments191 = array();
$arguments191['value'] = NULL;

$output190 .= isset($arguments191['value']) ? $arguments191['value'] : $renderChildrenClosure192();

$output190 .= '
                    </div>

                    <div class="card-header-body">
                        <h1 class="card-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$array197 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array197)]);
};
$arguments194 = array();
$arguments194['maxCharacters'] = NULL;
$arguments194['append'] = '&hellip;';
$arguments194['respectWordBoundaries'] = true;
$arguments194['respectHtml'] = true;
$array196 = array (
);$arguments194['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array196);

$output190 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '<code>[';
$array204 = array (
);
$output203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.uid.value', $array204)]);

$output203 .= ']</code>';
return $output203;
};
$arguments198 = array();
$arguments198['then'] = NULL;
$arguments198['else'] = NULL;
$arguments198['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array200 = array();
$array201 = array (
);$array200['0'] = $renderingContext->getVariableProvider()->getByPath('extraFields.uid.value', $array201);

$expression202 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments198['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression202(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array200)
					),
					$renderingContext
				);
$arguments198['__thenClosure'] = $renderChildrenClosure199;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output190 .= '</h1>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
                            <span class="card-subtitle">';
$array211 = array (
);
$output210 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('table', $array211)]);

$output210 .= '</span>
                        ';
return $output210;
};
$arguments205 = array();
$arguments205['then'] = NULL;
$arguments205['else'] = NULL;
$arguments205['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array207 = array();
$array208 = array (
);$array207['0'] = $renderingContext->getVariableProvider()->getByPath('table', $array208);

$expression209 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments205['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression209(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array207)
					),
					$renderingContext
				);
$arguments205['__thenClosure'] = $renderChildrenClosure206;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output190 .= '
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
                                <div class="col-md-6">
                                    <strong>';
$array222 = array (
);
$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraField.fieldLabel', $array222)]);

$output221 .= '</strong><br>
                                    ';
$array223 = array (
);
$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraField.value', $array223)]);

$output221 .= '
                                </div>
                            ';
return $output221;
};
$arguments216 = array();
$arguments216['then'] = NULL;
$arguments216['else'] = NULL;
$arguments216['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array218 = array();
$array219 = array (
);$array218['0'] = $renderingContext->getVariableProvider()->getByPath('extraField.isDatetime', $array219);

$expression220 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments216['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression220(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array218)
					),
					$renderingContext
				);
$arguments216['__thenClosure'] = $renderChildrenClosure217;

$output215 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output215 .= '
                        ';
return $output215;
};
$arguments212 = array();
$arguments212['each'] = NULL;
$arguments212['as'] = NULL;
$arguments212['key'] = NULL;
$arguments212['reverse'] = false;
$arguments212['iteration'] = NULL;
$array214 = array (
);$arguments212['each'] = $renderingContext->getVariableProvider()->getByPath('extraFields', $array214);
$arguments212['as'] = 'extraField';

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output190 .= '
                    </div>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output229 = '';

$output229 .= '
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="media">
                                    <div class="media-left">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$array232 = array (
);return $renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.icon', $array232);
};
$arguments230 = array();
$arguments230['value'] = NULL;

$output229 .= isset($arguments230['value']) ? $arguments230['value'] : $renderChildrenClosure231();

$output229 .= '
                                    </div>
                                    <div class="media-body">
                                        <strong>';
$array233 = array (
);
$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.username', $array233)]);

$output229 .= '</strong><br>
                                        ';
$array234 = array (
);
$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord.value.realName', $array234)]);

$output229 .= '
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
return $output229;
};
$arguments224 = array();
$arguments224['then'] = NULL;
$arguments224['else'] = NULL;
$arguments224['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array226 = array();
$array227 = array (
);$array226['0'] = $renderingContext->getVariableProvider()->getByPath('extraFields.creatorRecord', $array227);

$expression228 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments224['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression228(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array226)
					),
					$renderingContext
				);
$arguments224['__thenClosure'] = $renderChildrenClosure225;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output190 .= '
                </div>
            </div>
        </div>


        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$array245 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('missingFile', $array245)]);
};
$arguments241 = array();
$arguments241['message'] = NULL;
$arguments241['title'] = NULL;
$arguments241['state'] = -2;
$arguments241['iconName'] = NULL;
$arguments241['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['key'] = NULL;
$arguments243['id'] = NULL;
$arguments243['default'] = NULL;
$arguments243['arguments'] = NULL;
$arguments243['extensionName'] = NULL;
$arguments243['languageKey'] = NULL;
$arguments243['alternativeLanguageKeys'] = NULL;
$arguments243['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:warning.file_missing';
$arguments241['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);
$arguments241['state'] = 1;
$renderChildrenClosure242 = ($arguments241['message'] !== null) ? function() use ($arguments241) { return $arguments241['message']; } : $renderChildrenClosure242;
$output240 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
        ';
return $output240;
};
$arguments235 = array();
$arguments235['then'] = NULL;
$arguments235['else'] = NULL;
$arguments235['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array237 = array();
$array238 = array (
);$array237['0'] = $renderingContext->getVariableProvider()->getByPath('missingFile', $array238);

$expression239 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments235['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression239(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array237)
					),
					$renderingContext
				);
$arguments235['__thenClosure'] = $renderChildrenClosure236;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output190 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
            <p>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$array254 = array (
);return $renderingContext->getVariableProvider()->getByPath('fileRenderer', $array254);
};
$arguments252 = array();
$arguments252['value'] = NULL;

$output251 .= isset($arguments252['value']) ? $arguments252['value'] : $renderChildrenClosure253();

$output251 .= '
            </p>
        ';
return $output251;
};
$arguments246 = array();
$arguments246['then'] = NULL;
$arguments246['else'] = NULL;
$arguments246['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['0'] = $renderingContext->getVariableProvider()->getByPath('fileRenderer', $array249);

$expression250 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments246['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array248)
					),
					$renderingContext
				);
$arguments246['__thenClosure'] = $renderChildrenClosure247;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output190 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
            <p>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['additionalAttributes'] = NULL;
$arguments261['data'] = NULL;
$arguments261['aria'] = NULL;
$arguments261['class'] = NULL;
$arguments261['dir'] = NULL;
$arguments261['id'] = NULL;
$arguments261['lang'] = NULL;
$arguments261['style'] = NULL;
$arguments261['title'] = NULL;
$arguments261['accesskey'] = NULL;
$arguments261['tabindex'] = NULL;
$arguments261['onclick'] = NULL;
$arguments261['alt'] = NULL;
$arguments261['file'] = NULL;
$arguments261['additionalConfig'] = array (
);
$arguments261['width'] = NULL;
$arguments261['height'] = NULL;
$arguments261['cropVariant'] = 'default';
$arguments261['fileExtension'] = NULL;
$arguments261['loading'] = NULL;
$arguments261['decoding'] = NULL;
$array263 = array (
);$arguments261['file'] = $renderingContext->getVariableProvider()->getByPath('fileObject', $array263);
$array264 = array (
);$arguments261['width'] = $renderingContext->getVariableProvider()->getByPath('width', $array264);
$array265 = array (
);$arguments261['height'] = $renderingContext->getVariableProvider()->getByPath('height', $array265);

$output260 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output260 .= '
            </p>
        ';
return $output260;
};
$arguments255 = array();
$arguments255['then'] = NULL;
$arguments255['else'] = NULL;
$arguments255['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array257 = array();
$array258 = array (
);$array257['0'] = $renderingContext->getVariableProvider()->getByPath('fileObject', $array258);

$expression259 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments255['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression259(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array257)
					),
					$renderingContext
				);
$arguments255['__thenClosure'] = $renderChildrenClosure256;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output190 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
            <p>
                <a class="btn btn-default" href="';
$array272 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array272)]);

$output271 .= '" target="_blank" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['key'] = NULL;
$arguments273['id'] = NULL;
$arguments273['default'] = NULL;
$arguments273['arguments'] = NULL;
$arguments273['extensionName'] = NULL;
$arguments273['languageKey'] = NULL;
$arguments273['alternativeLanguageKeys'] = NULL;
$arguments273['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.show';

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext)]);

$output271 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['identifier'] = NULL;
$arguments275['size'] = 'small';
$arguments275['overlay'] = NULL;
$arguments275['state'] = 'default';
$arguments275['alternativeMarkupIdentifier'] = NULL;
$arguments275['identifier'] = 'actions-document-view';
$arguments275['size'] = 'small';
$arguments275['alternativeMarkupIdentifier'] = 'inline';

$output271 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output271 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments277 = array();
$arguments277['key'] = NULL;
$arguments277['id'] = NULL;
$arguments277['default'] = NULL;
$arguments277['arguments'] = NULL;
$arguments277['extensionName'] = NULL;
$arguments277['languageKey'] = NULL;
$arguments277['alternativeLanguageKeys'] = NULL;
$arguments277['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.show';

$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext)]);

$output271 .= '
                </a>
            </p>
        ';
return $output271;
};
$arguments266 = array();
$arguments266['then'] = NULL;
$arguments266['else'] = NULL;
$arguments266['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array268 = array();
$array269 = array (
);$array268['0'] = $renderingContext->getVariableProvider()->getByPath('url', $array269);

$expression270 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments266['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression270(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array268)
					),
					$renderingContext
				);
$arguments266['__thenClosure'] = $renderChildrenClosure267;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output190 .= '
        <div class="table-fit table-fit-wrap">
            <table class="table table-striped table-hover">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$output282 = '';

$output282 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['section'] = NULL;
$arguments283['partial'] = NULL;
$arguments283['delegate'] = NULL;
$arguments283['renderable'] = NULL;
$arguments283['arguments'] = array (
);
$arguments283['optional'] = false;
$arguments283['default'] = NULL;
$arguments283['contentAs'] = NULL;
$arguments283['debug'] = true;
$arguments283['section'] = 'fieldRow';
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['row'] = $renderingContext->getVariableProvider()->getByPath('field', $array286);
$arguments283['arguments'] = $array285;

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output282 .= '
                ';
return $output282;
};
$arguments279 = array();
$arguments279['each'] = NULL;
$arguments279['as'] = NULL;
$arguments279['key'] = NULL;
$arguments279['reverse'] = false;
$arguments279['iteration'] = NULL;
$array281 = array (
);$arguments279['each'] = $renderingContext->getVariableProvider()->getByPath('fields', $array281);
$arguments279['as'] = 'field';

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output190 .= '
            </table>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '
            <a class="btn btn-primary" href="';
$array293 = array (
);
$output292 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('returnUrl', $array293)]);

$output292 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments294 = array();
$arguments294['key'] = NULL;
$arguments294['id'] = NULL;
$arguments294['default'] = NULL;
$arguments294['arguments'] = NULL;
$arguments294['extensionName'] = NULL;
$arguments294['languageKey'] = NULL;
$arguments294['alternativeLanguageKeys'] = NULL;
$arguments294['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:back';

$output292 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext)]);

$output292 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments296 = array();
$arguments296['identifier'] = NULL;
$arguments296['size'] = 'small';
$arguments296['overlay'] = NULL;
$arguments296['state'] = 'default';
$arguments296['alternativeMarkupIdentifier'] = NULL;
$arguments296['identifier'] = 'actions-view-go-back';
$arguments296['size'] = 'small';

$output292 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output292 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments298 = array();
$arguments298['key'] = NULL;
$arguments298['id'] = NULL;
$arguments298['default'] = NULL;
$arguments298['arguments'] = NULL;
$arguments298['extensionName'] = NULL;
$arguments298['languageKey'] = NULL;
$arguments298['alternativeLanguageKeys'] = NULL;
$arguments298['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:back';

$output292 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext)]);

$output292 .= '
            </a>
        ';
return $output292;
};
$arguments287 = array();
$arguments287['then'] = NULL;
$arguments287['else'] = NULL;
$arguments287['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array289 = array();
$array290 = array (
);$array289['0'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array290);

$expression291 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments287['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression291(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array289)
					),
					$renderingContext
				);
$arguments287['__thenClosure'] = $renderChildrenClosure288;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output190 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
            <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['key'] = NULL;
$arguments306['id'] = NULL;
$arguments306['default'] = NULL;
$arguments306['arguments'] = NULL;
$arguments306['extensionName'] = NULL;
$arguments306['languageKey'] = NULL;
$arguments306['alternativeLanguageKeys'] = NULL;
$arguments306['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.referencesToThisItem';

$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext)]);

$output305 .= '</h3>
            <div class="table-fit">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="col-icon"></th>
                        <th class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['key'] = NULL;
$arguments308['id'] = NULL;
$arguments308['default'] = NULL;
$arguments308['arguments'] = NULL;
$arguments308['extensionName'] = NULL;
$arguments308['languageKey'] = NULL;
$arguments308['alternativeLanguageKeys'] = NULL;
$arguments308['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.title';

$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext)]);

$output305 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['key'] = NULL;
$arguments310['id'] = NULL;
$arguments310['default'] = NULL;
$arguments310['arguments'] = NULL;
$arguments310['extensionName'] = NULL;
$arguments310['languageKey'] = NULL;
$arguments310['alternativeLanguageKeys'] = NULL;
$arguments310['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.table';

$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext)]);

$output305 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['key'] = NULL;
$arguments312['id'] = NULL;
$arguments312['default'] = NULL;
$arguments312['arguments'] = NULL;
$arguments312['extensionName'] = NULL;
$arguments312['languageKey'] = NULL;
$arguments312['alternativeLanguageKeys'] = NULL;
$arguments312['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.uid';

$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext)]);

$output305 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['key'] = NULL;
$arguments314['id'] = NULL;
$arguments314['default'] = NULL;
$arguments314['arguments'] = NULL;
$arguments314['extensionName'] = NULL;
$arguments314['languageKey'] = NULL;
$arguments314['alternativeLanguageKeys'] = NULL;
$arguments314['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page';

$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext)]);

$output305 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['key'] = NULL;
$arguments316['id'] = NULL;
$arguments316['default'] = NULL;
$arguments316['arguments'] = NULL;
$arguments316['extensionName'] = NULL;
$arguments316['languageKey'] = NULL;
$arguments316['alternativeLanguageKeys'] = NULL;
$arguments316['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext)]);

$output305 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['key'] = NULL;
$arguments318['id'] = NULL;
$arguments318['default'] = NULL;
$arguments318['arguments'] = NULL;
$arguments318['extensionName'] = NULL;
$arguments318['languageKey'] = NULL;
$arguments318['alternativeLanguageKeys'] = NULL;
$arguments318['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.field';

$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext)]);

$output305 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['key'] = NULL;
$arguments320['id'] = NULL;
$arguments320['default'] = NULL;
$arguments320['arguments'] = NULL;
$arguments320['extensionName'] = NULL;
$arguments320['languageKey'] = NULL;
$arguments320['alternativeLanguageKeys'] = NULL;
$arguments320['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.flexpointer';

$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext)]);

$output305 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments322 = array();
$arguments322['key'] = NULL;
$arguments322['id'] = NULL;
$arguments322['default'] = NULL;
$arguments322['arguments'] = NULL;
$arguments322['extensionName'] = NULL;
$arguments322['languageKey'] = NULL;
$arguments322['alternativeLanguageKeys'] = NULL;
$arguments322['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.softrefKey';

$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments322, $renderChildrenClosure323, $renderingContext)]);

$output305 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['key'] = NULL;
$arguments324['id'] = NULL;
$arguments324['default'] = NULL;
$arguments324['arguments'] = NULL;
$arguments324['extensionName'] = NULL;
$arguments324['languageKey'] = NULL;
$arguments324['alternativeLanguageKeys'] = NULL;
$arguments324['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.sorting';

$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext)]);

$output305 .= '</th>
                        <th class="col-control"></th>
                    </tr>
                    </thead>
                    <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$output329 = '';

$output329 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments330 = array();
$arguments330['section'] = NULL;
$arguments330['partial'] = NULL;
$arguments330['delegate'] = NULL;
$arguments330['renderable'] = NULL;
$arguments330['arguments'] = array (
);
$arguments330['optional'] = false;
$arguments330['default'] = NULL;
$arguments330['contentAs'] = NULL;
$arguments330['debug'] = true;
$arguments330['section'] = 'refLineRow';
// Rendering Array
$array332 = array();
$array333 = array (
);$array332['line'] = $renderingContext->getVariableProvider()->getByPath('refLine', $array333);
$array334 = array (
);$array332['maxTitleLength'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array334);
$arguments330['arguments'] = $array332;

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext);

$output329 .= '
                    ';
return $output329;
};
$arguments326 = array();
$arguments326['each'] = NULL;
$arguments326['as'] = NULL;
$arguments326['key'] = NULL;
$arguments326['reverse'] = false;
$arguments326['iteration'] = NULL;
$array328 = array (
);$arguments326['each'] = $renderingContext->getVariableProvider()->getByPath('refLines', $array328);
$arguments326['as'] = 'refLine';

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output305 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output305;
};
$arguments300 = array();
$arguments300['then'] = NULL;
$arguments300['else'] = NULL;
$arguments300['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array302 = array();
$array303 = array (
);$array302['0'] = $renderingContext->getVariableProvider()->getByPath('refLines', $array303);

$expression304 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments300['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression304(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array302)
					),
					$renderingContext
				);
$arguments300['__thenClosure'] = $renderChildrenClosure301;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output190 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
            <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['key'] = NULL;
$arguments341['id'] = NULL;
$arguments341['default'] = NULL;
$arguments341['arguments'] = NULL;
$arguments341['extensionName'] = NULL;
$arguments341['languageKey'] = NULL;
$arguments341['alternativeLanguageKeys'] = NULL;
$arguments341['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.referencesFromThisItem';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext)]);

$output340 .= '</h3>
            <div class="table-fit">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="col-icon"></th>
                        <th class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments343 = array();
$arguments343['key'] = NULL;
$arguments343['id'] = NULL;
$arguments343['default'] = NULL;
$arguments343['arguments'] = NULL;
$arguments343['extensionName'] = NULL;
$arguments343['languageKey'] = NULL;
$arguments343['alternativeLanguageKeys'] = NULL;
$arguments343['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.title';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext)]);

$output340 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments345 = array();
$arguments345['key'] = NULL;
$arguments345['id'] = NULL;
$arguments345['default'] = NULL;
$arguments345['arguments'] = NULL;
$arguments345['extensionName'] = NULL;
$arguments345['languageKey'] = NULL;
$arguments345['alternativeLanguageKeys'] = NULL;
$arguments345['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.table';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext)]);

$output340 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments347 = array();
$arguments347['key'] = NULL;
$arguments347['id'] = NULL;
$arguments347['default'] = NULL;
$arguments347['arguments'] = NULL;
$arguments347['extensionName'] = NULL;
$arguments347['languageKey'] = NULL;
$arguments347['alternativeLanguageKeys'] = NULL;
$arguments347['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.uid';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext)]);

$output340 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments349 = array();
$arguments349['key'] = NULL;
$arguments349['id'] = NULL;
$arguments349['default'] = NULL;
$arguments349['arguments'] = NULL;
$arguments349['extensionName'] = NULL;
$arguments349['languageKey'] = NULL;
$arguments349['alternativeLanguageKeys'] = NULL;
$arguments349['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext)]);

$output340 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['key'] = NULL;
$arguments351['id'] = NULL;
$arguments351['default'] = NULL;
$arguments351['arguments'] = NULL;
$arguments351['extensionName'] = NULL;
$arguments351['languageKey'] = NULL;
$arguments351['alternativeLanguageKeys'] = NULL;
$arguments351['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.field';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext)]);

$output340 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['key'] = NULL;
$arguments353['id'] = NULL;
$arguments353['default'] = NULL;
$arguments353['arguments'] = NULL;
$arguments353['extensionName'] = NULL;
$arguments353['languageKey'] = NULL;
$arguments353['alternativeLanguageKeys'] = NULL;
$arguments353['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.flexpointer';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext)]);

$output340 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments355 = array();
$arguments355['key'] = NULL;
$arguments355['id'] = NULL;
$arguments355['default'] = NULL;
$arguments355['arguments'] = NULL;
$arguments355['extensionName'] = NULL;
$arguments355['languageKey'] = NULL;
$arguments355['alternativeLanguageKeys'] = NULL;
$arguments355['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.softrefKey';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext)]);

$output340 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments357 = array();
$arguments357['key'] = NULL;
$arguments357['id'] = NULL;
$arguments357['default'] = NULL;
$arguments357['arguments'] = NULL;
$arguments357['extensionName'] = NULL;
$arguments357['languageKey'] = NULL;
$arguments357['alternativeLanguageKeys'] = NULL;
$arguments357['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.sorting';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext)]);

$output340 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments359 = array();
$arguments359['key'] = NULL;
$arguments359['id'] = NULL;
$arguments359['default'] = NULL;
$arguments359['arguments'] = NULL;
$arguments359['extensionName'] = NULL;
$arguments359['languageKey'] = NULL;
$arguments359['alternativeLanguageKeys'] = NULL;
$arguments359['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.refString';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext)]);

$output340 .= '</th>
                        <th class="col-control"></th>
                    </tr>
                    </thead>
                    <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output364 = '';

$output364 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments365 = array();
$arguments365['section'] = NULL;
$arguments365['partial'] = NULL;
$arguments365['delegate'] = NULL;
$arguments365['renderable'] = NULL;
$arguments365['arguments'] = array (
);
$arguments365['optional'] = false;
$arguments365['default'] = NULL;
$arguments365['contentAs'] = NULL;
$arguments365['debug'] = true;
$arguments365['section'] = 'refFromLineRow';
// Rendering Array
$array367 = array();
$array368 = array (
);$array367['line'] = $renderingContext->getVariableProvider()->getByPath('refFromLine', $array368);
$array369 = array (
);$array367['maxTitleLength'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array369);
$arguments365['arguments'] = $array367;

$output364 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output364 .= '
                    ';
return $output364;
};
$arguments361 = array();
$arguments361['each'] = NULL;
$arguments361['as'] = NULL;
$arguments361['key'] = NULL;
$arguments361['reverse'] = false;
$arguments361['iteration'] = NULL;
$array363 = array (
);$arguments361['each'] = $renderingContext->getVariableProvider()->getByPath('refFromLines', $array363);
$arguments361['as'] = 'refFromLine';

$output340 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output340 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output340;
};
$arguments335 = array();
$arguments335['then'] = NULL;
$arguments335['else'] = NULL;
$arguments335['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array337 = array();
$array338 = array (
);$array337['0'] = $renderingContext->getVariableProvider()->getByPath('refFromLines', $array338);

$expression339 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments335['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression339(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array337)
					),
					$renderingContext
				);
$arguments335['__thenClosure'] = $renderChildrenClosure336;

$output190 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output190 .= '
    ';
return $output190;
};
$arguments188['__elseClosures'][] = function() use ($renderingContext, $self) {
$output370 = '';

$output370 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments373 = array();
$arguments373['key'] = NULL;
$arguments373['id'] = NULL;
$arguments373['default'] = NULL;
$arguments373['arguments'] = NULL;
$arguments373['extensionName'] = NULL;
$arguments373['languageKey'] = NULL;
$arguments373['alternativeLanguageKeys'] = NULL;
$arguments373['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.noEditPermission';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext)]);
};
$arguments371 = array();
$arguments371['message'] = NULL;
$arguments371['title'] = NULL;
$arguments371['state'] = -2;
$arguments371['iconName'] = NULL;
$arguments371['disableIcon'] = false;
$arguments371['state'] = 2;
$renderChildrenClosure372 = ($arguments371['message'] !== null) ? function() use ($arguments371) { return $arguments371['message']; } : $renderChildrenClosure372;
$output370 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output370 .= '
    ';
return $output370;
};

$output187 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
$output570 = '';

$output570 .= '
    <tr>
        <th class="col-nowrap">';
$array571 = array (
);
$output570 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldLabel', $array571)]);

$output570 .= '</th>
        <td>';
$array572 = array (
);
$output570 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('row.fieldValue', $array572)]);

$output570 .= '</td>
    </tr>
';
return $output570;
};
$arguments568 = array();
$arguments568['name'] = NULL;
$arguments568['name'] = 'fieldRow';

$output187 .= NULL;

$output187 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure574 = function() use ($renderingContext, $self) {
$output575 = '';

$output575 .= '
    <tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure577 = function() use ($renderingContext, $self) {
$output605 = '';

$output605 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
$output608 = '';

$output608 .= '
                <td class="col-icon"><a href="';
$array609 = array (
);
$output608 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array609)]);

$output608 .= '" title="id=';
$array610 = array (
);
$output608 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array610)]);

$output608 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
$array613 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array613);
};
$arguments611 = array();
$arguments611['value'] = NULL;

$output608 .= isset($arguments611['value']) ? $arguments611['value'] : $renderChildrenClosure612();

$output608 .= '</a></td>
                <td class="col-title"><a href="';
$array614 = array (
);
$output608 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array614)]);

$output608 .= '" title="[id=';
$array615 = array (
);
$output608 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array615)]);

$output608 .= '] ';
$array616 = array (
);
$output608 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array616)]);

$output608 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
$array620 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array620)]);
};
$arguments617 = array();
$arguments617['maxCharacters'] = NULL;
$arguments617['append'] = '&hellip;';
$arguments617['respectWordBoundaries'] = true;
$arguments617['respectHtml'] = true;
$array619 = array (
);$arguments617['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array619);

$output608 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments617, $renderChildrenClosure618, $renderingContext);

$output608 .= '</a></td>
                <td>';
$array621 = array (
);
$output608 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array621)]);

$output608 .= '</td>
                <td><span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments622 = array();
$arguments622['key'] = NULL;
$arguments622['id'] = NULL;
$arguments622['default'] = NULL;
$arguments622['arguments'] = NULL;
$arguments622['extensionName'] = NULL;
$arguments622['languageKey'] = NULL;
$arguments622['alternativeLanguageKeys'] = NULL;
$arguments622['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page';

$output608 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments622, $renderChildrenClosure623, $renderingContext)]);

$output608 .= ': ';
$array624 = array (
);
$output608 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array624)]);

$output608 .= ' (uid=';
$array625 = array (
);
$output608 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.pid', $array625)]);

$output608 .= ')">
                        ';
$array626 = array (
);
$output608 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array626)]);

$output608 .= '
                    </span></td>
            ';
return $output608;
};
$arguments606 = array();

$output605 .= '';

$output605 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure628 = function() use ($renderingContext, $self) {
$output629 = '';

$output629 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure631 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments630 = array();
$arguments630['key'] = NULL;
$arguments630['id'] = NULL;
$arguments630['default'] = NULL;
$arguments630['arguments'] = NULL;
$arguments630['extensionName'] = NULL;
$arguments630['languageKey'] = NULL;
$arguments630['alternativeLanguageKeys'] = NULL;
$arguments630['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output629 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments630, $renderChildrenClosure631, $renderingContext)]);

$output629 .= ' (uid=';
$array632 = array (
);
$output629 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array632)]);

$output629 .= ')</td>
                <td>';
$array633 = array (
);
$output629 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array633)]);

$output629 .= '</td>
                <td></td>
            ';
return $output629;
};
$arguments627 = array();
$arguments627['if'] = NULL;

$output605 .= '';

$output605 .= '
        ';
return $output605;
};
$arguments576 = array();
$arguments576['then'] = NULL;
$arguments576['else'] = NULL;
$arguments576['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array602 = array();
$array603 = array (
);$array602['0'] = $renderingContext->getVariableProvider()->getByPath('line.record', $array603);

$expression604 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments576['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression604(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array602)
					),
					$renderingContext
				);
$arguments576['__thenClosure'] = function() use ($renderingContext, $self) {
$output578 = '';

$output578 .= '
                <td class="col-icon"><a href="';
$array579 = array (
);
$output578 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array579)]);

$output578 .= '" title="id=';
$array580 = array (
);
$output578 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array580)]);

$output578 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
$array583 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array583);
};
$arguments581 = array();
$arguments581['value'] = NULL;

$output578 .= isset($arguments581['value']) ? $arguments581['value'] : $renderChildrenClosure582();

$output578 .= '</a></td>
                <td class="col-title"><a href="';
$array584 = array (
);
$output578 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array584)]);

$output578 .= '" title="[id=';
$array585 = array (
);
$output578 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array585)]);

$output578 .= '] ';
$array586 = array (
);
$output578 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array586)]);

$output578 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
$array590 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array590)]);
};
$arguments587 = array();
$arguments587['maxCharacters'] = NULL;
$arguments587['append'] = '&hellip;';
$arguments587['respectWordBoundaries'] = true;
$arguments587['respectHtml'] = true;
$array589 = array (
);$arguments587['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array589);

$output578 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext);

$output578 .= '</a></td>
                <td>';
$array591 = array (
);
$output578 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array591)]);

$output578 .= '</td>
                <td><span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments592 = array();
$arguments592['key'] = NULL;
$arguments592['id'] = NULL;
$arguments592['default'] = NULL;
$arguments592['arguments'] = NULL;
$arguments592['extensionName'] = NULL;
$arguments592['languageKey'] = NULL;
$arguments592['alternativeLanguageKeys'] = NULL;
$arguments592['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:page';

$output578 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext)]);

$output578 .= ': ';
$array594 = array (
);
$output578 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array594)]);

$output578 .= ' (uid=';
$array595 = array (
);
$output578 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.pid', $array595)]);

$output578 .= ')">
                        ';
$array596 = array (
);
$output578 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array596)]);

$output578 .= '
                    </span></td>
            ';
return $output578;
};
$arguments576['__elseClosures'][] = function() use ($renderingContext, $self) {
$output597 = '';

$output597 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments598 = array();
$arguments598['key'] = NULL;
$arguments598['id'] = NULL;
$arguments598['default'] = NULL;
$arguments598['arguments'] = NULL;
$arguments598['extensionName'] = NULL;
$arguments598['languageKey'] = NULL;
$arguments598['alternativeLanguageKeys'] = NULL;
$arguments598['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext)]);

$output597 .= ' (uid=';
$array600 = array (
);
$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array600)]);

$output597 .= ')</td>
                <td>';
$array601 = array (
);
$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array601)]);

$output597 .= '</td>
                <td></td>
            ';
return $output597;
};

$output575 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments576, $renderChildrenClosure577, $renderingContext);

$output575 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure635 = function() use ($renderingContext, $self) {
$output643 = '';

$output643 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure645 = function() use ($renderingContext, $self) {
$output646 = '';

$output646 .= '<td title="';
$array647 = array (
);
$output646 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array647)]);

$output646 .= ' [ID: ';
$array648 = array (
);
$output646 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecord.uid', $array648)]);

$output646 .= ']" class="col-responsive">';
$array649 = array (
);
$output646 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array649)]);

$output646 .= '</td>';
return $output646;
};
$arguments644 = array();

$output643 .= '';

$output643 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure651 = function() use ($renderingContext, $self) {
return '<td></td>';
};
$arguments650 = array();
$arguments650['if'] = NULL;

$output643 .= '';

$output643 .= '
        ';
return $output643;
};
$arguments634 = array();
$arguments634['then'] = NULL;
$arguments634['else'] = NULL;
$arguments634['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array640 = array();
$array641 = array (
);$array640['0'] = $renderingContext->getVariableProvider()->getByPath('line.parentRecord', $array641);

$expression642 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments634['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression642(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array640)
					),
					$renderingContext
				);
$arguments634['__thenClosure'] = function() use ($renderingContext, $self) {
$output636 = '';

$output636 .= '<td title="';
$array637 = array (
);
$output636 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array637)]);

$output636 .= ' [ID: ';
$array638 = array (
);
$output636 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecord.uid', $array638)]);

$output636 .= ']" class="col-responsive">';
$array639 = array (
);
$output636 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.parentRecordTitle', $array639)]);

$output636 .= '</td>';
return $output636;
};
$arguments634['__elseClosures'][] = function() use ($renderingContext, $self) {
return '<td></td>';
};

$output575 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments634, $renderChildrenClosure635, $renderingContext);

$output575 .= '
        <td title="';
$array652 = array (
);
$output575 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array652)]);

$output575 .= '" class="col-responsive">';
$array653 = array (
);
$output575 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array653)]);

$output575 .= '</td>
        <td>';
$array654 = array (
);
$output575 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.labelForTableColumn', $array654)]);

$output575 .= '</td>
        <td>';
$array655 = array (
);
$output575 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.flexpointer', $array655)]);

$output575 .= '</td>
        <td>';
$array656 = array (
);
$output575 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.softref_key', $array656)]);

$output575 .= '</td>
        <td>';
$array657 = array (
);
$output575 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.sorting', $array657)]);

$output575 .= '</td>
        <td class="col-control">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure659 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments658 = array();
$arguments658['section'] = NULL;
$arguments658['partial'] = NULL;
$arguments658['delegate'] = NULL;
$arguments658['renderable'] = NULL;
$arguments658['arguments'] = array (
);
$arguments658['optional'] = false;
$arguments658['default'] = NULL;
$arguments658['contentAs'] = NULL;
$arguments658['debug'] = true;
$arguments658['section'] = 'action';
// Rendering Array
$array660 = array();
$array661 = array (
);$array660['line'] = $renderingContext->getVariableProvider()->getByPath('line.actions', $array661);
$arguments658['arguments'] = $array660;

$output575 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments658, $renderChildrenClosure659, $renderingContext);

$output575 .= '
        </td>
    </tr>
';
return $output575;
};
$arguments573 = array();
$arguments573['name'] = NULL;
$arguments573['name'] = 'refLineRow';

$output187 .= NULL;

$output187 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
$output664 = '';

$output664 .= '
    <tr>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure666 = function() use ($renderingContext, $self) {
$output690 = '';

$output690 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure692 = function() use ($renderingContext, $self) {
$output693 = '';

$output693 .= '
                <td class="col-icon"><a href="';
$array694 = array (
);
$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array694)]);

$output693 .= '" title="id=';
$array695 = array (
);
$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array695)]);

$output693 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure697 = function() use ($renderingContext, $self) {
$array698 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array698);
};
$arguments696 = array();
$arguments696['value'] = NULL;

$output693 .= isset($arguments696['value']) ? $arguments696['value'] : $renderChildrenClosure697();

$output693 .= '</a></td>
                <td class="col-title"><a href="';
$array699 = array (
);
$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array699)]);

$output693 .= '" title="[id=';
$array700 = array (
);
$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array700)]);

$output693 .= '] ';
$array701 = array (
);
$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array701)]);

$output693 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure703 = function() use ($renderingContext, $self) {
$array705 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array705)]);
};
$arguments702 = array();
$arguments702['maxCharacters'] = NULL;
$arguments702['append'] = '&hellip;';
$arguments702['respectWordBoundaries'] = true;
$arguments702['respectHtml'] = true;
$array704 = array (
);$arguments702['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array704);

$output693 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments702, $renderChildrenClosure703, $renderingContext);

$output693 .= '</a></td>
                <td>';
$array706 = array (
);
$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array706)]);

$output693 .= '</td>
                <td>';
$array707 = array (
);
$output693 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_uid', $array707)]);

$output693 .= '</td>
            ';
return $output693;
};
$arguments691 = array();

$output690 .= '';

$output690 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure709 = function() use ($renderingContext, $self) {
$output710 = '';

$output710 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure712 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments711 = array();
$arguments711['key'] = NULL;
$arguments711['id'] = NULL;
$arguments711['default'] = NULL;
$arguments711['arguments'] = NULL;
$arguments711['extensionName'] = NULL;
$arguments711['languageKey'] = NULL;
$arguments711['alternativeLanguageKeys'] = NULL;
$arguments711['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output710 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments711, $renderChildrenClosure712, $renderingContext)]);

$output710 .= ' (uid=';
$array713 = array (
);
$output710 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array713)]);

$output710 .= ')</td>
                <td>';
$array714 = array (
);
$output710 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array714)]);

$output710 .= '</td>
                <td></td>
            ';
return $output710;
};
$arguments708 = array();
$arguments708['if'] = NULL;

$output690 .= '';

$output690 .= '
        ';
return $output690;
};
$arguments665 = array();
$arguments665['then'] = NULL;
$arguments665['else'] = NULL;
$arguments665['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array687 = array();
$array688 = array (
);$array687['0'] = $renderingContext->getVariableProvider()->getByPath('line.record', $array688);

$expression689 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments665['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression689(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array687)
					),
					$renderingContext
				);
$arguments665['__thenClosure'] = function() use ($renderingContext, $self) {
$output667 = '';

$output667 .= '
                <td class="col-icon"><a href="';
$array668 = array (
);
$output667 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array668)]);

$output667 .= '" title="id=';
$array669 = array (
);
$output667 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array669)]);

$output667 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure671 = function() use ($renderingContext, $self) {
$array672 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.icon', $array672);
};
$arguments670 = array();
$arguments670['value'] = NULL;

$output667 .= isset($arguments670['value']) ? $arguments670['value'] : $renderChildrenClosure671();

$output667 .= '</a></td>
                <td class="col-title"><a href="';
$array673 = array (
);
$output667 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.url', $array673)]);

$output667 .= '" title="[id=';
$array674 = array (
);
$output667 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.record.uid', $array674)]);

$output667 .= '] ';
$array675 = array (
);
$output667 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array675)]);

$output667 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure677 = function() use ($renderingContext, $self) {
$array679 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordTitle', $array679)]);
};
$arguments676 = array();
$arguments676['maxCharacters'] = NULL;
$arguments676['append'] = '&hellip;';
$arguments676['respectWordBoundaries'] = true;
$arguments676['respectHtml'] = true;
$array678 = array (
);$arguments676['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array678);

$output667 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments676, $renderChildrenClosure677, $renderingContext);

$output667 .= '</a></td>
                <td>';
$array680 = array (
);
$output667 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title', $array680)]);

$output667 .= '</td>
                <td>';
$array681 = array (
);
$output667 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_uid', $array681)]);

$output667 .= '</td>
            ';
return $output667;
};
$arguments665['__elseClosures'][] = function() use ($renderingContext, $self) {
$output682 = '';

$output682 .= '
                <td class="col-icon"></td>
                <td class="col-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure684 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments683 = array();
$arguments683['key'] = NULL;
$arguments683['id'] = NULL;
$arguments683['default'] = NULL;
$arguments683['arguments'] = NULL;
$arguments683['extensionName'] = NULL;
$arguments683['languageKey'] = NULL;
$arguments683['alternativeLanguageKeys'] = NULL;
$arguments683['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:show_item.php.missing_record';

$output682 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments683, $renderChildrenClosure684, $renderingContext)]);

$output682 .= ' (uid=';
$array685 = array (
);
$output682 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.recuid', $array685)]);

$output682 .= ')</td>
                <td>';
$array686 = array (
);
$output682 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.title', $array686)]);

$output682 .= '</td>
                <td></td>
            ';
return $output682;
};

$output664 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments665, $renderChildrenClosure666, $renderingContext);

$output664 .= '
        <td title="';
$array715 = array (
);
$output664 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array715)]);

$output664 .= '" class="col-responsive">';
$array716 = array (
);
$output664 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.path', $array716)]);

$output664 .= '</td>
        <td>';
$array717 = array (
);
$output664 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.labelForTableColumn', $array717)]);

$output664 .= '</td>
        <td>';
$array718 = array (
);
$output664 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.flexpointer', $array718)]);

$output664 .= '</td>
        <td>';
$array719 = array (
);
$output664 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.softref_key', $array719)]);

$output664 .= '</td>
        <td>';
$array720 = array (
);
$output664 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.sorting', $array720)]);

$output664 .= '</td>
        <td>';
$array721 = array (
);
$output664 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.row.ref_string', $array721)]);

$output664 .= '</td>
        <td class="col-control">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments722 = array();
$arguments722['section'] = NULL;
$arguments722['partial'] = NULL;
$arguments722['delegate'] = NULL;
$arguments722['renderable'] = NULL;
$arguments722['arguments'] = array (
);
$arguments722['optional'] = false;
$arguments722['default'] = NULL;
$arguments722['contentAs'] = NULL;
$arguments722['debug'] = true;
$arguments722['section'] = 'action';
// Rendering Array
$array724 = array();
$array725 = array (
);$array724['line'] = $renderingContext->getVariableProvider()->getByPath('line.actions', $array725);
$arguments722['arguments'] = $array724;

$output664 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments722, $renderChildrenClosure723, $renderingContext);

$output664 .= '
        </td>
    </tr>
';
return $output664;
};
$arguments662 = array();
$arguments662['name'] = NULL;
$arguments662['name'] = 'refFromLineRow';

$output187 .= NULL;

$output187 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure727 = function() use ($renderingContext, $self) {
$output728 = '';

$output728 .= '
    <div class="btn-group" role="group">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure730 = function() use ($renderingContext, $self) {
$output734 = '';

$output734 .= '
            <a class="btn btn-default btn-sm" href="#" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
$array737 = array (
);return $renderingContext->getVariableProvider()->getByPath('line.previewUrlAttributes', $array737);
};
$arguments735 = array();
$arguments735['value'] = NULL;

$output734 .= isset($arguments735['value']) ? $arguments735['value'] : $renderChildrenClosure736();

$output734 .= ' title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure739 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments738 = array();
$arguments738['key'] = NULL;
$arguments738['id'] = NULL;
$arguments738['default'] = NULL;
$arguments738['arguments'] = NULL;
$arguments738['extensionName'] = NULL;
$arguments738['languageKey'] = NULL;
$arguments738['alternativeLanguageKeys'] = NULL;
$arguments738['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.showPage';

$output734 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments738, $renderChildrenClosure739, $renderingContext)]);

$output734 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure741 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments740 = array();
$arguments740['identifier'] = NULL;
$arguments740['size'] = 'small';
$arguments740['overlay'] = NULL;
$arguments740['state'] = 'default';
$arguments740['alternativeMarkupIdentifier'] = NULL;
$arguments740['identifier'] = 'actions-document-view';
$arguments740['size'] = 'small';

$output734 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments740, $renderChildrenClosure741, $renderingContext);

$output734 .= '
            </a>
        ';
return $output734;
};
$arguments729 = array();
$arguments729['then'] = NULL;
$arguments729['else'] = NULL;
$arguments729['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array731 = array();
$array732 = array (
);$array731['0'] = $renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array732);

$expression733 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments729['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression733(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array731)
					),
					$renderingContext
				);
$arguments729['__thenClosure'] = $renderChildrenClosure730;

$output728 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments729, $renderChildrenClosure730, $renderingContext);

$output728 .= '
        <a class="btn btn-default btn-sm" href="';
$array742 = array (
);
$output728 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordEditUrl', $array742)]);

$output728 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments743 = array();
$arguments743['key'] = NULL;
$arguments743['id'] = NULL;
$arguments743['default'] = NULL;
$arguments743['arguments'] = NULL;
$arguments743['extensionName'] = NULL;
$arguments743['languageKey'] = NULL;
$arguments743['alternativeLanguageKeys'] = NULL;
$arguments743['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.edit';

$output728 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments743, $renderChildrenClosure744, $renderingContext)]);

$output728 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure746 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments745 = array();
$arguments745['identifier'] = NULL;
$arguments745['size'] = 'small';
$arguments745['overlay'] = NULL;
$arguments745['state'] = 'default';
$arguments745['alternativeMarkupIdentifier'] = NULL;
$arguments745['identifier'] = 'actions-open';
$arguments745['size'] = 'small';

$output728 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments745, $renderChildrenClosure746, $renderingContext);

$output728 .= '
        </a>
    </div>
    <div class="btn-group" role="group">
        <a class="btn btn-default btn-sm" href="';
$array747 = array (
);
$output728 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.recordHistoryUrl', $array747)]);

$output728 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure749 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments748 = array();
$arguments748['key'] = NULL;
$arguments748['id'] = NULL;
$arguments748['default'] = NULL;
$arguments748['arguments'] = NULL;
$arguments748['extensionName'] = NULL;
$arguments748['languageKey'] = NULL;
$arguments748['alternativeLanguageKeys'] = NULL;
$arguments748['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.history';

$output728 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments748, $renderChildrenClosure749, $renderingContext)]);

$output728 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure751 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments750 = array();
$arguments750['identifier'] = NULL;
$arguments750['size'] = 'small';
$arguments750['overlay'] = NULL;
$arguments750['state'] = 'default';
$arguments750['alternativeMarkupIdentifier'] = NULL;
$arguments750['identifier'] = 'actions-document-history-open';
$arguments750['size'] = 'small';

$output728 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments750, $renderChildrenClosure751, $renderingContext);

$output728 .= '
        </a>
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure753 = function() use ($renderingContext, $self) {
$output757 = '';

$output757 .= '
        <div class="btn-group" role="group">
            <a class="btn btn-default btn-sm" href="';
$array758 = array (
);
$output757 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array758)]);

$output757 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure760 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments759 = array();
$arguments759['key'] = NULL;
$arguments759['id'] = NULL;
$arguments759['default'] = NULL;
$arguments759['arguments'] = NULL;
$arguments759['extensionName'] = NULL;
$arguments759['languageKey'] = NULL;
$arguments759['alternativeLanguageKeys'] = NULL;
$arguments759['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.showList';

$output757 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments759, $renderChildrenClosure760, $renderingContext)]);

$output757 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure762 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments761 = array();
$arguments761['identifier'] = NULL;
$arguments761['size'] = 'small';
$arguments761['overlay'] = NULL;
$arguments761['state'] = 'default';
$arguments761['alternativeMarkupIdentifier'] = NULL;
$arguments761['identifier'] = 'actions-system-list-open';
$arguments761['size'] = 'small';

$output757 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments761, $renderChildrenClosure762, $renderingContext);

$output757 .= '
            </a>
        </div>
    ';
return $output757;
};
$arguments752 = array();
$arguments752['then'] = NULL;
$arguments752['else'] = NULL;
$arguments752['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array754 = array();
$array755 = array (
);$array754['0'] = $renderingContext->getVariableProvider()->getByPath('line.webListUrl', $array755);

$expression756 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments752['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression756(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array754)
					),
					$renderingContext
				);
$arguments752['__thenClosure'] = $renderChildrenClosure753;

$output728 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments752, $renderChildrenClosure753, $renderingContext);

$output728 .= '
';
return $output728;
};
$arguments726 = array();
$arguments726['name'] = NULL;
$arguments726['name'] = 'action';

$output187 .= NULL;

$output187 .= '
';

return $output187;
}


}
#