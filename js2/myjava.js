$(function(){
    $('#CboDepartamentos').on('change', function(){
        var id = $('#CboDepartamentos').val();
        var url = '../php/ventas/agrega_ciudades.php';
        $.ajax({
            type:'POST',
            url:url,
            data:'id='+id,
            success: function(data){
                $('#CboCiudades option').remove();
                $('#CboCiudades').append(data);
            }
        });
        return false;
    }); 
});

$(function(){
    $('#CboDepartamentos2').on('change', function(){
        var id = $('#CboDepartamentos2').val();
        var url = '../ventas/agrega_ciudades.php';
        $.ajax({
            type:'POST',
            url:url,
            data:'id='+id,
            success: function(data){
                $('#CboCiudades option').remove();
                $('#CboCiudades').append(data);
            }
        });
        return false;
    }); 
});

function dimePropiedades(){ 
    var indice = document.form1.id_usuario.selectedIndex; 
    var textoEscogido = document.form1.id_usuario.options[indice].text; 
	if (textoEscogido=="SELECCIONE")
		{document.form1.id_usuario2.value = '';}
	else
		{document.form1.id_usuario2.value = textoEscogido;}
	document.form1.submit();
}

function dimePropiedades2(){ 
	var indice = document.form1.asesor2.selectedIndex; 
    	var textoEscogido = document.form1.asesor2.options[indice].text; 
	if (textoEscogido=="SELECCIONE")
		{document.form1.asesor3.value = '';}
	else
		{document.form1.asesor3.value = textoEscogido;}
	
	document.form1.submit();

}

function dimePropiedades3(){ 
    var indice = document.form1.servicio2.selectedIndex; 
    var textoEscogido = document.form1.servicio2.options[indice].text; 
	if (textoEscogido=="SELECCIONE")
		{document.form1.servicio3.value = '';}
	else
		{document.form1.servicio3.value = textoEscogido;}
                
        var indice1 = document.form1.ciudad2.selectedIndex; 
    var textoEscogido = document.form1.ciudad2.options[indice1].text; 
	if (textoEscogido=="SELECCIONE")
		{document.form1.ciudad3.value = '';}
	else
		{document.form1.ciudad3.value = textoEscogido;}
                
        var indice2 = document.form1.operador2.selectedIndex; 
    var textoEscogido = document.form1.operador2.options[indice2].text; 
	if (textoEscogido=="SELECCIONE")
		{document.form1.operador3.value = '';}
	else
		{document.form1.operador3.value = textoEscogido;}
                
                
        var indice3 = document.form1.asesor2.selectedIndex; 
    var textoEscogido = document.form1.asesor2.options[indice3].text; 
	if (textoEscogido=="SELECCIONE")
		{document.form1.asesor3.value = '';}
	else
		{document.form1.asesor3.value = textoEscogido;}
                
                
	document.form1.submit();
}
