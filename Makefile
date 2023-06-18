.PHONY:
image:
	docker build -t zenzen .

.PHONY:
image-no-cache:
	docker build -t zenzen . --no-cache

.PHONY:
run:
	docker run -p 80:80 -v ./html:/var/www/html zenzen

.PHONY:
cli-attach:
	docker exec -it `docker ps --format=json | jq -r 'select(.Image="zenzen") |.ID'` bash

.PHONY:
cli-run:
	docker run -it zenzen bash

.PHONY:
clean:
	docker rm `docker ps -a --format json |jq -r '. | select(.Image=="zenzen").ID'`
	docker rmi `docker image ls --format json |grep zenzen | jq -r .ID`
