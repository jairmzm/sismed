<?php

session_start();
if (empty($_SESSION['active'])) {
	header('location: ../');
}

include "../conexion.php";
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Red de Salud Abancay - Unidad de Medicamentos Insumos y Drogas</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Red de Salud Abancay</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                        <li><a class="dropdown-item" href="#!">Actividad</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="cerrar_session.php">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Sistema V.1.0.</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Inicio
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Personal
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>


                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="registrar_personal.php">Registar Personal</a>
                                    <a class="nav-link" href="reporte_personal.php">Reporte Personal</a>
                                    <a class="nav-link" href="reporte_graficos_personal.php">Reporte Graficos</a>
                                </nav>
                            </div>

														<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts_disponibilidad" aria-expanded="false" aria-controls="collapseLayouts">
																<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
																Disponibilidad
																<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
														</a>
														<div class="collapse" id="collapseLayouts_disponibilidad" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
																<nav class="sb-sidenav-menu-nested nav">
																		<a class="nav-link" href="consulta_disponiblidad.php">Consulta disponibilidad</a>
																		<a class="nav-link" href="disponibilidad_consumos.php">Requerimiento</a>
																		<a class="nav-link" href="consulta_semaforo.php">Semaforo</a>
																		<a class="nav-link" href="movimientos_almacen.php">Movimientos Almacen</a>
																</nav>
														</div>
                                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Establecimientos de Salud
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
																	<?php if ($_SESSION['rol']==1){						 ?>

                                    <a class="nav-link" href="establecimiento.php">Registar Establecimiento</a>
																	<?php 			} ?>
                                    <a class="nav-link" href="reporte_establecimiento.php">Reporte Establecimiento</a>
                                    <a class="nav-link" href="reporte_graficos_establecimiento.php">Reporte Graficos</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">CATALOGOS</div>
                            <a class="nav-link" href="registrar_archivos.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Subir Archivos
                            </a>
                            <a class="nav-link" href="backup.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Backup
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Autor:</div>
                     Jhefersson Ticona Ortiz
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
