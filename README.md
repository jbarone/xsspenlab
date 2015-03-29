# XSS Penlab #

This repository is a simple php web application that contains 3 examples of Cross-site Scripting (XSS) vulnerabilities.

## Setting Up ##

There are 2 ways provided to use this application, Docker and Vagrant.

### Docker ###

To use the docker version of this application simply execute the following:

	# docker run -d -p 80:80 jbarone/xsspenlab

### Vagrant ###

To use the [vagrant](https://www.vagrantup.com/) version, first you need to clone this repo and then start vagrant.

	$ git clone https://github.com/jbarone/xsspenlab.git
	$ cd xsspenlab
	$ vagrant up

## Using ##

Once the site is up and running you simple navigate your browser to [http://localhost](http://locahost) and have fun.