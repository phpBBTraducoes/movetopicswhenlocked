<?php

/**
 *
 * @package phpBB Extension - Move Topics When Locked
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.1.0] (https://github.com/phpBBTraducoes)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'MOVE_TOPICS_WHEN_LOCKED'					=> 'Mover os tópicos quando trancados',
	'MOVE_TOPICS'								=> 'Mover tópicos trancados automaticamente',
	
	'MOVE_TOPICS_SOLVED'						=> 'Mover tópicos resolvidos & trancados automaticamente',
	'MOVE_TOPICS_SOLVED_EXTENSION'				=> '<a href="https://www.phpbb.com/customise/db/extension/topic_solved/">Topic Solved</a>',
	
	'MOVE_AUTO_LOCK'				            => 'Mover tópicos auto-trancados automaticamente.',
	'MOVE_AUTO_LOCK_EXTENSION'				    => '<a href="https://www.phpbb.com/customise/db/extension/auto_lock_topics/">Auto-lock Topics</a>',
	
	'MOVE_EXTENSION_VERSION'					=> 'Você precisa de pelo menos a versão <strong>%1$s</strong> da extensão <strong>%2$s</strong>.',
	'MOVE_EXTENSION_ENABLED'					=> 'A extensão <strong>%s</strong> está ativada.',
	
	'MOVE_TOPICS_TO'							=> 'Mover tópicos trancados para',
	'MOVE_TOPICS_APPLY_TO_SUBFORUMS'			=> 'Aplique estas opções a todos os sub-fóruns agora',
	'MOVE_TOPICS_APPLY_TO_SUBFORUMS_EXPLAIN'	=> 'Se definido como "Sim", as preferências acima serão aplicadas a este fórum e a todos os sub-fóruns (e seus sub-fóruns).',
]);
