FROM php:5.6-apache

RUN apt-get update && \
    apt-get install -y ssmtp && \
    apt-get clean && \
    echo "FromLineOverride=YES" >> /etc/ssmtp/ssmtp.conf && \
    echo 'sendmail_path = "/usr/sbin/ssmtp -t"' > /usr/local/etc/php/conf.d/mail.ini  && \
    echo "root=omarahmedansari@gmail.com" >> /etc/ssmtp/ssmtp.conf && \
    echo "mailhub=smtp.gmail.com:587" >> /etc/ssmtp/ssmtp.conf && \
    echo "AuthUser=omarahmedansari@gmail.com" >> /etc/ssmtp/ssmtp.conf && \
    echo "AuthPass=npavpjgwnneskonb" >> /etc/ssmtp/ssmtp.conf && \
    echo "UseTLS=YES" >> /etc/ssmtp/ssmtp.conf && \
    echo "UseSTARTTLS=YES" >> /etc/ssmtp/ssmtp.conf

COPY src/ /var/www/html/

