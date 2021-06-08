<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre a aplicação Reminder

<p> Uma aplicação construida em laravel na versão <b>5.5.*</b> do Laravel. A aplicação consiste em o usuário criar lembretes
    para ser ou não notificado dependendo da escolha em, não notificar, notificação diária ou a cada hora.
</p>

## Instalando a aplicação no Windows.

- Voce vai precisar da versão do PHP 7.1 ou 7.3 que são as versões que dão suporte a versão 5.5 do Laravel.
- Baixe o [Xampp-7.3](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.3.28/) de acordo com o seu sistema operacional Windows x86/x64, seguindo a instalação padrão e escolhendo os módulos necessários [apache, php, mysql] ele fornece um ambiente completo para sua aplicação rodar.
- Após a instalação do xampp clone o repositório dentro da pasta htdocs que foi criada na instalação do xampp <b>C:/xampp/htdocs</b>
- Acesse o diretório clonado faça uma cópia do arquivo .env.example e renomei para .env rode o comando php artisan key:generate e nesse arquivo faça a configuração do banco de dados lembrando que a instalação padrão do Xampp fornece um banco de dados com usuario root e sem senha.
- Rode os comando php artisan migrate --seed e depois php artisan serve ou start o Xampp lembrando que se peferir iniciar o xampp precisa passar o caminha na url do navegador até o diretório /public.
- Para acessar clique no botão registra-se e faça uma conta