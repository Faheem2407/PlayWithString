Basic String Manipulation
-------------------------

How to use this package:
-----------------------
1. create a fresh laravel project or inside your existing project just require this : composer require faheem2407/play-with-string
2. create an object of class StringHelper like this: $object = new StringHelper("pass a string or sentance here");
3. call upper function to make the passing sentance uppercase like this: echo $object->upper();
    output: PASS A STRING OR SENTENCE HERE
4. call lower function to make the passing sentance lowercase like this: echo $object->lower();
    output: pass a string or sentance here
6. call capitalize function to make the passing sentance's first word's first letter capital like this: echo $object->capitalize();
    output: Pass a string or sentance here
7. call capitalizeAll function to make the passing sentance's all word's first letter capital like this: echo $object->capitalizeAll();
    output: Pass A String Or Sentance Here
8. call reverse function to make the passing sentance revese: echo $object->reverse();
    output: ereh ecnatnes ro gnirts a ssap
