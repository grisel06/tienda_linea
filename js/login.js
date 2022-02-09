function login() {
    let form_login = document.getElementById('form_login');
    let formData = new FormData(form_login);
    console.log(formData.get('email'));
    console.log(formData.get('password'));

    //peticion
    let url = '../controllers/archivo.php';
    fetch(url, {
            method: 'POST', // or 'PUT'
            body: formData,
        }).then(res => res.json())
        .catch(error => console.error('Error:', error))
        .then(response => console.log('Success:', response));

}