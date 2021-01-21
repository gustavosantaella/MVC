<?php 


FUNCTION HeaderPage()
{
	/*require view header in loyout*/
REQUIRE_ONCE("./LAYOUT/header.php");
}


FUNCTION FooterPage()
{
	/*require view footer in loyout*/
REQUIRE_ONCE("./LAYOUT/footer.php");
}


FUNCTION UrlBase()
{
	/* url base project*/
	echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME']."/";


}