<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="styleOrderTicket.css">
<div class="container bootdey">
<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="widget-box">
				<div class="widget-header widget-header-large">
					<h3 class="widget-title grey lighter">
						<i class="ace-icon fa fa-leaf green"></i>
						Ticket receipt
					</h3>

					<div class="widget-toolbar no-border invoice-info">
						<span class="invoice-info-label">Invoice:</span>
						<span class="red">#121212</span>

						<br>
						<span class="invoice-info-label">Date:</span>
						<span class="blue">DD/MM/YYYY</span>
					</div>

					<div class="widget-toolbar hidden-480">
						<a href="#">
							<i class="ace-icon fa fa-print"></i>
						</a>
					</div>
				</div>

				<div class="widget-body">
					<div class="widget-main padding-24">
						<div class="row">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
										<b>Movie Ticket Info</b>
									</div>
								</div>

								<div>
									<ul class="list-unstyled spaced">
										<li>
											<i class="ace-icon fa fa-caret-right blue"></i>Movie Name : How To Train Your Dragon 3
										</li>

										<li>
											<i class="ace-icon fa fa-caret-right blue"></i>Duration : 1 hr 43 mins

										<li>
											<i class="ace-icon fa fa-caret-right blue"></i>Date : 10 / 12 / 2021
										</li>
										
										<li>
											<i class="ace-icon fa fa-caret-right blue"></i>
											Seat Position :
											<b class="red"><?php 
											
											$seats = $_POST['seats'];
											
											echo $seats; ?> </b>
										</li>

									</ul>
								</div>
							</div><!-- /.col -->

							<div class="col-sm-6">
								<div class="row">
									<div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
										<b>Customer Info</b>
									</div>
								</div>

								<div>
									<ul class="list-unstyled  spaced">
										<li>
											<i class="ace-icon fa fa-caret-right green"></i>Customer Name :
											<?php echo $_POST['firstname']. " " .$_POST['lastname']; ?>
										</li>

										<li>
											<i class="ace-icon fa fa-caret-right green"></i>Tickets :
											<?php echo $_POST['ticket']?>
										</li>

										<li>
											<i class="ace-icon fa fa-caret-right green"></i>Country :
											Malaysia
										</li>

									</ul>
								</div>
							</div><!-- /.col -->
						</div><!-- /.row -->

						<div class="space"></div>

						<div>
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th class="center">#</th>
										<th>Movie Title</th>
										<th class="hidden-xs">Description</th>
										<th>Total</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td class="center">1</td>

										<td>
											<a href="#">"How To Train Your Dragon 3"</a>
										</td>
										<td class="hidden-xs">
											"Hiccup aims to unite the vikings and the dragons in order to bring peace on the island of Berk. However, he must stop the evil Grimmel and his devious plans to wipe out all dragons."
										</td>
										
										<td>$20</td>
									</tr>

								</tbody>
							</table>
						</div>

						<div class="hr hr8 hr-double hr-dotted"></div>

						<div class="row">
							<div class="col-sm-5 pull-right">
								<h4 class="pull-right">
									Total amount :
									<span class="red">$20</span>
								</h4>
							</div>
							<div class="col-sm-7 pull-left"> Extra Information </div>
						</div>

						<div class="space-6"></div>
						<div class="well">
							Thank you for choosing Frostbrewn Movies.
							We believe you will be satisfied by our services.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>