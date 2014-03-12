odsPhpGenerator
===============

Este es un fork del proyecto disponible en:

	<http://odsphpgenerator.lapinator.net>

Básicamente se hizo el fork para poder publicarlo en el repositorio oficial de
composer <https://packagist.org>.

El paquete se encuentra en el repositorio oficial de composer en:

	<https://packagist.org/packages/lapinator.net/ods-php-generator>

Changelog
---------

Cambios respecto a la versión original:

-	Se hace uso de namespace odsphpgenerator.
-	Quitado constructor class/odsTableCell.php ya que genera conflictos con
	PHP >= 5.3
-	Agregado método getLetterFromNumber a ods.php que permite obtener el
	nombre de la celda a partir de su número.
