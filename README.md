# Nullchaba
Форк оригинального репозитория [говнульча](https://github.com/klkvsk/0chan), от магмы с рядом изменений.

## Отличия от оригинала
* Удален луп и все его файлы (репозиторий знатно похудал)
* Удалена зависимость от анального зонда [sentry.io](https://sentry.io)
* Починен докер-компос файл
* Без пикчи невозможно создать тред
* Отключено создание юзердосок (пользователи все еще могут администрировать доски если у них будут права)
* Запилен делол
* Отключены упоминания
* Подробный мануал по поднятию

## TODO:
* Вротфильтр деструктивных параш

## Установка
### Требования
* Docker
* Docker Compose(3.2)
* Node.JS(взлетит и на ласт версии)
* git
* Ubuntu 16.04
### Установка на НОВОМ сервере
* Вы только что поставили на сервер Ubuntu 16.04 и авторизовались под рутом
* Линкаем домен к ип сервера и добавляем днс запись s01
1. `apt-get update && apt-get upgrade`
2. `adduser nullchan` (Вводите пароль и тд)
3. `usermod -a -G sudo nullchan`
4. `su nullchan`
5. `cd` (Переходим в корень нашего пользователя)
* Теперь все команды выполняем от `sudo` (Первый раз запросит пароль который вы ввели когда создавали пользователя)
5. `sudo apt-key adv --keyserver hkp://p80.pool.sks-keyservers.net:80 --recv-keys 58118E89F3A912897C070ADBF76221572C52609D`
6. `sudo apt-add-repository 'deb https://apt.dockerproject.org/repo ubuntu-xenial main'`
7. `sudo apt-get update`
8. `sudo apt-get install -y docker-engine`
9. `sudo service docker status` (Если там горит зелёная хуета то продолжаем)
10. `sudo usermod -aG docker nullchan`
11. `curl -sL https://deb.nodesource.com/setup_8.x -o nodesource_setup.sh`
12. `sudo chmod +x nodesource_setup.sh`
13. `sudo sh nodesource_setup.sh` (Ждем пока установитса нодежс)
14. ```sudo curl -L https://github.com/docker/compose/releases/download/1.23.1/docker-compose-`uname -s`-`uname -m` -o /usr/bin/docker-compose```
15. `sudo chmod +x /usr/bin/docker-compose`
16. `git clone https://github.com/MagmaDivide/0chan`
17. `cd 0chan`
18. `sudo mkdir /var/storage/ && sudo touch /var/storage/id && echo "s01" | sudo tee /var/storage/id`
19. `cp .env-dist .env`
20. Редактируем .env (Меняем только SALT на рандомную строку)
21. `cd frontend && npm install && npm run build` (Внимание нужно 1 гигабайт озу и больше)
22. `cd ..`
23. `docker-compose build`
24. `docker-compose up`
25. Если сайт заработал то авторизируемся под логином `epicfailguy` и паролем `123123123` ну и собсно меняем пароль
* Гавнельч гатов
