<?php

/******************************************************************************/
/* Each entry of that file can be associated with a comment to indicate its   */
/* state. When there is no comment, it means the entry is fully translated.   */
/* The recognized comments are (comment matching is case-insensitive):        */
/*   + TODO: the entry has never been translated.                             */
/*   + DIRTY: the entry has been translated but needs to be updated.          */
/*   + IGNORE: the entry does not need to be translated.                      */
/* When a comment is not recognized, it is discarded.                         */
/******************************************************************************/

return array(
	'api' => array(
		'documentation' => 'Copy the following URL to use it within an external tool.',	// TODO
		'title' => 'API',	// TODO
	),
	'bookmarklet' => array(
		'documentation' => 'Drag this button to your bookmarks toolbar or right-click it and choose “Bookmark This Link”. Then click the “Subscribe” button in any page you want to subscribe to.',	// TODO
		'label' => 'Subscribe',	// TODO
		'title' => 'Bookmarklet',	// TODO
	),
	'category' => array(
		'_' => 'קטגוריה',
		'add' => 'Add a category',	// TODO
		'archiving' => 'ארכוב',
		'dynamic_opml' => array(
			'_' => 'Dynamic OPML',	// TODO
			'help' => 'Provide the URL to an <a href="http://opml.org/" target="_blank">OPML file</a> to dynamically populate this category with feeds',	// TODO
		),
		'empty' => 'Empty category',	// TODO
		'expand' => 'Expand category',	// TODO
		'information' => 'מידע',
		'open' => 'Open category',	// TODO
		'opml_url' => 'OPML URL',	// TODO
		'position' => 'Display position',	// TODO
		'position_help' => 'To control category sort order',	// TODO
		'title' => 'כותרת',
	),
	'feed' => array(
		'accept_cookies' => 'Accept cookies',	// TODO
		'accept_cookies_help' => 'Allow the feed server to set cookies (stored in memory for the duration of the request only)',	// TODO
		'add' => 'הוספת הזנה',
		'advanced' => 'מתקדם',
		'archiving' => 'ארכוב',
		'auth' => array(
			'configuration' => 'כניסה לחשבון',
			'help' => 'החיבור מתיר לגשת להזנות RSS מוגנות',
			'http' => 'HTTP אימות',
			'password' => 'HTTP סיסמה',
			'username' => 'HTTP שם משתמש',
		),
		'clear_cache' => 'Always clear cache',	// TODO
		'content_action' => array(
			'_' => 'Content action when fetching the article content',	// TODO
			'append' => 'Add after existing content',	// TODO
			'prepend' => 'Add before existing content',	// TODO
			'replace' => 'Replace existing content',	// TODO
		),
		'content_retrieval' => 'Content retrieval',	// TODO
		'css_cookie' => 'Use Cookies when fetching the article content',	// TODO
		'css_cookie_help' => 'Example: <kbd>foo=bar; gdpr_consent=true; cookie=value</kbd>',	// TODO
		'css_help' => 'קבלת הזנות RSS קטומות	(זהירות, לוקח זמן רב יותר!)',
		'css_path' => 'נתיב הCSS של המאמר באתר המקורי',
		'css_path_filter' => array(
			'_' => 'CSS selector of the elements to remove',	// TODO
			'help' => 'A CSS selector may be a list such as: <kbd>.footer, .aside, p[data-sanitized-class~="menu"]</kbd>',	// TODO
		),
		'description' => 'תיאור',
		'empty' => 'הזנה זו ריקה. אנא ודאו שהיא עדיין מתוחזקת.',
		'error' => 'הזנה זו נתקלה בשגיאה, אנא ודאו שהיא תקינה ואז נסו שנית.',	// DIRTY
		'export-as-opml' => array(
			'download' => 'Download',	// TODO
			'help' => 'XML file (data subset. <a href="https://freshrss.github.io/FreshRSS/en/developers/OPML.html" target="_blank">See documentation</a>)',	// TODO
			'label' => 'Export as OPML',	// TODO
		),
		'filteractions' => array(
			'_' => 'Filter actions',	// TODO
			'help' => 'Write one search filter per line. Operators <a href="https://freshrss.github.io/FreshRSS/en/users/10_filter.html#with-the-search-field" target="_blank">see documentation</a>.',	// TODO
		),
		'http_headers' => 'HTTP Headers',	// TODO
		'http_headers_help' => 'Headers are separated by a newline, and the name and value of a header are separated by a colon (e.g: <kbd><code>Accept: application/atom+xml<br />Authorization: Bearer some-token</code></kbd>).',	// TODO
		'information' => 'מידע',
		'keep_min' => 'מסםר מינימלי של מאמרים לשמור',
		'kind' => array(
			'_' => 'Type of feed source',	// TODO
			'html_json' => array(
				'_' => 'HTML + XPath + JSON dot notation (JSON in HTML)',	// TODO
				'xpath' => array(
					'_' => 'XPath for JSON in HTML',	// TODO
					'help' => 'Example: <code>//script[@type="application/json"]</code>',	// TODO
				),
			),
			'html_xpath' => array(
				'_' => 'HTML + XPath (Web scraping)',	// TODO
				'feed_title' => array(
					'_' => 'feed title',	// TODO
					'help' => 'Example: <code>//title</code> or a static string: <code>"My custom feed"</code>',	// TODO
				),
				'help' => '<dfn><a href="https://www.w3.org/TR/xpath-10/" target="_blank">XPath 1.0</a></dfn> is a standard query language for advanced users, and which FreshRSS supports to enable Web scraping.',	// TODO
				'item' => array(
					'_' => 'finding news <strong>items</strong><br /><small>(most important)</small>',	// TODO
					'help' => 'Example: <code>//div[@class="news-item"]</code>',	// TODO
				),
				'item_author' => array(
					'_' => 'item author',	// TODO
					'help' => 'Can also be a static string. Example: <code>"Anonymous"</code>',	// TODO
				),
				'item_categories' => 'item tags',	// TODO
				'item_content' => array(
					'_' => 'item content',	// TODO
					'help' => 'Example to take the full item: <code>.</code>',	// TODO
				),
				'item_thumbnail' => array(
					'_' => 'item thumbnail',	// TODO
					'help' => 'Example: <code>descendant::img/@src</code>',	// TODO
				),
				'item_timeFormat' => array(
					'_' => 'Custom date/time format',	// TODO
					'help' => 'Optional. A format supported by <a href="https://php.net/datetime.createfromformat" target="_blank"><code>DateTime::createFromFormat()</code></a> such as <code>d-m-Y H:i:s</code>',	// TODO
				),
				'item_timestamp' => array(
					'_' => 'item date',	// TODO
					'help' => 'The result will be parsed by <a href="https://php.net/strtotime" target="_blank"><code>strtotime()</code></a>',	// TODO
				),
				'item_title' => array(
					'_' => 'item title',	// TODO
					'help' => 'Use in particular the <a href="https://developer.mozilla.org/docs/Web/XPath/Axes" target="_blank">XPath axis</a> <code>descendant::</code> like <code>descendant::h2</code>',	// TODO
				),
				'item_uid' => array(
					'_' => 'item unique ID',	// TODO
					'help' => 'Optional. Example: <code>descendant::div/@data-uri</code>',	// TODO
				),
				'item_uri' => array(
					'_' => 'item link (URL)',	// TODO
					'help' => 'Example: <code>descendant::a/@href</code>',	// TODO
				),
				'relative' => 'XPath (relative to item) for:',	// TODO
				'xpath' => 'XPath for:',	// TODO
			),
			'json_dotnotation' => array(
				'_' => 'JSON (dot notation)',	// TODO
				'feed_title' => array(
					'_' => 'feed title',	// TODO
					'help' => 'Example: <code>meta.title</code> or a static string: <code>"My custom feed"</code>',	// TODO
				),
				'help' => 'A JSON dot notated uses dots between objects and brackets for arrays (e.g. <code>data.items[0].title</code>)',	// TODO
				'item' => array(
					'_' => 'finding news <strong>items</strong><br /><small>(most important)</small>',	// TODO
					'help' => 'JSON path to the array containing the items, e.g. <code>$</code> or <code>newsItems</code>',	// TODO
				),
				'item_author' => 'item author',	// TODO
				'item_categories' => 'item tags',	// TODO
				'item_content' => array(
					'_' => 'item content',	// TODO
					'help' => 'Key under which the content is found, e.g. <code>content</code>',	// TODO
				),
				'item_thumbnail' => array(
					'_' => 'item thumbnail',	// TODO
					'help' => 'Example: <code>image</code>',	// TODO
				),
				'item_timeFormat' => array(
					'_' => 'Custom date/time format',	// TODO
					'help' => 'Optional. A format supported by <a href="https://php.net/datetime.createfromformat" target="_blank"><code>DateTime::createFromFormat()</code></a> such as <code>d-m-Y H:i:s</code>',	// TODO
				),
				'item_timestamp' => array(
					'_' => 'item date',	// TODO
					'help' => 'The result will be parsed by <a href="https://php.net/strtotime" target="_blank"><code>strtotime()</code></a>',	// TODO
				),
				'item_title' => 'item title',	// TODO
				'item_uid' => 'item unique ID',	// TODO
				'item_uri' => array(
					'_' => 'item link (URL)',	// TODO
					'help' => 'Example: <code>permalink</code>',	// TODO
				),
				'json' => 'dot notation for:',	// TODO
				'relative' => 'dot notated path (relative to item) for:',	// TODO
			),
			'jsonfeed' => 'JSON Feed',	// TODO
			'rss' => 'RSS / Atom (default)',	// TODO
			'xml_xpath' => 'XML + XPath',	// TODO
		),
		'maintenance' => array(
			'clear_cache' => 'Clear cache',	// TODO
			'clear_cache_help' => 'Clear the cache for this feed.',	// TODO
			'reload_articles' => 'Reload articles',	// TODO
			'reload_articles_help' => 'Reload that many articles and fetch complete content if a selector is defined.',	// TODO
			'title' => 'Maintenance',	// TODO
		),
		'max_http_redir' => 'Max HTTP redirects',	// TODO
		'max_http_redir_help' => 'Set to 0 or leave blank to disable, -1 for unlimited redirects',	// TODO
		'method' => array(
			'_' => 'HTTP Method',	// TODO
		),
		'method_help' => 'The POST payload has automatic support for <code>application/x-www-form-urlencoded</code> and <code>application/json</code>',	// TODO
		'method_postparams' => 'Payload for POST',	// TODO
		'moved_category_deleted' => 'כאשר הקטגוריה נמחקת ההזנות שבתוכה אוטומטית מקוטלגות תחת	<em>%s</em>.',
		'mute' => array(
			'_' => 'mute',	// TODO
			'state_is_muted' => 'This feed is muted',	// TODO
		),
		'no_selected' => 'אף הזנה לא נבחרה.',
		'number_entries' => '%d מאמרים',
		'open_feed' => 'Open feed %s',	// TODO
		'path_entries_conditions' => 'Conditions for content retrieval',	// TODO
		'priority' => array(
			'_' => 'Visibility',	// TODO
			'archived' => 'Do not show (archived)',	// TODO
			'category' => 'Show in its category',	// TODO
			'important' => 'Show in important feeds',	// TODO
			'main_stream' => 'הצגה בזרם המרכזי',
		),
		'proxy' => 'Set a proxy for fetching this feed',	// TODO
		'proxy_help' => 'Select a protocol (e.g: SOCKS5) and enter the proxy address (e.g: <kbd>127.0.0.1:1080</kbd> or <kbd>username:password@127.0.0.1:1080</kbd>)',	// TODO
		'selector_preview' => array(
			'show_raw' => 'Show source code',	// TODO
			'show_rendered' => 'Show content',	// TODO
		),
		'show' => array(
			'all' => 'Show all feeds',	// TODO
			'error' => 'Show only feeds with errors',	// TODO
		),
		'showing' => array(
			'error' => 'Showing only feeds with errors',	// TODO
		),
		'ssl_verify' => 'Verify SSL security',	// TODO
		'stats' => 'סטטיסטיקות',
		'think_to_add' => 'ניתן להוסיף הזנות חדשות.',
		'timeout' => 'Timeout in seconds',	// TODO
		'title' => 'כותרת',
		'title_add' => 'הוספת הזנה',
		'ttl' => 'אין לרענן אוטומטית יותר מ',
		'unicityCriteria' => array(
			'_' => 'Article unicity criteria',	// TODO
			'forced' => '<span title="Block the unicity criteria, even when the feed has duplicate articles">forced</span>',	// TODO
			'help' => 'Relevant for invalid feeds.<br />⚠️ Changing the policy will create duplicates.',	// TODO
			'id' => 'Standard ID (default)',	// TODO
			'link' => 'Link',	// TODO
			'sha1:link_published' => 'Link + Date',	// TODO
			'sha1:link_published_title' => 'Link + Date + Title',	// TODO
			'sha1:link_published_title_content' => 'Link + Date + Title + Content',	// TODO
		),
		'url' => 'הזנה URL',
		'useragent' => 'Set the user agent for fetching this feed',	// TODO
		'useragent_help' => 'Example: <kbd>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:86.0)</kbd>',	// TODO
		'validator' => 'בדיקות תקינות ההזנה',
		'website' => 'אתר URL',
		'websub' => 'Instant notifications with WebSub',	// TODO
	),
	'import_export' => array(
		'export' => array(
			'_' => 'ייצוא',
			'sqlite' => 'Download user database as SQLite',	// TODO
		),
		'export_labelled' => 'Export your labelled articles',	// TODO
		'export_opml' => 'ייצוא רשימת הזנות (OPML)',
		'export_starred' => 'ייצוא מועדפים',
		'feed_list' => 'רשימה של %s מאמרים',
		'file_to_import' => 'קובץ לייבוא<br />(OPML, Json or Zip)',
		'file_to_import_no_zip' => 'קובץ לייבוא<br />(OPML or Json)',
		'import' => 'ייבוא',
		'starred_list' => 'רשימת מאמרים מועדפים',
		'title' => 'יבוא / יצוא ',
	),
	'menu' => array(
		'add' => 'Add a feed or category',	// TODO
		'import_export' => 'יבוא / יצוא ',
		'label_management' => 'Label management',	// TODO
		'stats' => array(
			'idle' => 'הזנות שלא עודכנו',
			'main' => 'סטטיסטיקות ראשיות',
			'repartition' => 'חלוקת המאמרים',
		),
		'subscription_management' => 'ניהול הרשמות',
		'subscription_tools' => 'Subscription tools',	// TODO
	),
	'tag' => array(
		'auto_label' => 'Add this label to new articles',	// TODO
		'name' => 'Name',	// TODO
		'new_name' => 'New name',	// TODO
		'old_name' => 'Old name',	// TODO
	),
	'title' => array(
		'_' => 'ניהול הרשמות',
		'add' => 'Add a feed or category',	// TODO
		'add_category' => 'Add a category',	// TODO
		'add_dynamic_opml' => 'Add dynamic OPML',	// TODO
		'add_feed' => 'Add a feed',	// TODO
		'add_label' => 'Add a label',	// TODO
		'add_opml_category' => 'OPML category name',	// TODO
		'delete_label' => 'Delete a label',	// TODO
		'feed_management' => 'ניהול הזנות RSS',
		'rename_label' => 'Rename a label',	// TODO
		'subscription_tools' => 'Subscription tools',	// TODO
	),
);
