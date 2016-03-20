<?php
/**
 *
 * @package Recent Topics Extension
 * Danish translation by EverPvP
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 */

if (!defined('IN_PHPBB')) {
	exit;
}
if (empty($lang) || !is_array($lang)) {
	$lang = array();
}

$lang = array_merge(
	$lang, array(
	'RECENT_TOPICS'                    => 'Seneste emner',
	'RECENT_TOPICS_EXPLAIN'            => 'På denne side kan du ændre indstillinger for udvidelsen.<br /><br />Specifikke fora kan inkluderes eller exkluderes, ved at redigere dem i ACP.<br />Husk også at tjekke tilladelser, som tillader brugere at ændre nogle af indstilingerne fundet under deres profil.',

	'RECENT_TOPICS_LIST'            => 'Vis på "Seneste emner"',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'Slå til, for at vise emner fra dette forum, i seneste emner.',

	'RT_CONFIG'                        => 'Opsætning',
	'RT_ALT_LOCATION'                => 'Vis i alternativ lokation',
	'RT_ALT_LOCATION_EXP'            => 'Brug alternativ lokation til at vise seneste emner.<br />Ikke alle temaer understøtter dette. I prosilver, vil det blive flyttet ned i bunden.',
	'RT_ANTI_TOPICS'                => 'Eksluder indlæg',
	'RT_ANTI_TOPICS_EXP'            => 'ID\'et på det emner der skal udelukkes, sepereret med ", " (Eksempel: 7, 9)<br />Hvis du ikke ønsker at udelukke noget, skal du skrive 0.',
	'RT_MIN_TOPIC_LEVEL'            => 'Minimum emne type',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Bestemmer minimumsniveauet for emne type til at vise. Det vil kun vise emner af det indstillede niveau, og højere.<br />(0 = normal, 1 = sticky, 2 = bekendtgørelsen, 3 = global bekendtgørelse)',
	'RT_NUMBER'                        => 'Seneste emner',
	'RT_NUMBER_EXP'                    => 'Antallet af emner der skal vises.',
	'RT_PAGE_NUMBER'                => 'Seneste emner sider',
	'RT_PAGE_NUMBER_EXP'            => 'Du kan få vist nyere emner ved hjælp paginering. Du skal bare indtaste 1 for at deaktivere denne funktion. Hvis du indtaster 0 vil der være så mange sider som nødvendigt, for at vise alle emner af dit forum (ikke anbefalet).',
	'RT_PARENTS'                    => 'Vis over fora',
	'RT_PARENTS_EXP'                => 'Vis over fora',
	'RT_SORT_START_TIME'            => 'Sorter efter emnets starttidspunkt',
	'RT_SORT_START_TIME_EXP'        => 'Gøre det muligt at sortere de seneste emner ved starttidspunktet af emner, i stedet for efter nyeste emner.',
	'RT_UNREAD_ONLY'                => 'Vis kun ulæste emner',
	'RT_UNREAD_ONLY_EXP'            => 'Aktive "vis kun ulæste emner"  (uanset om det er de seneste eller ej). Denne funktion bruger de samme indstillinger (ekskl. fora / emner osv) som normal tilstand. Bemærk: Dette virker kun for registrerede brugere; gæster vil få den normale liste.',

	'RT_VIEW_ON'                    => 'Vis seneste emner på:',
	)
);