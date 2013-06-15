<?php 
include '../../../header.php'; ?>

<ul class="breadcrumb">
  <li><a href="<?php echo $siteurl; ?>">Home</a> <span class="divider">&rarr;</span></li>
  <li><a href="<?php echo $siteurl; ?>/tourney">2013 Junior Olympics</a> <span class="divider">&rarr;</span></li>
  <li><a href="<?php echo $siteurl; ?>/tourney/stats">14U - A - Statistics</a> <span class="divider">&rarr;</span></li>
  <li class="active">Red Deer Tour Snipers</li>
</ul>

<div class="row bio">
	<div class="span2">
		<img src="<?php echo $siteurl; ?>/assets/images/team.jpg" alt="Team Image"/>
	</div>
	<div class="span10">
		<h2>Red Deer Tour Snipers</h2>
		<p class="lead"><strong>Record: </strong>2-1-0</p>
		<p>1st Place</p>
	</div>
</div>

<h3>Player Statistics</h3>
<table class="table table-bordered table-striped table-hover table-condensed">
	<thead>
		<tr>
			<td></td>
			<th>Player</th>
			<th>POS</th>
			<th>GP</th>
			<th><a href="#">G</a></th>
			<th><a href="#">A</a></th>
			<th><a href="#">PTS <i class="icon-arrow-down"></i></th>
			<th><a href="#">PM</a></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td><a href="<?php echo $siteurl; ?>/tourney/stats/stats-team/stats-player">John James</a></td>
			<td>Forward</td>
			<td>3</td>
			<td>4</td>
			<td>2</td>
			<th>6</th>
			<td>2:00</td>
		</tr>
		<tr>
			<td>2</td>
			<td><a href="<?php echo $siteurl; ?>/tourney/stats/stats-team/stats-player">James Mastifson</a></td>
			<td>Defense</td>
			<td>3</td>
			<td>4</td>
			<td>2</td>
			<th>5</th>
			<td>0:00</td>
		</tr>
		<tr>
			<td>3</td>
			<td><a href="<?php echo $siteurl; ?>/tourney/stats/stats-team/stats-player">Drew Drury</a></td>
			<td>Forward</td>
			<td>3</td>
			<td>4</td>
			<td>2</td>
			<th>4</th>
			<td>4:00</td>
		</tr>
		<tr>
			<td>4</td>
			<td><a href="<?php echo $siteurl; ?>/tourney/stats/stats-team/stats-player">Adam Adams</a></td>
			<td>Goalie</td>
			<td>3</td>
			<td>0</td>
			<td>0</td>
			<th>3</th>
			<td>0:00</td>
		</tr>
		<tr>
			<td>5</td>
			<td><a href="<?php echo $siteurl; ?>/tourney/stats/stats-team/stats-player">John James</a></td>
			<td>Forward</td>
			<td>3</td>
			<td>4</td>
			<td>2</td>
			<th>2</th>
			<td>2:00</td>
		</tr>
		<tr>
			<td>6</td>
			<td><a href="<?php echo $siteurl; ?>/tourney/stats/stats-team/stats-player">James Mastifson</a></td>
			<td>Defense</td>
			<td>3</td>
			<td>4</td>
			<td>2</td>
			<th>1</th>
			<td>0:00</td>
		</tr>
		<tr>
			<td>7</td>
			<td><a href="<?php echo $siteurl; ?>/tourney/stats/stats-team/stats-player">Drew Drury</a></td>
			<td>Forward</td>
			<td>3</td>
			<td>4</td>
			<td>2</td>
			<th>0</th>
			<td>4:00</td>
		</tr>
		<tr>
			<td>8</td>
			<td><a href="<?php echo $siteurl; ?>/tourney/stats/stats-team/stats-player">Adam Adams</a></td>
			<td>Goalie</td>
			<td>3</td>
			<td>0</td>
			<td>0</td>
			<th>0</th>
			<td>0:00</td>
		</tr>
	</tbody>
</table>

<h3>Team Schedule</h3>
<table class="table table-bordered table-striped table-hover table-condensed">
	<thead>
		<tr>
			<th>Game #</th>
			<th>VS.</th>
			<th>Date</th>
			<th>Location</th>
			<th>Result</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><a href="<?php echo $siteurl; ?>/tourney/schedule/game-page">3968</a></td>
			<td>Scorpions</td>
			<td>July 6th, 4:00PM</td>
			<td>Huntington - Rink 1</td>
			<td>WIN 5-4</td>
		</tr>
		<tr>
			<td><a href="<?php echo $siteurl; ?>/tourney/schedule/game-page">3040</a></td>
			<td>Renegades</td>
			<td>July 6th, 4:00PM</td>
			<td>Huntington - Rink 2</td>
			<td>LOSS 5-4</td>
		</tr>
		<tr>
			<td><a href="<?php echo $siteurl; ?>/tourney/schedule/game-page">4023</a></td>
			<td>Jokers</td>
			<td>July 6th, 4:00PM</td>
			<td>Irvine - Rink 2</td>
			<td>WIN 5-4</td>
		</tr>
		<tr>
			<td><a href="<?php echo $siteurl; ?>/tourney/schedule/game-page">5104</a></td>
			<td>Scorpions</td>
			<td>July 20th, 4:00PM</td>
			<td>Honda Center - The Rink</td>
			<td>-</td>
		</tr>
		<tr>
			<td><a href="<?php echo $siteurl; ?>/tourney/schedule/game-page">6029</a></td>
			<td>Winner of <a href="<?php echo $siteurl; ?>/tourney/schedule/game-page">Game #4920</a></td>
			<td>July 20th, 4:00PM</td>
			<td>Honda Center - The Rink</td>
			<td>-</td>
		</tr>
	</tbody>
</table>

<?php include '../../../footer.php'; ?>