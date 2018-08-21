FROM nginx:1.14
LABEL maintainer="Makgsoewar <makgsoewar@gmail.com>"
#COPY ./nginx.conf /etc/nginx/nginx.conf

# Download certificate and key from the customer portal (https://cs.nginx.com)
# and copy to the build context
#COPY nginx-repo.crt /etc/ssl/nginx/
#COPY nginx-repo.key /etc/ssl/nginx/

COPY index.php /usr/local/nginx/html
COPY index.html /usr/local/nginx/html

EXPOSE 80