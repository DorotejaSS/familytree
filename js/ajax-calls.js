window.addEventListener('load', () => {

	makeAjaxRequest('get', 'http://www.familytree.com/view/inc/ajax-functions.php');

	input_el = document.getElementById('inputPeople');
	input_el.addEventListener('keyup', (e) => {

		var input_val = e.target.value;
		var data = {
			movie_letters: input_val
		};

	makeAjaxRequest('get', 'http://www.familytree.com/view/inc/ajax-functions.php', data);
		
	});
});

function makeAjaxRequest(method, url, payload = false){

	var xhr = new XMLHttpRequest();

	if (payload != false){
		var cntr = 0;
		for (var key in payload){
			url += (++cntr == 1) ? '?'+key+'='+payload[key] : '&'+key+'='+payload[key];
		}
	}

	xhr.open(method, url);
	xhr.onreadystatechange = () =>{
		if (xhr.readyState == 4){
			var response = JSON.parse(xhr.responseText);
			displayResults('people_list', response);
		}
	}
		xhr.send();
}

function displayResults(container_table_id, data){
	var people_list_container = document.querySelector('table#people_list tbody');
	people_list_container.innerHTML = '';

	for (var i = data.length - 1; i >= 0; i--) {
		var people = data[i];
		var new_people = `
			<tr>
				<td>${people.gender}</td>
				<td>${people.first_name}e</td>
				<td>${people.last_name}e</td>
				<td>${people.dod}</td>
				<td>${people.dob}</td>
			</tr>
		`;
		people_list_container.insertAdjacentHTML('beforeend', new_people);
	}
}
				// <td>${people.edit}</td>
				// <td>${people.delete}</td>