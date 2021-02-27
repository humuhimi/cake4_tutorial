FROM alpine:3.4
FROM node:14.15-alpine3.10 as node
FROM nginx:stable-alpine
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

ENV TZ=UTC

# RUN apk update && \
    # apk add --update --no-cache --virtual=.build-dependencies g++ && \
COPY --from=node /usr/local/bin /usr/local/bin
COPY --from=node /opt /opt
COPY ./default.conf /etc/nginx/conf.d/default.conf

WORKDIR /work/backend
