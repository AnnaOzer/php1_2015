<?php

// у классов могут быть константы, принадлежат классу а не объекту

class Math 
{
    const PI = 3.14159;
}

// доступ к константе через знак двойного двоеточия
// это знак статического доступа
echo Math::PI;