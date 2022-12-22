window.onload = function () {
    lightbox.options.fitImagesInViewport = true;
    lightbox.options.maxHeight = 700;
    $('.select2-js').select2({
        width: '100%'
    });
}

if (document.nFormEnquadramento) {
    function valida_formPatrimonio() {
        form = document.nFormEnquadramento;
        if (null_or_empty("iTipologia")
                || null_or_empty("iLimite"))
        {
            $(form).addClass('was-validated');

        } else {
            form.submit();
        }

    }
    function selectEnquadramento(tipologia) {
        xhttp = new XMLHttpRequest();
        xhttp.open("POST", base_url + "cla/get_enquadramento", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                result = JSON.parse(this.responseText);
                document.getElementById("iId").value = result.cod;
                document.getElementById("icategoria").value = result.categoria;
                document.getElementById("iUnidade").value = result.unidade;

            }
        };
        xhttp.send("cod=" + tipologia);
    }
}