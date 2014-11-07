<?php
		require_once 'Mobile_Detect.php';
		
		
		
		$detect = new Mobile_Detect;
		
		if ($detect->isMobile() ) {
                   
 ?>
<b><h1 style="font-size: 100px">About</h1></b>

<img src="http://directory.ucanews.com/uploads/images/1357896339.jpg" alt="mop logo" width="250" height="250">
<b><h1>Military Ordinariate of the Philippines Profile</h1></b>

<p>The Military Ordinariate of the Philippines or MOP is a personal
    diocese of men and women in uniform or for the different branch of service.
    The said branch of service includes the Armed Forces of the Philippines (A.F.P.),
    Philippine National Police (P.N.P.), Bureau of Jail Management and Penology (B.J.M.P.),
    and the Philippine Coast Guard. </p>
</br>
</br>

<img src="http://www.alconphils.com/wp-content/uploads/2014/02/afp.jpg" alt="afp logo" width="250" height="250">
<h1>Armed Forces of the Philippines (AFP)</h1> 
<p>This branch of the government is 
    dependent to the Military Ordinariate of 
    the Philippines as its own diocese. Also,
    it is one of the main branches of service 
    that the diocese is handling. It is a volunteer
    force that is composed of three major branches: 
    Philippine Army, Philippine Navy, and the Philippine Army. 
    All under the Armed Forces of the Philippines is privileged
    to store their personal data including their Baptism,
    Confirmation and Wedding Certificate thus making the data
    secured and stored in one unique file system which is in MOP.</p>
</br>
</br>

<img src="http://2.bp.blogspot.com/-6cOTG_P3w7Y/T27eRz7U-_I/AAAAAAAAAtw/hOTgWhgry5w/s1600/logo+pnp+3.png" alt="pnp logo" width="250" height="250">
<h1>Philippine National Police (PNP)</h1> 
<p>This is the civilian national police force of the Philippines that 
aims to protect civilians and enforce the law. PNP is also part of 
the main dependent organization of the Military Ordinariate of the Philippines.
All of the personal files of these men including their Baptism, Confirmation and
Wedding Certificates are all going to be taken care of the Military Ordinariate 
of the Philippines.</p>
</br>
</br>


<img src="http://globalnation.inquirer.net/files/2013/01/pcg-logo.jpg" alt="pcg logo" width="250" height="250">	
<h1>Philippine Coast Guard</h1> 
<p>This government organization provides armed and uniformed service and also 
enforces law within Philippine waters. As one of the main branch of the Military
Ordinariate of the Philippines it is also one of the main dependent branch of 
government that needs the service of MOP when it comes to the storage of Baptism,
Confirmation and Wedding Certificates which are all important files.</p>
</br>
</br>

<img src="https://lh4.googleusercontent.com/-CzpDKCdcBJ0/TrjtsqxZcFI/AAAAAAAAAKc/SSWFcxGcLZQ/s400/bfp%252520logo.jpg" alt="bjmp logo" width="250" height="250">
<h1>Bureau Fire Protection</h1> 
<p>Is an agency of the Department of Interior and Local Government (DILG) 
responsible for implementing national policies related to Firefighting 
and Protection as well as implementation of the Philippine Fire Code (PD 1185),
which was repealed and replaced by the New Fire Code of the Philippines (RA 9514).
Formerly known as the Constabulary Fire Protection Bureau, the BFP is in charge
of the administration and management of municipal and city fire and emergency services all over the country.</p>
</br>
</br>



<?php }else { ?>

<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>

<p><img src="http://directory.ucanews.com/uploads/images/1357896339.jpg" alt="mop logo" width="100" height="100"></p>
<b><h3>Military Ordinariate of the Philippines Profile</h3></b>

<p>The Military Ordinariate of the Philippines or MOP is a personal diocese of men and women in uniform or for the different branch of service. The said branch of service includes the Armed Forces of the Philippines (A.F.P.), Philippine National Police (P.N.P.), Bureau of Jail Management and Penology (B.J.M.P.), and the Philippine Coast Guard. </p>

<p><img src="http://www.alconphils.com/wp-content/uploads/2014/02/afp.jpg" alt="afp logo" width="100" height="100">
<h3>Armed Forces of the Philippines (AFP)</h3> </br>
This branch of the government is dependent to the Military Ordinariate of the Philippines as its own diocese. Also, it is one of the main branches of service that the diocese is handling. It is a volunteer force that is composed of three major branches: Philippine Army, Philippine Navy, and the Philippine Army. All under the Armed Forces of the Philippines is privileged to store their personal data including their Baptism, Confirmation and Wedding Certificate thus making the data secured and stored in one unique file system which is in MOP.
</p>

<p><img src="http://2.bp.blogspot.com/-6cOTG_P3w7Y/T27eRz7U-_I/AAAAAAAAAtw/hOTgWhgry5w/s1600/logo+pnp+3.png" alt="pnp logo" width="100" height="100">
<h3>Philippine National Police (PNP)</h3> </br>
This is the civilian national police force of the Philippines that aims to protect civilians and enforce the law. PNP is also part of the main dependent organization of the Military Ordinariate of the Philippines. All of the personal files of these men including their Baptism, Confirmation and Wedding Certificates are all going to be taken care of the Military Ordinariate of the Philippines.
</p>

<p><img src="http://globalnation.inquirer.net/files/2013/01/pcg-logo.jpg" alt="pcg logo" width="100" height="100">	
<h3>Philippine Coast Guard</h3> </br>
This government organization provides armed and uniformed service and also enforces law within Philippine waters. As one of the main branch of the Military Ordinariate of the Philippines it is also one of the main dependent branch of government that needs the service of MOP when it comes to the storage of Baptism, Confirmation and Wedding Certificates which are all important files.
</p>

<p><img src="https://lh4.googleusercontent.com/-CzpDKCdcBJ0/TrjtsqxZcFI/AAAAAAAAAKc/SSWFcxGcLZQ/s400/bfp%252520logo.jpg" alt="bjmp logo" width="100" height="100">
<h3>Bureau Fire Protection</h3> </br>
Is an agency of the Department of Interior and Local Government (DILG) responsible for implementing national policies related to Firefighting and Protection as well as implementation of the Philippine Fire Code (PD 1185), which was repealed and replaced by the New Fire Code of the Philippines (RA 9514). Formerly known as the Constabulary Fire Protection Bureau, the BFP is in charge of the administration and management of municipal and city fire and emergency services all over the country.
</p>

<?php } ?>


