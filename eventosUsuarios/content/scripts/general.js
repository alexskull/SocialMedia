var General = {
    dialog: {
        confirm: null,
        alert: null,
        info: null
    },
    diccionario : new Array(),
    mostrar_alerta: function (mensaje, callback) {
        $("#modal-alert .modal-text").html(mensaje);
        $("#modal-div").html($("#modal-alert")[0].outerHTML);
        $('#modal').magnificPopup("open");
        this.dialog.alert = callback;
    },
    mostrar_info: function (mensaje, callback) {
        $("#modal-info .modal-text").html(mensaje);
        $("#modal-div").html($("#modal-info")[0].outerHTML);
        $('#modal').magnificPopup("open");
        this.dialog.info = callback;
    },
    mostrar_confirmacion: function (mensaje, callback) {
        $("#modal-confirm .modal-text").html(mensaje);
        $("#modal-div").html($("#modal-confirm")[0].outerHTML);
        $('#modal').magnificPopup("open");
        this.dialog.confirm = callback;
    },
    ocultar_modal: function(){
        $.magnificPopup.close();
    },
    enviar_ajax: function (options) {
        var defaults = {
            ruta: "?",
            formulario: "",
            json: true,
            funcion: this,
            indice: null,
        }        
        var settings = $.extend({}, defaults, options);
        $.ajax({
            url: settings.ruta,
            type: 'POST',
            data: settings.formulario,
            processData: false,
            contentType: false,
            success: function (data) {
                if (--General.loadIndex == 0)
                    $("#loading").hide();
                if (settings.json) {
                    try {        
                        data = $.parseJSON(data);
                        if (data.redirect != null) {
                            window.location.href = data.redirect;
                        }
                    }
                    catch (ex) {
                        console.error(ex.message + " " + data);
                        return;
                    }
                }
                settings.funcion(data, settings.indice);
            }
        });
    },
    form_trim: function (formulario) {        
        var localName = ("input");
        var type = ["text", "password"];
        var text;
        for (var i = 0 ; i < formulario.length ; i++) {            
            if (formulario[i].localName == "input" && type.indexOf(formulario[i].type) != -1)
                formulario[i].value = formulario[i].value.trim();
        }
        return formulario;
    },
    zero_fill: function ( number, width )
    {
        width -= number.toString().length;
        if ( width > 0 )
        {
            return new Array( width + (/\./.test( number ) ? 2 : 1) ).join( '0' ) + number;
        }
        return number + ""; // always return a string
    },
    esta_contenido: function (container) {
        if (!container.is(event.target) // if the target of the click isn't the container...
        && container.has(event.target).length === 0) // ... nor a descendant of the container
        { return false; }
        return true;
    },
    almacenar_form: function (nombre, form) {
        form = form.serializeArray();
        if (typeof (Storage) !== "undefined") {
            for (var i = 0; i < form.length ; i++) {
                sessionStorage[nombre + "_" + form[i].name] = form[i].value;
            }
        } else {
            console.log("Los datos del form no serán guardados");
        }
    },
    cargar_form: function (nombre, form) {
        var array = form.serializeArray();
        for (var i = 0; i < array.length ; i++) {
            form.find("[name=" + array[i].name + "]").val(sessionStorage[nombre + "_" + array[i].name]);
        }
    },
    animar: function (object, selectedEffect){		
        var options = {};		
        if ( selectedEffect === "scale" ) 
            options = { percent: 0 };
        else if ( selectedEffect === "size" ) 
            options = { to: { width: 200, height: 60 } };
     
        $(object).toggle( selectedEffect, options, 250, null );
    },
    format: function() {
        // The string containing the format items (e.g. "{0}")
        // will and always has to be the first argument.
        var theString = arguments[0];

        // start with the second argument (i = 1)
        for (var i = 1; i < arguments.length; i++) {
            // "gm" = RegEx options for Global search (more than one instance)
            // and for Multiline search
            var regEx = new RegExp("\\{" + (i - 1) + "\\}", "gm");
            theString = theString.replace(regEx, arguments[i]);
        }

        return theString;
    },
    restar_fechas: function(f1,f2){
        var aFecha1 = f1.split('/'); 
        var aFecha2 = f2.split('/'); 
        var fFecha1 = Date.UTC(aFecha1[2],aFecha1[1]-1,aFecha1[0]); 
        var fFecha2 = Date.UTC(aFecha2[2],aFecha2[1]-1,aFecha2[0]); 
        var dif = fFecha2 - fFecha1;
        var dias = Math.floor(dif / (1000 * 60 * 60 * 24)); 
        return dias;
    },
    calcular_edad: function(date){
        var years = moment().diff(date, 'years');
        return years;
    }
};

$(function(){
    $('#modal').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in',
        modal: true
    });
    $("#modal-div").on('click', '#modal-confirm .modal-dismiss', function (e) {
        $.magnificPopup.close();
        General.dialog.confirm(false);
    });
    $("#modal-div").on('click', '#modal-confirm .modal-confirm', function (e) {
        $.magnificPopup.close();
        General.dialog.confirm(true);
    });
    $("#modal-div").on('click', '#modal-info .modal-confirm', function (e) {
        $.magnificPopup.close();
        if (General.dialog.info != null) General.dialog.info();
        General.dialog.info = null;
    });
    $("#modal-div").on('click', '#modal-alert .modal-confirm', function (e) {
        $.magnificPopup.close();
        if (General.dialog.alert != null) General.dialog.alert();
        General.dialog.alert = null;
    });
});