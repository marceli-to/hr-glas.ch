<?php

class partial_Header_1d05429165b8130bf9845fd5c22ff3aa5749c01e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'xlink' => NULL,
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<header class="site-header js-header">
  <a href="javascript:;" class="btn-menu js-btn-menu" title="Menu anzeigen"></a>
  <div>
    <nav class="site-nav js-menu">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$array3 = array (
);return $renderingContext->getVariableProvider()->getByPath('menuMain', $array3);
};
$arguments1 = array();
$arguments1['value'] = NULL;

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '
		<div class="nav-icons-mobile">
        	<a href="mailto:info@hr-glas.ch" class="icon-nav-mail"></a>
        	<a href="tel:0445575232" class="icon-nav-phone"></a>
      	</div>
    </nav>
    <a href="/" class="logo">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 138.42 234.43"><style>.st0{fill:#fff}.st1,.st2{clip-path:url(#SVGID_2_);fill:#0096d7}.st2{fill:#003b7c}</style><path class="st0" d="M5.15 53.07v27.66H0v58.56h5.15v95.12l126.01-51.36v-44.29h5.96c.84-12.16-.05-23-3.62-24.31 7.99-1.12 5.54-29.56-2.35-31.56V0l-126 53.07z"/><defs><path id="SVGID_1_" d="M131.16 0L5.15 53.07v27.66H0v58.56h5.15v95.12l126.01-51.36v-44.29h5.96c.84-12.16-.05-23-3.62-24.31 3.4-.48 4.91-5.9 4.91-12.14v-.01c0-8.4-2.74-18.27-7.26-19.41V0z"/></defs><clipPath id="SVGID_2_"><use xlink:href="#SVGID_1_" overflow="visible"/></clipPath><path class="st1" d="M122.75 79.06h-4.54V23.35L18.58 64.03v15.03h-4.55V60.97l108.72-44.39zM14.03 218.64v-76.52h4.55v69.75l99.63-40.67v-29.08h4.54v32.13z"/><path class="st2" d="M10.01 88.71h12.97v15.79h29.53V88.71h12.97v42.63H52.51v-16.29H22.98v16.29H10.01zm64.35 0h36.75c7.54 0 10.87.64 13.29 2.68 2.49 1.98 3.64 5.62 3.64 11.38 0 7.92-1.92 11.06-7.35 12.27 5.3.89 6.9 3.13 6.77 9.59v6.71h-13.17v-5.31c-.06-4.6-1.34-5.56-7.16-5.43H87.27v10.74H74.36V88.71zm33.17 21.48c6.26 0 7.48-.77 7.48-4.98 0-2.75-.26-3.9-1.09-4.79-.96-1.02-2.05-1.21-5.94-1.21H87.27v10.99h20.26z"/><path class="st1" d="M45.68 147.9v1.53c0 2.64-.15 3.59-.67 4.54-.43.78-1.14 1.25-2.27 1.53-.78.19-2.01.24-6.35.24-3.82 0-5.68-.13-6.57-.48-1.38-.52-2.09-1.36-2.4-2.89-.17-.82-.24-1.77-.24-3.82 0-3.8.24-5.01 1.17-6.03.6-.65 1.45-1.04 2.59-1.19 1.34-.19 2.87-.26 7.11-.26 4.21 0 5.72.3 6.63 1.34.63.69.93 1.82.93 3.41h-3.26c-.02-.91-.13-1.25-.54-1.58-.56-.45-1.3-.54-4.1-.54-5.21 0-6 .09-6.57.76-.45.52-.6 1.47-.6 3.72 0 2.81.17 3.78.78 4.3.63.56 1.45.67 5.36.67 4.28 0 4.73-.08 5.38-1.01.28-.37.39-1.06.39-2.05h-6.42v-2.18h9.65zm4.72-6.7h3.32v11.71h10.52v2.7H50.4zm22.14 11.56l-1.6 2.85H67.2l8.25-14.41h4.51l8.12 14.41h-3.63l-1.64-2.85H72.54zm5.14-9.23l-3.87 6.89h7.78l-3.91-6.89zm16.63 7.52v.15c0 .93.17 1.43.58 1.66.52.3 1.64.43 3.76.43 1.79 0 2.92-.07 4.47-.26.82-.11 1.23-.26 1.49-.56.28-.35.43-.78.43-1.23 0-.84-.37-1.25-1.36-1.47-.6-.13-.63-.13-4.56-.15h-2.07c-3.05-.02-4.23-.26-5.03-.99-.69-.6-1.01-1.51-1.01-2.79 0-1.6.39-2.92 1.08-3.52.97-.91 3.18-1.25 7.93-1.25 2.89 0 4.45.11 5.44.41 1.79.52 2.42 1.49 2.42 3.71v.28h-3.24c-.02-.84-.24-1.27-.69-1.49-.6-.28-1.99-.45-3.59-.45-2.72 0-4.62.17-5.27.49-.52.24-.78.74-.78 1.41 0 .62.19 1.04.6 1.27.5.28 1.32.37 3.58.37h2.44c4.32 0 5.64.24 6.54 1.21.61.63.89 1.58.89 3 0 1.51-.32 2.55-1.04 3.24-.95.91-2.81 1.21-7.67 1.21-5.18 0-6.8-.24-7.71-1.1-.65-.63-.93-1.49-.93-2.85 0-.13 0-.46.02-.74h3.28z"/></svg>
    </a>
  </div>
</header>';

return $output0;
}


}
#