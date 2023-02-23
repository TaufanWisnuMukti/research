FROM wordpress:latest

RUN apt-get update && \
    apt-get install -y \
        iputils-ping

RUN apt-get update && \
    apt-get install -y \
        libapache2-mod-fcgid


RUN a2enmod rewrite
RUN a2enmod ssl
#RUN a2enmod proxy
#RUN a2enmod proxy_http
#RUN a2enmod proxy_balancer
#RUN a2enmod lbmethod_byrequests
RUN a2enmod headers
