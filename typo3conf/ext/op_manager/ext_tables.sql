#
# Table structure for table 'tx_opmanager_domain_model_company'
#
CREATE TABLE tx_opmanager_domain_model_company (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	description text NOT NULL,
	description2 text NOT NULL,
	description3 text NOT NULL,
	logo int(11) unsigned NOT NULL default '0',
	photo int(11) unsigned NOT NULL default '0',
	photo_caption text NOT NULL,
	street varchar(255) DEFAULT '' NOT NULL,
	postal_code varchar(255) DEFAULT '' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,
	telephone varchar(255) DEFAULT '' NOT NULL,
	telephone2 varchar(255) DEFAULT '' NOT NULL,
	fax varchar(255) DEFAULT '' NOT NULL,
	website varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	contact_person_name varchar(255) DEFAULT '' NOT NULL,
	contact_person_telephone varchar(255) DEFAULT '' NOT NULL,
	contact_person_email varchar(255) DEFAULT '' NOT NULL,
	contact_person_fax varchar(255) DEFAULT '' NOT NULL,
	internships tinyint(1) unsigned DEFAULT '0' NOT NULL,
	contents int(11) unsigned DEFAULT '0' NOT NULL,
	job_vacancies int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_opmanager_domain_model_occupation'
#
CREATE TABLE tx_opmanager_domain_model_occupation (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	image int(11) unsigned NOT NULL default '0',
	image_caption text NOT NULL,
	introduction text NOT NULL,
	description text NOT NULL,
	description2 text NOT NULL,
	description3 text NOT NULL,
	rating int(11) DEFAULT '0' NOT NULL,
	opportunities text NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_opmanager_domain_model_jobvacancies'
#
CREATE TABLE tx_opmanager_domain_model_jobvacancies (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	company int(11) unsigned DEFAULT '0' NOT NULL,

	vacancies int(11) DEFAULT '0' NOT NULL,
	occupation int(11) unsigned DEFAULT '0',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'sys_category'
#
CREATE TABLE sys_category (

	image int(11) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_opmanager_domain_model_jobvacancies'
#
CREATE TABLE tx_opmanager_domain_model_jobvacancies (

	company int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (

	company int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_opmanager_domain_model_occupation'
#
CREATE TABLE tx_opmanager_domain_model_occupation (
	categories int(11) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'sys_file_reference'
#
CREATE TABLE sys_file_reference (

	category  int(11) unsigned DEFAULT '0' NOT NULL,

);
