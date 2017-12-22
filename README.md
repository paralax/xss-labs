# xss-labs

small set of PHP scripts to practice exploiting XSS and CSRF injection vulns

# why?

for training and testing purposes. you can test detection products (e.g. vulnerability scanners), exploit tools, etc. 

these are NOT intended for evaluating appsec testing tools.

the idea is that you'd add these to an Apache VirtualHost directive for testing purposes. if you need to do some quick and dirty testing, fire up `php -S 0.0.0.0:8080` or something and go to town. 

# who?

jose nazario @jnazario

# inspired by 

https://github.com/AUDI-1/sqli-labs

# useful links

## XSS
- http://www.sitepoint.com/php-security-cross-site-scripting-attacks-xss/
- http://www.cis.syr.edu/~wedu/seed/Labs_12.04/Web/Web_CSRF_Elgg/Web_CSRF_Elgg.pdf
- http://www.cis.syr.edu/~wedu/seed/Labs/Attacks_XSS/XSS.pdf

- https://github.com/Danladi/HttpPwnly

## SSRF
- https://medium.com/@auxy233/the-design-and-implementation-of-ssrf-attack-framework-550e9fda16ea
