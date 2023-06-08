<?php # menu.php

echo '
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark shadow">
        <div class="container ">
       
            <a class="navbar-brand " href="./">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-buildings-fill" viewBox="0 0 16 16">
                    <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z"/>
                </svg>            
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link active" href="./">Actividad</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./inquilinos.php">Inquilinos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./viviendas.php">Viviendas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Invitados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Registrar Visita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
';

?>