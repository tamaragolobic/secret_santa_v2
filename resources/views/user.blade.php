<?php
use App\User;
$user = new User();
?>
@extends('layout.header')
<nav class="navbar navbar-expand-lg navbar-dark">
    <span class="navbar-text navbar-brand">
    Dobrodešel/-la <?= $user->getUserName() ?>
    </span>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/room">Sobe</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/roomOption">Izbira sobe</a>
            </li>
        </ul>
        <a href="/login">Vpis</a>
        <a href="/register" class="mx-2">Registracija</a>
        <a href="/logout">Izpis</a>
    </div>
</nav>
<div class="container form">
    <div class="border border-dark rounded-bottom rounded-top">
        <h1>
            IZBRAN UPORABNIK
        </h1>
    </div>
</div>
@extends('layout.footer')
