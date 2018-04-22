<?php

/**
 *
 * @package phpBB Extension - Move Topics When Locked
 * @copyright (c) 2016 kasimi
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.0.4] (https://github.com/phpBBTraducoes)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'MOVE_TOPICS_WHEN_LOCKED'					=> 'Mover os tópicos quando trancados',
	'MOVE_TOPICS'								=> 'Mover tópicos trancados automaticamente',
	'MOVE_TOPICS_SOLVED'						=> 'Mover tópicos resolvidos & trancados automaticamente',
	'MOVE_TOPICS_SOLVED_EXTENSION'				=> '<a href="https://www.phpbb.com/customise/db/extension/topic_solved/">Topic Solved</a>',
	'MOVE_TOPICS_SOLVED_VERSION'				=> 'Você precisa de pelo menos versão <strong>%1$s</strong> da extensão <strong>%2$s</strong>.',
	'MOVE_TOPICS_SOLVED_ENABLED'				=> 'A extensão <strong>%s</strong> está ativada.',
	'MOVE_TOPICS_TO'							=> 'Mover tópicos trancados para',
	'MOVE_TOPICS_APPLY_TO_SUBFORUMS'			=> 'Aplique estas opções a todos os sub-fóruns agora',
	'MOVE_TOPICS_APPLY_TO_SUBFORUMS_EXPLAIN'	=> 'Se definido como "Sim", as preferências acima serão aplicadas a este fórum e a todos os sub-fóruns (e seus sub-fóruns).',
));
