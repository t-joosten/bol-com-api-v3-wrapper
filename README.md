# bol-com-api-v3-wrapper
PHP wrapper package for the bol.com API v3

On error: GuzzleHttp\Exception\RequestException : cURL error 60: SSL certificate problem: unable to get local issuer certificate (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)

    - Go to vendor/guzzlehttp/guzzle/src/Client.php
    - Search for "verfiy"
    - Update value "true" for the absolute path of the 'cacert.pem'