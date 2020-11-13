<?php
require 'src/HTMLOffice/HTMLOffice.php'

class Example {

	$sampleHTMLTable = '<table>
							<tr><td>Cell1</td><td>Cell2</td></tr>
							<tr><td colspan=2>Unified</td></tr>
						</table>';

	public function __construct(){
		$officeExporter = new HTMLOffice();
		$officeExporter->exportToExcel($sampleHTMLTable,'Export testing');
	}
}

?>