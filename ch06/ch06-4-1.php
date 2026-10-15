<?php
function printHeader()
{
    echo "<h3>SID: C113181181</h3>";
    echo "<h3>Name: 葉育晉 </h3>";
    echo "<h3>Ex05</h3>";
}
printHeader();
function callFunc1(Closure $closure) 
{
    $closure();
}

function callFunc2(Callable $callback) 
{
    $callback();
}

$hello = function() {
    echo "Hello, World!<br/>";
};
function hi() 
{
    echo "Hi, World!<br/>";
}

//callfunc1("hi");
callFunc1($hello);
callFunc2("hi");
callFunc2($hello);