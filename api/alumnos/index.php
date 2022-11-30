<?php

  require_once "../db.php";

  $sql = "SELECT ID, NOMBRE, APELLIDO FROM ALUMNO";

  $query = query($sql);
  $alumnos = array();
  while($rs = mysqli_fetch_array($query)){
      $alumno = new stdClass();
      $alumno->id          = $rs["ID"];
      $alumno->nombre      = $rs["NOMBRE"];
      $alumno->apellido    = $rs["APELLIDO"];
      array_push($alumnos, $alumno);
  }

  echo json_encode($alumnos);