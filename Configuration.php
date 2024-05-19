<?php
include_once ("controller/PokemonController.php");

include_once ("model/PokemonModel.php");

include_once ("helper/Database.php");
include_once ("helper/Router.php");

include_once ("helper/Presenter.php");
include_once ("helper/MustachePresenter.php");

include_once('vendor/mustache/src/Mustache/Autoloader.php');

class Configuration
{


    //controller
    public static function GetPokemonController()
    {
        return new PokemonController( self::getPokemonModel(),self::getPresenter());
    }

    //model
    private static function getPokemonModel()

    {
        return new PokemonModel(self::getDatabase());
    }

    //Helper
    public static function getRouter(){
        return new Router("getPokemonController","get");
    }

    private static function getPresenter()
    {
        return new MustachePresenter("view/template");
    }
    private static function getConfig()
    {
        return parse_ini_file("config/config.ini");
    }

    public static function getDatabase(){
        $config = self::getConfig();
        return new Database($config["servername"], $config["username"], $config["database"], $config["password"]);
    }

}