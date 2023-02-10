<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    'mod.wizards.newContentElement.wizardItems.dce.header = ' .
    'LLL:EXT:dce/Resources/Private/Language/locallang_db.xlf:tx_dce_domain_model_dce_long'
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? 'dce' : 'T3.dce',
    'gallery',
    [
        \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? \T3\Dce\Controller\DceController::class : 'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_gallery.20
     tt_content.dce_gallery >
     tt_content.dce_gallery < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_gallery
     tt_content.dce_gallery.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.common.elements.dce_gallery {
        iconIdentifier = content-textpic
        title = Gallery
        description = Produktegalerie hinzufügen
        tt_content_defValues {
            CType = dce_gallery
        }
    }
    mod.wizards.newContentElement.wizardItems.common.show := addToList(dce_gallery)
    TCEFORM.tt_content.pi_flexform.types.dce_gallery.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.flexformLabel.default
    "
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? 'dce' : 'T3.dce',
    'teasers0',
    [
        \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? \T3\Dce\Controller\DceController::class : 'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_teasers0.20
     tt_content.dce_teasers0 >
     tt_content.dce_teasers0 < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_teasers0
     tt_content.dce_teasers0.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.common.elements.dce_teasers0 {
        iconIdentifier = content-textpic
        title = Teasers
        description = Teaser hinzufügen
        tt_content_defValues {
            CType = dce_teasers0
        }
    }
    mod.wizards.newContentElement.wizardItems.common.show := addToList(dce_teasers0)
    TCEFORM.tt_content.pi_flexform.types.dce_teasers0.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.flexformLabel.default
    "
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? 'dce' : 'T3.dce',
    'team',
    [
        \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? \T3\Dce\Controller\DceController::class : 'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_team.20
     tt_content.dce_team >
     tt_content.dce_team < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_team
     tt_content.dce_team.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.common.elements.dce_team {
        iconIdentifier = content-textpic
        title = Team
        description = Teaser hinzufügen
        tt_content_defValues {
            CType = dce_team
        }
    }
    mod.wizards.newContentElement.wizardItems.common.show := addToList(dce_team)
    TCEFORM.tt_content.pi_flexform.types.dce_team.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.flexformLabel.default
    "
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? 'dce' : 'T3.dce',
    'visual',
    [
        \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? \T3\Dce\Controller\DceController::class : 'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_visual.20
     tt_content.dce_visual >
     tt_content.dce_visual < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_visual
     tt_content.dce_visual.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.common.elements.dce_visual {
        iconIdentifier = content-textpic
        title = Visual
        description = Visual hinzufügen
        tt_content_defValues {
            CType = dce_visual
        }
    }
    mod.wizards.newContentElement.wizardItems.common.show := addToList(dce_visual)
    TCEFORM.tt_content.pi_flexform.types.dce_visual.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.flexformLabel.default
    "
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? 'dce' : 'T3.dce',
    'quotes',
    [
        \T3\Dce\Compatibility::isTypo3Version('10.0.0') ? \T3\Dce\Controller\DceController::class : 'Dce' => 'show',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    'temp.dceContentElement < tt_content.dce_quotes.20
     tt_content.dce_quotes >
     tt_content.dce_quotes < temp.dceContentElement
     temp.dceContentElement >
    ',
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'dce',
    'setup',
    "# Hide lib.stdheader for DCE with identifier dce_quotes
     tt_content.dce_quotes.10 >",
    43
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "
    mod.wizards.newContentElement.wizardItems.common.elements.dce_quotes {
        iconIdentifier = content-special-html
        title = Quotes
        description = Zitat hinzufügen
        tt_content_defValues {
            CType = dce_quotes
        }
    }
    mod.wizards.newContentElement.wizardItems.common.show := addToList(dce_quotes)
    TCEFORM.tt_content.pi_flexform.types.dce_quotes.label = LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.flexformLabel.default
    "
);


#
