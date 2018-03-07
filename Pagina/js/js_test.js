$(document).ready(function () {
	$('[data-toggle="tooltip"]').tooltip()
}); 

//Prueba 1
function table_power() {
	var n = parseInt(window.prompt("Ingresa un número", "1"));
	var str = "<h3 class='mb-3'>Prueba 1</h3><table class='table table-hover'>";
	str += "<tr><th>n</th><th>n^2</th><th>n^3</th></tr>";
	for (i=1; i<=n; i++) {
		str += "<tr><td>" + i + "</td><td>" + Math.pow(i,2) + "</td><td>" + Math.pow(i,3) + "</td></tr>";
	}
	str += "</table>";
	document.getElementById("js_test").innerHTML = str;
	return false;
}

//Prueba 2
function add_random() {
	var n1 = Math.floor(Math.random() * 11);
	var n2 = Math.floor(Math.random() * 11);
	var str = n1 + " + " + n2 + " = ";
	var start_time = new Date();
	var n = parseInt(window.prompt(str, "0"));
	var end_time = new Date();
	
	var time_diff = end_time - start_time;
	time_diff /= 1000;
	
	str = "<h3 class='mb-3'>Prueba 2</h3>";
	
	if (n == n1 + n2) {
		str += "<p>Respuesta correcta!</p>"
	} else {
		str += "<p>Respuesta incorrecta!</p>"
	}
	
	str += "<p>Tardaste " + time_diff + " segundos.</p>"
	
	document.getElementById("js_test").innerHTML = str;
	return false;
}

//Prueba 3
function test_3() {
	var str = "<h3 class='mb-3'>Prueba 3</h3><p>Ingresa los valores del arreglo separados por comas:</p>"
	str += '<div class="input-group mb-3"><input id="test_textfield" type="text" class="form-control" placeholder="0,-1,2,5,0"><div class="input-group-append"><button class="btn btn-primary" type="button" onclick="test_3_out()">Contar</button></div></div><div id="js_test_result"></div>';
	document.getElementById("js_test").innerHTML = str;
}

function array_count(s_array) {
	var n_neg=0, n_pos=0, n_nul=0;
	for (i=0; i<s_array.length; i++) {
		if (parseInt(s_array[i]) < 0) {
			n_neg++;
		} else if (parseInt(s_array[i]) == 0) {
			n_nul++;
		} else {
			n_pos++;
		}
	}
	return [n_neg, n_nul, n_pos];
}

function test_3_out() {
	var s_array = document.getElementById('test_textfield').value.split(',');
	
	var aux = array_count(s_array);
	var n_neg=aux[0], n_nul=aux[1], n_pos=aux[2];
	
	var str = "<p>Hay " + n_neg;
	
	if (n_neg == 1) {
		str += " número negativo, ";
	} else {
		str += " números negativos, ";
	}
	str += n_nul;
	if (n_nul == 1) {
		str += " cero, y ";
	} else {
		str += " ceros, y ";
	}
	str += n_pos;
	if (n_pos == 1) {
		str += " número positivos.</p>";
	} else {
		str += " números positivos.</p>";
	}
	document.getElementById("js_test_result").innerHTML = str;
	
	return false;
}

//Prueba 4
function test_4() {
	var str = "<h3 class='mb-3'>Prueba 4</h3><p>Ingresa los valores del arreglo separados por comas. Ingresa los arreglos separados por punto y coma ';':</p>"
	str += '<div class="input-group mb-3"><input id="test_textfield" type="text" class="form-control" placeholder="0,-1,2,5,0"><div class="input-group-append"><button class="btn btn-primary" type="button" onclick="test_4_out()">Promediar</button></div></div><div id="js_test_result"></div>';
	document.getElementById("js_test").innerHTML = str;
}

function array_mean(s_array) {
	var n = 0;
	var out = [];
	
	for (i=0; i<s_array.length; i++) {
		n = 0;
		for (j=0; j<s_array[i].length; j++) {
			n += parseInt(s_array[i][j])/s_array[i].length;
		}
		out.push(n);
	}
	
	return out;
}

function test_4_out() {
	var s_matrix = document.getElementById('test_textfield').value.split(';');
	for (i=0; i<s_matrix.length; i++)
		s_matrix[i] = s_matrix[i].split(',');
	var n = array_mean(s_matrix);
	
	var str = "";
	for (i=0; i<n.length; i++)
		str += "<p>El promedio de los números es " + n[i] + "</p>";
	
	document.getElementById("js_test_result").innerHTML = str;
	
	return false;
}

//Prueba 5
function test_5() {
	var str = "<h3 class='mb-3'>Prueba 5</h3><p>Ingresa el numero a invertir:</p>"
	str += '<div class="input-group mb-3"><input id="test_textfield" type="text" class="form-control" placeholder="12345"><div class="input-group-append"><button class="btn btn-primary" type="button" onclick="test_5_out()">Invertir</button></div></div><div id="js_test_result"></div>';
	document.getElementById("js_test").innerHTML = str;
}

function reverse_number(n) {
	n += "";
	return n.split("").reverse().join("");
}

function test_5_out() {
	var n = document.getElementById('test_textfield').value;
	var n_rev = reverse_number(n);
	
	var str = "<p>El número invertido es " + n_rev + "</p>";
	
	document.getElementById("js_test_result").innerHTML = str;
	
	return false;
}

//Prueba 6: Cálculo del area del círculo
function test_6() {
	var str = "<h3 class='mb-3'>Prueba 6</h3><p>Cálculo del área del círculo. Ingresa el radio:</p>"
	str += '<div class="input-group mb-3"><input id="test_textfield" type="text" class="form-control" placeholder="radio"><div class="input-group-append"><button class="btn btn-primary" type="button" onclick="test_6_out()">Calcular</button></div></div><div id="js_test_result"></div>';
	document.getElementById("js_test").innerHTML = str;
}

function circle_area(rad) {
	return Math.PI * Math.pow(rad,2);
}

function test_6_out() {
	var n = document.getElementById('test_textfield').value;
	var area = circle_area(n);
	
	var str = "<p>El área del círculo (de radio " + n + "cm) es " + area + "cm^2.</p>";
	
	document.getElementById("js_test_result").innerHTML = str;
	
	return false;
}