# php minimal

Skeleton for running small php scripts locally with enabled `assert` function


## Local work

Build docker image
```shell
make build
```

Connect to terminal
```shell
make exec
```

Or `make all` for both

or use built in php server [http://localhost:8080](http://localhost:8080)
```shell
# start server on 8080 port
make serve 
# custom port 8081
make serve PORT=8081
```

*Dafault php version is 7.4*. Use PHP_VERSION= for using custom version. 
```shell
make all PHP_VERSION=8.0
# run both 
make all PHP_VERSION=7.4 && make all PHP_VERSION=8.0
```



## Adopt for you 

- Click on [Use template button](https://prnt.sc/w7avaw) 
- Write some code
- Write more code