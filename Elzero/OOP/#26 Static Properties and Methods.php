<?php
/*
    [ Static Keyword ]
    - Static Properties/Methods are Used to Acces Properties/Methods in a Global Scope

    - Declaring class Properties or Methods as Static
    Makes Them Accessible Without Needing an Instantiation of the Class.

    - Because Static Methods are Callable Without an Instance of the Object Created,
    the Peudo-Variable $this is not Available Inside the Method Declared as Static.

    - A Property declared as Static cannot be Accessed 
    With an Instantiated Class Object ( Though a Static Method Can).

    - "one of the Major Benefits to using Static Properties
    is That They Keeep Their Stored Values For The Duration of The Script."
*/

class devices
{

    public static $name = 'moha<br>';
    public static $device = 'Huawei<br>';

    public static function write()
    {
        return 'Hello static <br>';
    }
}


echo devices::$name;   // can write proparity without set an object !!!
echo devices::$device;
echo devices::write();

$phoon = new devices();
echo $phoon->write(); // working perfectly
echo $phoon->name; // will not work 
//echo devices::$name;