FROM debian:stretch
RUN echo 'deb http://mirrors.aliyun.com/debian stretch main' > /etc/apt/sources.list \
  && echo 'deb http://mirrors.aliyun.com/debian stretch-updates main' >> /etc/apt/sources.list \
  && echo 'deb http://mirrors.aliyun.com/debian-security stretch/updates main' >> /etc/apt/sources.list \
  && cp /usr/share/zoneinfo/Asia/Shanghai /etc/localtime && echo "Asia/Shanghai" >  /etc/timezone

RUN  apt-get update 
RUN  apt-get install -y --no-install-recommends libapache2-mod-php7.0 php7.0-bcmath php7.0-curl php7.0-gd php7.0-json php7.0-mbstring  php7.0-mysql  libphp-adodb 

RUN  apt-get install -y --no-install-recommends   apache2 
RUN  /usr/sbin/a2dismod  mpm_event \ 
     && /usr/sbin/a2enmod  php7.0

RUN  apt-get install  -y --no-install-recommends vim 

ADD . /

