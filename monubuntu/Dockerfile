
FROM ubuntu

RUN apt update && \
apt upgrade -y && \
apt install -y nano vim net-tools dnsutils curl wget links telnet mysql-client

CMD [ "tail", "-f", "/dev/null" ]
FROM ubuntu:latest

RUN apt update && apt upgrade -y

RUN apt install -y vim nano git curl wget links telnet  dnsutils net-tools iproute2 mysql-client

CMD ["tail","-f","/dev/null"]