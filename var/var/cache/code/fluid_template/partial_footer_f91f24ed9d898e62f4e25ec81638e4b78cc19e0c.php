<?php

class partial_footer_f91f24ed9d898e62f4e25ec81638e4b78cc19e0c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return '<footer class="site-footer">
  <div>
    <div>
      <h2>Ihr Spezialist</h2>
      <div class="site-footer__content">
        <address>HR GLAS GmbH <em>&bull;</em> Heugatterstrasse 27b <em>&bull;</em> 8600 Dübendorf <em>&bull;</em> 044 557 52 32 <em>&bull;</em> <a href="mailto:info@hr-glas.ch">info@hr-glas.ch</a></address>
        <nav class="footer">
          <a href="/impressum">Impressum</a> <em>&bull;</em> <a href="/datenschutz">Datenschutz</a> <em>&bull;</em> <a href="https://stoz.ch" target="_blank" rel="nofollow">design by stoz</a>
        </nav>
      </div>
    </div>
  </div>
</footer>';
}


}
#