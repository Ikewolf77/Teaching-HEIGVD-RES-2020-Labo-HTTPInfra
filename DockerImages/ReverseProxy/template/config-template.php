
<?php
    $static_app = getenv('STATIC_APP');
	$dynamic_app = getenv('DYNAMIC_APP');
?>

<VirtualHost *:80>
	ServerName gnar.ch

	ProxyPass '/api/gnar/' 'http://<?php print "$dynamic_app"?>/'
	ProxyPassReverse '/api/gnar/' 'http://<?php print "$dynamic_app"?>/'

	ProxyPass '/' 'http://<?php print "$static_app"?>/'
	ProxyPassReverse '/' 'http://<?php print "$static_app"?>/'
</VirtualHost>
