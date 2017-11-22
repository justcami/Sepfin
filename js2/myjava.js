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
    var indice = document.form1.Departamento.selectedIndex; 
    var textoEscogido = document.form1.Departamento.options[indice].text; 
	if (textoEscogido=="SELECCIONE")
		{document.form1.departamento3.value = '';}
	else
		{document.form1.departamento3.value = textoEscogido;}
                
        var indice1 = document.form1.Ciudad.selectedIndex; 
    var textoEscogido = document.form1.Ciudad.options[indice1].text; 
	if (textoEscogido=="SELECCIONE")
		{document.form1.ciudad3.value = '';}
	else
		{document.form1.ciudad3.value = textoEscogido;}
                
        var indice2 = document.form1.mes.selectedIndex; 
    var textoEscogido = document.form1.mes.options[indice2].text; 
	if (textoEscogido=="SELECCIONE")
		{document.form1.mes3.value = '';}
	else
		{document.form1.mes3.value = textoEscogido;}
                
                
        var indice3 = document.form1.year.selectedIndex; 
    var textoEscogido = document.form1.year.options[indice3].text; 
	if (textoEscogido=="SELECCIONE")
		{document.form1.year3.value = '';}
	else
		{document.form1.year3.value = textoEscogido;}
                
        var indice4 = document.form1.cuotas.selectedIndex; 
    var textoEscogido = document.form1.cuotas.options[indice4].text; 
	if (textoEscogido=="SELECCIONE")
		{document.form1.cuotas3.value = '';}
	else
		{document.form1.cuotas3.value = textoEscogido;}
    
        var indice5 = document.form1.asesor2.selectedIndex; 
    var textoEscogido = document.form1.asesor2.options[indice5].text; 
	if (textoEscogido=="SELECCIONE")
		{document.form1.asesor3.value = '';}
	else
		{document.form1.asesor3.value = textoEscogido;}
                
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