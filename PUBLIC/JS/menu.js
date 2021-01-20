const menu = () => {
    $(".contenet_agregar").change(() => {
        $(".acordeon_titulo_agregar").css({ transform: "scale(1.2)", left: "35%", transition: "all 1000ms" });
        var checked = document.getElementById("checkbox_agregar").checked;
        if (checked) {
            $(".acordeon_subtitulo_agregar").css({ display: "block" });
        } else {
            $(".acordeon_subtitulo_agregar").css({ display: "none" });
            $(".acordeon_contenido_agregar").next().slideUp();
            $(".acordeon_titulo_agregar").css({ transform: "scale(1.0)", left: "20px", transition: "all 1000ms" });
        }
        $(".acordeon_titulo_agregar").next().slideToggle();
    });
    $(".acordeon_contenido_agregar").click(() => {
        $(".acordeon_contenido_agregar").next().slideToggle();
    });
    /*DESPLEGAR LISTAR*/ $(".contenet_listar").change(() => {
        $(".acordeon_titulo_listar").css({ transform: "scale(1.2)", left: "35%", transition: "all 1000ms" });
        var checked_administrar = document.getElementById("checkbox_listar").checked;
        if (checked_administrar) {
            $(".acordeon_subtitulo_listar").css({ display: "block" });
        } else {
            $(".acordeon_subtitulo_listar").css({ display: "none" });
            $(".acordeon_contenido_listar").next().slideUp();
            $(".acordeon_titulo_listar").css({ transform: "scale(1.0)", left: "20px", transition: "all 1000ms" });
        }
        $(".acordeon_titulo_listar").next().slideToggle();
    });
    $(".acordeon_contenido_listar").click(() => {
        $(".acordeon_contenido_listar").next().slideToggle();
    });
    /*/DESPLEGAR ADMINISTRAR////////////////////*/ $(".contenet_administrar").change(() => {
        $(".acordeon_titulo_administrar").css({ transform: "scale(1.2)", left: "35%", transition: "all 1000ms" });
        var checked_administrar = document.getElementById("checkbox_administrar").checked;
        if (checked_administrar) {
            $(".acordeon_subtitulo_administrar").css({ display: "block" });
        } else {
            $(".acordeon_titulo_administrar").css({ transform: "scale(1.0)", left: "20px", transition: "all 1000ms" });
            $(".acordeon_subtitulo_administrar").css({ display: "none" });
            $(".acordeon_contenido_administrar").next().slideUp();
        }
        $(".acordeon_titulo_administrar").next().slideToggle();
    });
    $(".acordeon_contenido_administrar").click(() => {
        $(".acordeon_contenido_administrar").next().slideToggle();
    });
};
