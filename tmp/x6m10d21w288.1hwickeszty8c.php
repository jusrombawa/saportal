<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $SITE; ?></title>

  <!-- CSS  -->
  <link href="<?php echo $UI . 'icons/material-icons.css'; ?>" rel="stylesheet">
  <link href="<?php echo $UI . 'css/materialize.css'; ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo $UI . 'css/style.css'; ?>" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body class="main">

	<!-- header-->
	<div class="row-no-pad UPpula valign-wrapper z-depth-2">
		<div class="col s1 "> <img width="115" src="ui/img/osa-logo.png"></div>
		<div class="col s11 "><h1><span class="white-text">&nbsp;&nbsp;SA Portal</span></h1></div>
	</div>
	
	<!-- login -->
	<form action="insert_log" id="insert" method='POST'>
		<div class="row UPluntian valign-wrapper z-depth-2">
			<div class="col s4 white-text"><input placeholder="Student No." id="student_no" type="text" class="validate"></div>
			<div class="col s8">
				<a class="waves-effect waves-light btn UPginto z-depth-2" id="login">Log in/out <i class="material-icons left">input</i></a>
			</div>
		</div>
	</form>
	<br/>

	<!-- panels -->
	<div class="row">

		<!--Student list-->
		
			<div class="col s2">
				<h5>Student</h5>
				<form action="view" id="viewTR" method="GET">
					<input type="hidden" value="<?php echo $sno; ?>" id="hidden-sn" name="sn">
					<table class="collection">
						<?php foreach (($snolist?:array()) as $sno): ?>
						<tr>
							<td><a class="collection-item black-text view"><?php echo trim($sno); ?></a></td>
							<td>
								<i class="material-icons left small UPterracotta-text">power_settings_new</i>
							</td>
						</tr>
						<?php endforeach; ?>
					</table>
				</form>
			</div>
		

		<!--Time record-->
		<?php if ($showTR): ?>
			<div class="col s8 offset-s1 blue lighten-5 z-depth-2">
				<h5 >Time Record for <?php echo $snview; ?></h5>
				<table class="highlight responsive-table blue lighten-5">
					<thead class="">
						<tr>
							<th>Status</th>
							<th>Day</th>
							<th>Year</th>
							<th>Time</th>
						</tr>
					</thead>
					
					<tbody class="blue lighten-5">

						<?php foreach (($timerec?:array()) as $record): ?>
							<tr>
								<td><?php echo $record['0']; ?></td>
								<td>
									<!-- <?php echo $record['2']; ?> -->
									<script>
										switch(<?php echo $record['2']; ?>)
										{
											case 1: document.write("January"); break;
											case 2: document.write("February"); break;
											case 3: document.write("March"); break;
											case 4: document.write("April"); break;
											case 5: document.write("May"); break;
											case 6: document.write("June"); break;
											case 7: document.write("July"); break;
											case 8: document.write("August"); break;
											case 9: document.write("September"); break;
											case 10: document.write("October"); break;
											case 11: document.write("November"); break;
											case 12: document.write("December");
										}
									</script>
									<?php echo $record['3']; ?>
								</td>
								<td><?php echo $record['1']; ?></td>
								<td><?php echo $record['4']; ?></td>
							</tr>
						<?php endforeach; ?>
						
					</tbody>
				</table>
			</div>
		<?php endif; ?>
	</div>

  <!--  Scripts-->
  <script src="<?php echo $UI . 'js/jquery.min.js'; ?>"></script>
  <script src="<?php echo $UI . 'js/jquery-ui.min.js'; ?>"></script>
  <script src="<?php echo $UI . 'js/materialize.js'; ?>"></script>
  <script src="<?php echo $UI . 'js/init.js'; ?>"></script>
  
  
	<script>
	$('#login').click(function(){
		$('#insert').submit();
	});

	$('.view').click(function(){
		$('#hidden-sn').val($(this).html());
		$('#viewTR').submit();
	});
	</script>
  </body>
</html>
