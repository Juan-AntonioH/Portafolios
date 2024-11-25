function change_lang(lang) {
    // Cambiar el valor de lang entre 'en' y 'es'
    let newLang = lang === 'en' ? 'es' : 'en';
    // Hacer una solicitud AJAX para cambiar el idioma en la sesión
    let xhr = new XMLHttpRequest();
    xhr.open('POST', location.href + '?lang=' + newLang, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Recargar la página para reflejar el cambio de idioma
            location.reload();
        }
    };
    xhr.send();
}