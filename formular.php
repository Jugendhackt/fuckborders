<form id="form">
	<p>
		<label for="Typ of border">Type of border</label>
		<br>
		<input type="checkbox" name="check_typeofborder1" value="border control" id="Type of border">border control
		<br>
		<input type="checkbox" name="check_typeofcorder2" value="border fence" id="Type of border">border fence
		<br>
		<input type="checkbox" name="check_typeofborder3" value="cameras" id="Type of border">cameras
		<br>
		<input type="checkbox" name="check_typeofborder4" value="floodlights" id="Type of border">floodlights
		<br>
		<input type="checkbox" name="check_typeofborder5" value="barbwire" id="Type of barbwire">barbwire
		<br>
	</p>

			<p>
				<label for="Type of barbwire">Type of barbwire</label>
				<br>
				<input type="checkbox" name="type1" value="NATO-barbwire" id="Type of barbwire">NATO-barbwire
				<br>
				<input type="checkbox" name="type2" value="regular barbwire" id="Type of barbwire">regular barbwire
				<br>
				<!-- mit Javascript Info-Icon mit Pop-Up einfügen, in Pop-Up Bild von 1. Nato-Stacheldraht 2. Normalem Stacheldraht-->
			</p>

			<p>
				<label   for="Position of barbwire">Positionn of barbwire</label>
				<br>
				<input type="checkbox" name="position1" value="on top of fance" id="Position of barbwire">on top of the fance
				<br>
				<input type="checkbox" name="position2" value="at the bottom" id="Position of barbwire">at the bottom
				<br>
			</p>

			<p>
				<label for="Duration">Duration (temporary will be delated after 10 days)</label>
				<br>
				<input type="checkbox" name="Duration_temporary" value="temporary" id="Duration">temporary
				<br>
				<input type="checkbox" name="Duration_permanent" value="permanent" id="Duration">permanent
				<br>
			</p>

			<label for="Other informations">Other informations:</label>
			<input id="Other informations" minlength="1" maxlength="250">
			<br>
			
			<button type="button" id="Set">Set</button>
</form>