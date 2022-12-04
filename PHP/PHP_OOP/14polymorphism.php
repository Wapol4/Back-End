<?php 
    require_once "data/programmer.php";

    $company = new Company();
    $company->programmer = new Programmer("Eko");

    $company->programmer = new backEnd("Kurniawan");

    $company->programmer = new frontEnd("Kanedi");

    sayProgrammer(new Programmer("Eko"));
    
?>