# Get page uid
lib.pageUid = TEXT
lib.pageUid.data = page:uid

# Get page pid
lib.pagePid = TEXT
lib.pagePid.data = page:pid

# Language Key - English
lib.languageKey = TEXT
lib.languageKey.value = en

lib.pageTitle = TEXT
lib.pageTitle {
	field = subtitle // title
	noTrimWrap = |<title>| &nbsp;- HR Glas</title>|	
}
