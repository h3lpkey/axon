Как поднять бэк:

`php artisan key:generate`

`php artisan migrate`

`php artisan voyager:install`

`php artisan voyager:admin your@email.com --create`

В админке заходим в пользователя, меняем locale на `ru`, чтобы админка была на русском.

Заходим в Tools->Bread, создаем Bread для sessions, ставим calendar -> date.

Заходим в Tools->Bread, создаем Bread для feedback, ставим image -> image, feedback -> text area, active->checkbox.

Можно в Tools->menu Builder настроить меню, убрать лишнее, или для сессий и отзывов выбрать значки какие-нибудь. На усмотрение.
