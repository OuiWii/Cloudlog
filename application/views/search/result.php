<div class="card-body">
<h2>Results for <?php echo $id; ?></h2>

<p>Sorry, but we didn't find any past QSOs with <?php echo $id; ?></p>

<?php if(isset($callsign['callsign'])) { ?>
<h3>Callbook Search for <?php echo $id; ?></h3>

<table>

<tr>
	<td align="left">Callsign</td>
   <td style="padding: 0.3em 0 0.3em 0.5em;" align="left"><?php echo str_replace("0","&Oslash;",strtoupper($callsign['callsign'])); ?> <a target="_blank" href="https://www.qrz.com/db/<?php echo strtoupper($callsign['callsign']); ?>"><img style="vertical-align: baseline" width="16" height="16" src="<?php echo base_url(); ?>images/icons/qrz.png" alt="Lookup <?php echo strtoupper($callsign['callsign']); ?> on QRZ.com"></a> <a target="_blank" href="https://www.hamqth.com/<?php echo strtoupper($callsign['callsign']); ?>"><img style="vertical-align: baseline" width="16" height="16" src="<?php echo base_url(); ?>images/icons/hamqth.png" alt="Lookup <?php echo strtoupper($callsign['callsign']); ?> on HamQTH"></a></td>
</tr>

<tr>
	<td style="padding: 0 0.3em 0 0" align="left">Name</td>
	<td style="padding: 0.3em 0 0.3em 0.5em;" align="left"><?php echo $callsign['name']; ?></td>
</tr>

<tr>
	<td style="padding: 0 0.3em 0 0:" align="left">City</td>
	<td style="padding: 0.3em 0 0.3em 0.5em;" align="left"><?php echo $callsign['city']; ?></td>
</tr>

<tr>
	<td style="padding: 0 0.3em 0 0;" align="left">Gridsquare</td>
   <td style="padding: 0.3em 0 0.3em 0.5em;" align="left"><?php echo strtoupper($callsign['gridsquare']); ?></td>
</tr>

</table>

<?php } ?>
</div>
