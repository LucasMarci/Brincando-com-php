<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, OCaml, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

$salario_h = 120;
###salario hora  ##############

$trabalho_semana = 40;
#####trabalho da semana #############

$trabalho_mes = $trabalho_semana * 4;
### salario mes #############
$extra = ((($salario_h /100)*50) + $salario_h ) * 12; 
$salario_total = $trabalho_mes * $salario_h + $extra;

echo "o valor total que o funcionario recebe e de R$ $salario_total";
