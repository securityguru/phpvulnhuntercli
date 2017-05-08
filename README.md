# phpvulnhuntercli
use only php5, php7 is not supported
php5 main.php --project_path=PATH --scan-path=PATH --scan_type=TYPE

TYPE:
<!--?php 
			$vectors = array(
			    'all' 			=> 'All',
			    'server' 		=> 'All server-side',							
			    'code' 			=> '- Code Execution',
			    'exec' 			=> '- Command Execution',
			    'connect'		=> '- Header Injection',							
			    'file_read' 	=> '- File Disclosure',
			    'file_include' 	=> '- File Inclusion',							
			    'file_affect' 	=> '- File Manipulation',
			    'ldap' 			=> '- LDAP Injection',
			    'database' 		=> '- SQL Injection',
			    'xpath' 		=> '- XPath Injection',
			    'other' 		=> '- other',
			    'client' 		=> 'All client-side',
			    'xss' 			=> '- Cross-Site Scripting',
			    'httpheader'	=> '- HTTP Response Splitting',
			    'unserialize' 	=> 'Unserialize / POP'
			    //'crypto'		=> 'Crypto hints'
			);
			
