<?php
DEFINE('NOSITEERRORS', true);

domain::add('action/tn', __DIR__, true, new domain([
		'folder' => 'h/2/action/tn/',
		'heading' => 'TN Action Party',
		'local' => 'http://localhost/h/2/action/tn/%subfol%/%site%/',
		'live' => 'https://%site%.tn.action.amadeusweb.in/',
		'local-base' => 'http://localhost/h/2/action/tn/%subfol%/',
		'live-base' => 'https://%subfol%.tn.action.amadeusweb.in/',
	],
	['%folder%www', '%folder%1/chennai'],
	[
		'1',
		'2',
		'3',
		'4',
		'5',
		'6',
	],
));
