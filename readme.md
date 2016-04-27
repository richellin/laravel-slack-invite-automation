# laravel-slack-invite-automation

![](https://raw.github.com/richellin/laravel-slack-invite-automation/master/screenshots/screenshot_1.png)

### Use
+ [Laravel5.2](https://laravel.com/docs/5.2)
+ [richellin/php-chat-invite-automation](https://github.com/richellin/php-chat-invite-automation)
+ PHP >=5.5.9

### Run
```sh
#Clone the repository
git clone https://github.com/richellin/laravel-slack-invite-automation.git
cd laravel-slack-invite-automation

#Laravel Setting
composer install
cp .env.example .env
php artisan key:generate
chmod -R 777 storage;

#Edit .env
vi .env
APP_ENV=local
APP_DEBUG=true
...
MAIL_ENCRYPTION=null
#Add Slack(team name,channel,token)
SLACK_TEAM_NAME=YOUR TEAM NAME ex)richellin
SLACK_CHANNEL=YOUR CHANNEL ex)C4324233CK
SLACK_TOKEN=YOUR TOKEN ex)xoxp-12309asdk238...

#Start artisan
php artisan serve 
#OR
php artisan serve --host 0.0.0.0

#Open your browser to 
http://localhost:8000/invitation/slack
```

### Link
+ [outsideris/slack-invite-automation](https://github.com/outsideris/slack-invite-automation)
