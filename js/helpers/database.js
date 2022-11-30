const f_conectar = url => {

    let peticionAPI = fetch(url, { method: 'GET' })
        .then(  (response) => {
            return  response.json();
        })
        .catch( err => {
            console.log(err);
        });

    return peticionAPI;
}

export const f_obtener_alumnos = () => {
    let arrAlumnos = f_conectar("./api/alumnos/index.php");

    return arrAlumnos;
}