<!-- 

HADER PAGE 
----------
specify active tab with $active='' before inclusion

Home -> 'home'
Queue -> 'queue'
Submit -> 'submit'
SSH -> 'ssh'

-->

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="#"><? echo $world['ClusterName']; ?></a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li <? if ($active === 'home') { echo 'class="active"'; } ?>>
						<a href="mainmenu.php">
							<i class="icon-home icon-white"></i> 
							Home
						</a>
					</li>
					<li <? if ($active === 'queue') { echo 'class="active"'; } ?>>
						<a href="queue_status.php">
							<i class="icon-th-list icon-white"></i>
							Queue
						</a>
					</li>
					<li <? if ($active === 'submit') { echo 'class="active"'; } ?>>
						<a href="jsubmit.php">
							<i class="icon-download-alt icon-white"></i>
							Submit
						</a>
					</li>
					<li <? if ($active === 'ssh') { echo 'class="active"'; } ?>>
						<a href="sshinterf.php">
							<i class="icon-tasks icon-white"></i>
							SSH
						</a>
					</li>
				</ul> 
			</div>
			<div class="nav-collapse pull-right">
				<ul class="nav">
					<li>
						<? echo $world['GangliaURL2']; ?>
					</li>
					<li>
						<a href="logout.php">
							<i class="icon-user icon-white"></i>
							Logout
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div> <!-- .navbar-inner -->
</div> <!-- .navbar -->