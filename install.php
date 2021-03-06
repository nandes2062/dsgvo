<?php

rex_sql_table::get(rex::getTable('dsgvo_client'))
->ensureColumn(new rex_sql_column('id', 'int(11)', false, null, 'auto_increment'))
    ->ensureColumn(new rex_sql_column('category', 'text'))
    ->ensureColumn(new rex_sql_column('keyword', 'text'))
    ->ensureColumn(new rex_sql_column('domain', 'text'))
    ->ensureColumn(new rex_sql_column('lang', 'text'))
    ->ensureColumn(new rex_sql_column('prio', 'int(11)'))
    ->ensureColumn(new rex_sql_column('name', 'text'))
    ->ensureColumn(new rex_sql_column('text', 'text'))
    ->ensureColumn(new rex_sql_column('source', 'text'))
    ->ensureColumn(new rex_sql_column('source_url', 'text'))
    ->ensureColumn(new rex_sql_column('code', 'text'))
    ->ensureColumn(new rex_sql_column('status', 'text'))
    ->ensureColumn(new rex_sql_column('updatedate', 'timestamp', false, '0000-00-00 00:00:00', 'on update CURRENT_TIMESTAMP'))
    ->setPrimaryKey('id')
    ->ensure();

if (!$this->hasConfig()) {
    $this->setConfig('dsgvo_consent_css', file_get_contents(rex_path::addon('dsgvo').'assets/css/default-consent.css'));
}    