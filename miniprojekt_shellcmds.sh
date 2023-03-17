docker volume create tiborapachevolume
docker run -d --name tiborapachemysql -e MYSQL_ROOT_PASSWORD=gibbiX12345 -v tiborapachevolume:/var/lib/mysql mariadb
docker exec -i tiborapachemysql mysql -uroot -pgibbiX12345 < tibor-miniprojekt.sql
docker build -t tiborapacheimage .
docker run -d --name tiborapache -p 8080:80 -e PMA_HOST=tiborapachemysql tiborapacheimage
docker ps