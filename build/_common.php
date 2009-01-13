<?php
require_once ("../../../includes/buildServer-common.php");

$options = array (
	"BaseBuilderBranch" => "R35_M4",
	
	"BranchAndJDK" => array (
		"emft.eclipse.org=------------,------------",
		"0.9.0=HEAD,/opt/sun-java2-5.0",
		"0.8.0=HEAD,/opt/sun-java2-5.0",
		#"0.7.1=R0_7_maintenance,/opt/sun-java2-5.0",
		
		"build.eclipse.org=------------,------------",
		"0.9.0=HEAD,/opt/public/common/ibm-java2-ppc-50",
		"0.8.0=HEAD,/opt/public/common/ibm-java2-ppc-50",
		#"0.7.1=R0_7_maintenance,/opt/public/common/ibm-java2-ppc-50"
	),
	
	/* define a regular expression to be used to collect the most recent
	 * matching dependencies for running a build. See also releng-common/tools/scripts/start_cron.sh
 	 * and /home/www-data/build/requests/dependencies.urls.txt
 	 * */
 	"regex" => "I200.*/eclipse-SDK-|[SR]-.*200.*/eclipse-SDK-|[ISR]200.*/emf-xsd-SDK-|[ISR]200.*/mdt-ocl-.*SDK-|[ISR]200.*/emf-query-SDK-|[ISR]200.*/emf-validation-SDK-|[ISR]200.*/emf-transaction-SDK-|[ISR]200.*/GEF-|[ISR]200.*/gmf-",

	"Mapfile_Rule_Default" => 0, // 0: "Use Map, No Tagging=use-false" or 1:"Generate Map, No Tagging=gen-false"

	"EmailDefault" => "jacques.lescot@anyware-tech.com", // prefil email contact box with comma-sep'd list
	
	"Users" => array("jlescot","jlescot",null) /* build user, eclipse cvs user, IES cvs user */
);

?>
