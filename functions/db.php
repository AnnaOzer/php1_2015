<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 10.10.2015
 * Time: 22:15
 */
function config()
{
    return include __DIR__ . '/../config.php';
}

function DBConnect()
{
    $config = config();
    mysql_connect(
        $config['db']['host'],
        $config['db']['user'],
        $config['db']['password']
    );
    mysql_select_db($config['db']['dbname']);
}

function DBQuery($sql)
{
    DBConnect();
    $res = mysql_query($sql);

    if(!$res) {
        return[];
    }

    $ret=[];
    while($row = mysql_fetch_assoc($res))
    {
        $ret[] = $row;
    }
    return $ret;
}

function DBExec($sql){

    DBConnect();

    $res = mysql_query($sql);
    if(false === $res) {
        return false;
    }
    return true;

}

function DBQueryOne($sql)
{
    DBConnect();
    $res = mysql_query($sql);

    if(!$res) {
        return[];
    }

    $row = mysql_fetch_assoc($res);

    return $row;
}