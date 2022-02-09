function register() {
    let form_register = document.getElementById('form_register');
    let formData = new FormData(form_register);
    console.log(formData.get('email'));
    console.log(formData.get('password'));
    console.log(formData.get('conf_password'));

    //peticion
    let url = '../controllers/archivo.php';
    fetch(url, {
            method: 'POST', // or 'PUT'
            body: formData,
        }).then(res => res.json())
        .catch(error => console.error('Error:', error))
        .then(response => console.log('Success:', response));

}