import { f_obtener_alumnos } from "./helpers/database.js";

(() => {

    f_obtener_alumnos().then(arrAlumno => console.log(arrAlumno));

})();