<?php

/**
 * @var rex_addon $this
 */


if (rex_addon::get('cronjob')->isAvailable() && !rex::isSafeMode()) {
    rex_cronjob_manager::registerType('rex_cronjob_dsgvo_dementia');
    rex_cronjob_manager::registerType('rex_cronjob_dsgvo_privacy');
}
if (rex_addon::get('cronjob')->isAvailable() && rex_addon::get('phpmailer')->isAvailable() && !rex::isSafeMode()) {
    rex_cronjob_manager::registerType('rex_cronjob_dsgvo_phpmailerlogs');
}

rex_sql_table::get(rex::getTable('dsgvo_client'))
->ensureColumn(new rex_sql_column('id', 'int(11)', false, null, 'auto_increment'))
    ->ensureColumn(new rex_sql_column('keyword', 'text'))
    ->ensureColumn(new rex_sql_column('domain', 'text'))
    ->ensureColumn(new rex_sql_column('lang', 'text'))
    ->ensureColumn(new rex_sql_column('prio', 'int(11)'))
    ->ensureColumn(new rex_sql_column('name', 'text'))
    ->ensureColumn(new rex_sql_column('text', 'text'))
    ->ensureColumn(new rex_sql_column('custom_text', 'text'))
    ->ensureColumn(new rex_sql_column('source', 'text'))
    ->ensureColumn(new rex_sql_column('source_url', 'text'))
    ->ensureColumn(new rex_sql_column('code', 'text'))
    ->ensureColumn(new rex_sql_column('status', 'text'))
    ->setPrimaryKey('id')
    ->ensure();


rex_sql_table::get(rex::getTable('dsgvo_server'))
    ->ensureColumn(new rex_sql_column('id', 'int(11)', false, null, 'auto_increment'))
    ->ensureColumn(new rex_sql_column('domain', 'text'))
    ->ensureColumn(new rex_sql_column('lang', 'text'))
    ->ensureColumn(new rex_sql_column('name', 'text'))
    ->ensureColumn(new rex_sql_column('keyword', 'text'))
    ->ensureColumn(new rex_sql_column('text', 'text'))
    ->ensureColumn(new rex_sql_column('source', 'text'))
    ->ensureColumn(new rex_sql_column('source_url', 'text'))
    ->ensureColumn(new rex_sql_column('prio', 'int(11)'))
    ->ensureColumn(new rex_sql_column('status', 'text'))
    ->setPrimaryKey('id')
    ->ensure();

rex_sql_table::get(rex::getTable('dsgvo_server_log'))
    ->ensureColumn(new rex_sql_column('id', 'int(11)', false, null, 'auto_increment'))
    ->ensureColumn(new rex_sql_column('domain', 'text'))
    ->ensureColumn(new rex_sql_column('status', 'text'))
    ->ensureColumn(new rex_sql_column('datestamp', 'varchar(255)'))
    ->setPrimaryKey('id')
    ->ensure();

rex_sql_table::get(rex::getTable('dsgvo_server_project'))
    ->ensureColumn(new rex_sql_column('id', 'int(11)', false, null, 'auto_increment'))
    ->ensureColumn(new rex_sql_column('domain', 'text'))
    ->ensureColumn(new rex_sql_column('api_key', 'text'))
    ->setPrimaryKey('id')
    ->ensure();