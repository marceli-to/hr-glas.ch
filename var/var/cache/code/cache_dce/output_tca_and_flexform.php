<?php

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce_long',
    1 => '--div--'
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.miscellaneous',
    1 => '--div--'
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Quotes',
        'dce_quotes',
        'content-special-html',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_quotes'] = 'content-special-html';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_quotes'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_quotes'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab]]></sheetTitle><type>array</type><el><settings.quotes><title><![CDATA[Quotes]]></title><tx_templatevoila><title><![CDATA[Quotes]]></title></tx_templatevoila><section>1</section><type>array</type><el><container_quotes><type>array</type><title><![CDATA[Quote]]></title><tx_templatevoila><title><![CDATA[Quotes]]></title></tx_templatevoila><el><text><TCEforms><label><![CDATA[Zitat]]></label><config>
	<type>text</type>
	<rows>5</rows>
	<cols>30</cols>
	<eval>trim,required</eval>
</config></TCEforms></text><author><TCEforms><label><![CDATA[Autor]]></label><config>
	<type>input</type>
</config></TCEforms></author></el></container_quotes></el></settings.quotes></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_quotes_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_quotes_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_quotes']['showitem'] = '--palette--;;dce_palette_dce_quotes_head,
--palette--;;dce_palette_dce_quotes,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_quotes']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_quotes']['showitem'] = 'sys_language_uid,l18n_parent,colPos,hidden';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Visual',
        'dce_visual',
        'content-textpic',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_visual'] = 'content-textpic';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_visual'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_visual'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab]]></sheetTitle><type>array</type><el><settings.image><TCEforms><label><![CDATA[Bild]]></label><config>
	<type>inline</type>
	<foreign_table>sys_file_reference</foreign_table>
	<foreign_field>uid_foreign</foreign_field>
	<foreign_sortby>sorting_foreign</foreign_sortby>
	<foreign_table_field>tablenames</foreign_table_field>
	<foreign_match_fields>
		<fieldname>image</fieldname>
	</foreign_match_fields>
	<foreign_label>uid_local</foreign_label>
	<foreign_selector>uid_local</foreign_selector>
	<foreign_selector_fieldTcaOverride>
		<config>
			<appearance>
				<elementBrowserType>file</elementBrowserType>
				<elementBrowserAllowed>gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg</elementBrowserAllowed>
			</appearance>
		</config>
	</foreign_selector_fieldTcaOverride>
	<foreign_types type="array">
		<numIndex index="2">
			<showitem>--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,--palette--;;filePalette</showitem>
		</numIndex>
	</foreign_types>

	<minitems>1</minitems>
	<maxitems>1</maxitems>

	<appearance>
		<useSortable>1</useSortable>
		<headerThumbnail>
			<field>uid_local</field>
			<width>45c</width>
			<height>45</height>
		</headerThumbnail>

		<showPossibleLocalizationRecords>0</showPossibleLocalizationRecords>
		<showRemovedLocalizationRecords>0</showRemovedLocalizationRecords>
		<showSynchronizationLink>0</showSynchronizationLink>
		<useSortable>1</useSortable>
		<enabledControls>
			<info>1</info>
			<new>0</new>
			<dragdrop>0</dragdrop>
			<sort>1</sort>
			<hide>1</hide>
			<delete>1</delete>
			<localize>1</localize>
		</enabledControls>

		<createNewRelationLinkTitle>LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference</createNewRelationLinkTitle>
	</appearance>

	<behaviour>
		<localizationMode>select</localizationMode>
		<localizeChildrenAtParentLocalization>1</localizeChildrenAtParentLocalization>
	</behaviour>

	<dce_load_schema>1</dce_load_schema>
	<dce_get_fal_objects>1</dce_get_fal_objects>
</config>
</TCEforms></settings.image></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_visual_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_visual_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_visual']['showitem'] = '--palette--;;dce_palette_dce_visual_head,
--palette--;;dce_palette_dce_visual,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_visual']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_visual']['showitem'] = 'sys_language_uid,l18n_parent,colPos,hidden';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Team',
        'dce_team',
        'content-textpic',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_team'] = 'content-textpic';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_team'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_team'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab]]></sheetTitle><type>array</type><el><settings.title><TCEforms><label><![CDATA[Titel]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim,required</eval>
</config></TCEforms></settings.title><settings.teammembers><title><![CDATA[Teammitglieder]]></title><tx_templatevoila><title><![CDATA[Teammitglieder]]></title></tx_templatevoila><section>1</section><type>array</type><el><container_teammembers><type>array</type><title><![CDATA[Mitglied]]></title><tx_templatevoila><title><![CDATA[Teammitglieder]]></title></tx_templatevoila><el><name><TCEforms><label><![CDATA[Name]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim,required</eval>
</config></TCEforms></name><image><TCEforms><label><![CDATA[Bild]]></label><config>
	<type>group</type>
	<internal_type>db</internal_type>
	<appearance>
		<elementBrowserType>file</elementBrowserType>
		<elementBrowserAllowed>gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg</elementBrowserAllowed>
	</appearance>
	<allowed>sys_file</allowed>
	<size>1</size>
	<minitems>1</minitems>
	<maxitems>1</maxitems>
	<show_thumbs>1</show_thumbs>

	<dce_load_schema>1</dce_load_schema>
	<dce_get_fal_objects>1</dce_get_fal_objects>
</config>
</TCEforms></image><text><TCEforms><label><![CDATA[Text]]></label><config>
	<type>text</type>
	<rows>5</rows>
	<cols>30</cols>
	<eval>trim,required</eval>
</config></TCEforms></text></el></container_teammembers></el></settings.teammembers></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_team_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_team_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_team']['showitem'] = '--palette--;;dce_palette_dce_team_head,
--palette--;;dce_palette_dce_team,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_team']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_team']['showitem'] = 'sys_language_uid,l18n_parent,colPos,hidden';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Teasers',
        'dce_teasers0',
        'content-textpic',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_teasers0'] = 'content-textpic';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_teasers0'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_teasers0'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab]]></sheetTitle><type>array</type><el><settings.title><TCEforms><label><![CDATA[Titel]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim,required</eval>
</config></TCEforms></settings.title><settings.teasers><title><![CDATA[Teasers]]></title><tx_templatevoila><title><![CDATA[Teasers]]></title></tx_templatevoila><section>1</section><type>array</type><el><container_teasers><type>array</type><title><![CDATA[Teaser]]></title><tx_templatevoila><title><![CDATA[Teasers]]></title></tx_templatevoila><el><title><TCEforms><label><![CDATA[Titel]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim,required</eval>
</config></TCEforms></title><image><TCEforms><label><![CDATA[Bild]]></label><config>
	<type>group</type>
	<internal_type>db</internal_type>
	<appearance>
		<elementBrowserType>file</elementBrowserType>
		<elementBrowserAllowed>gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg</elementBrowserAllowed>
	</appearance>
	<allowed>sys_file</allowed>
	<size>1</size>
	<minitems>1</minitems>
	<maxitems>1</maxitems>
	<show_thumbs>1</show_thumbs>

	<dce_load_schema>1</dce_load_schema>
	<dce_get_fal_objects>1</dce_get_fal_objects>
</config>
</TCEforms></image><link><TCEforms><label><![CDATA[Link]]></label><config>
	<type>input</type>
	<renderType>inputLink</renderType>
	<size>30</size>
	<eval>trim</eval>
	<softref>typolink,typolink_tag,images,url</softref>
	<fieldControl>
		<linkPopup>
			<options>
				<!--<blindLinkOptions>file,mail,page,spec,url</blindLinkOptions>-->
				<!--<blindLinkFields>class,params,target,title</blindLinkFields>-->
			</options>
		</linkPopup>
	</fieldControl>
</config>
</TCEforms></link></el></container_teasers></el></settings.teasers></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_teasers0_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_teasers0_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_teasers0']['showitem'] = '--palette--;;dce_palette_dce_teasers0_head,
--palette--;;dce_palette_dce_teasers0,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_teasers0']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_teasers0']['showitem'] = 'sys_language_uid,l18n_parent,colPos,hidden';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Gallery',
        'dce_gallery',
        'content-textpic',
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['dce_gallery'] = 'content-textpic';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_gallery'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_gallery'] = <<<XML
<?xml version="1.0"?>
<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet.tabGeneral><ROOT><sheetTitle><![CDATA[LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab]]></sheetTitle><type>array</type><el><settings.elements><title><![CDATA[Elemente]]></title><tx_templatevoila><title><![CDATA[Elemente]]></title></tx_templatevoila><section>1</section><type>array</type><el><container_elements><type>array</type><title><![CDATA[Element]]></title><tx_templatevoila><title><![CDATA[Elemente]]></title></tx_templatevoila><el><image><TCEforms><label><![CDATA[Bild]]></label><config>
	<type>group</type>
	<internal_type>db</internal_type>
	<appearance>
		<elementBrowserType>file</elementBrowserType>
		<elementBrowserAllowed>gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg</elementBrowserAllowed>
	</appearance>
	<allowed>sys_file</allowed>
	<size>1</size>
	<minitems>0</minitems>
	<maxitems>1</maxitems>
	<show_thumbs>1</show_thumbs>

	<dce_load_schema>1</dce_load_schema>
	<dce_get_fal_objects>1</dce_get_fal_objects>
</config>
</TCEforms></image><alt><TCEforms><label><![CDATA[Alt text]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim</eval>
</config></TCEforms></alt><title><TCEforms><label><![CDATA[Titel]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim</eval>
</config></TCEforms></title><text><TCEforms><label><![CDATA[Text]]></label><config>
	<type>text</type>
	<rows>5</rows>
	<cols>30</cols>
	<eval>trim</eval>
</config></TCEforms></text><link><TCEforms><label><![CDATA[Link]]></label><config>
	<type>input</type>
	<renderType>inputLink</renderType>
	<size>30</size>
	<eval>trim</eval>
	<softref>typolink,typolink_tag,images,url</softref>
	<fieldControl>
		<linkPopup>
			<options>
				<!--<blindLinkOptions>file,mail,page,spec,url</blindLinkOptions>-->
				<!--<blindLinkFields>class,params,target,title</blindLinkFields>-->
			</options>
		</linkPopup>
	</fieldControl>
</config>
</TCEforms></link><btnText><TCEforms><label><![CDATA[Button Text]]></label><config>
	<type>input</type>
	<size>30</size>
	<eval>trim</eval>
</config></TCEforms></btnText><type><TCEforms><label><![CDATA[Typ]]></label><config>
	<type>select</type>
	<items type="array">
		<numIndex index="0" type="array">
			<numIndex index="0">Bild</numIndex>
			<numIndex index="1">0</numIndex>
		</numIndex>
		<numIndex index="1" type="array">
			<numIndex index="0">Text</numIndex>
			<numIndex index="1">1</numIndex>
		</numIndex>
	</items>
	<size>1</size>
	<minitems>1</minitems>
	<maxitems>1</maxitems>
</config>
<!-- <onChange>reload</onChange> -->
</TCEforms></type></el></container_elements></el></settings.elements></el></ROOT></sheet.tabGeneral></sheets></T3DataStructure>

XML;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_gallery_head']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_gallery_head']['showitem'] = 'CType';
$GLOBALS['TCA']['tt_content']['types']['dce_gallery']['showitem'] = '--palette--;;dce_palette_dce_gallery_head,
--palette--;;dce_palette_dce_gallery,
pi_flexform,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended';
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_gallery']['canNotCollapse'] = true;
$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_dce_gallery']['showitem'] = 'sys_language_uid,l18n_parent,colPos,hidden';



#
