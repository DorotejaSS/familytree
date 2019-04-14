		<form>
			<div class="form-group">
				<input type="text" class="form-control" id="inputPeople" placeholder="Search trough your family">
				<small id="peopleHelp" class="form-text text-muted">We'll search people for you...</small>
			</div>
		</form>
		<div class="table">
			<table border="1" cellpadding="10" cellspacing="0" id="people_list">
				<caption>People created</caption>
				<thead>
					<tr>
						<th>Gender</th>
						<th>First name</th>
						<th>Last name</th>
						<th>Life</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($this->info['people'] as $key => $people) : ?>
						<tr>
							<td><?php echo $people['gender']; ?></td>
							<td><?php echo $people['first_name']; ?></td>
							<td><?php echo $people['last_name']; ?></td>
							<td><?php echo $people ['life']; ?></td>
							<td><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
							<td><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>