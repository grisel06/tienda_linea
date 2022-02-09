function forgot_password() {
    let form_forgot_password = document.getElementById('form_forgot_password');
    let formData = new FormData(form_forgot_password);
    console.log(formData.get('email'));

    //peticion
    let url = '../controllers/archivo.php';
    fetch(url, {
            method: 'POST', // or 'PUT'
            body: formData,
        }).then(res => res.json())
        .catch(error => console.error('Error:', error))
        .then(response => console.log('Success:', response));

}